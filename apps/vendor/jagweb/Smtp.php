<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 4/30/16
 * Time: 10:40 AM
 */

namespace JagWeb;


class Smtp
{
//@{ Locale-specific error/exception messages
    const
        E_Header='%s: header is required',
        E_Blank='Message must not be blank',
        E_Attach='Attachment %s not found';
    //@}

    protected
        //! Message properties
        $headers,
        //! E-mail attachments
        $attachments,
        //! SMTP host
        $host,
        //! SMTP port
        $port,
        //! TLS/SSL
        $scheme,
        //! User ID
        $user,
        //! Password
        $pw,
        //! TCP/IP socket
        $socket,
        //! Server-client conversation
        $log;

    /**
     *	Fix header
     *	@return string
     *	@param $key string
     **/
    protected function fixheader($key) {
        return str_replace(' ','-',
            ucwords(preg_replace('/[_-]/',' ',strtolower($key))));
    }

    /**
     *	Return TRUE if header exists
     *	@return bool
     *	@param $key
     **/
    function exists($key) {
        $key=$this->fixheader($key);
        return isset($this->headers[$key]);
    }

    /**
     *	Bind value to e-mail header
     *	@return string
     *	@param $key string
     *	@param $val string
     **/
    function set($key,$val) {
        $key=$this->fixheader($key);
        return $this->headers[$key]=$val;
    }

    /**
     *	Return value of e-mail header
     *	@return string|NULL
     *	@param $key string
     **/
    function &get($key) {
        $key=$this->fixheader($key);
        if (isset($this->headers[$key]))
            $val=&$this->headers[$key];
        else
            $val=NULL;
        return $val;
    }

    /**
     *	Remove header
     *	@return NULL
     *	@param $key string
     **/
    function clear($key) {
        $key=$this->fixheader($key);
        unset($this->headers[$key]);
    }

    /**
     *	Return client-server conversation history
     *	@return string
     **/
    function log() {
        return str_replace("\n",PHP_EOL,$this->log);
    }

    /**
     *	Send SMTP command and record server response
     *	@return string
     *	@param $cmd string
     *	@param $log bool
     **/
    protected function dialog($cmd=NULL,$log=TRUE) {
        $socket=&$this->socket;
        if (!is_null($cmd))
            fputs($socket,$cmd."\r\n");
        $reply='';
        while (!feof($socket) && ($info=stream_get_meta_data($socket)) &&
            !$info['timed_out'] && $str=fgets($socket,4096)) {
            $reply.=$str;
            if (preg_match('/(?:^|\n)\d{3} .+?\r\n/s',$reply))
                break;
        }
        if ($log) {
            $this->log.=$cmd."\n";
            $this->log.=str_replace("\r",'',$reply);
        }
        return $reply;
    }

    /**
     *	Add e-mail attachment
     *	@return NULL
     *	@param $file string
     *	@param $alias string
     *	@param $cid string
     **/
    function attach($file,$alias=NULL,$cid=NULL) {
        if (!is_file($file))
            user_error(sprintf(self::E_Attach,$file),E_USER_ERROR);
        if (is_string($alias))
            $file=array($alias=>$file);
        $this->attachments[]=array('filename'=>$file,'cid'=>$cid);
    }

    /**
     *	Transmit message
     *	@return bool
     *	@param $message string
     *	@param $log bool
     **/
    function send($message,$log=TRUE) {
        if ($this->scheme=='ssl' && !extension_loaded('openssl'))
            return FALSE;
        // Message should not be blank
        if (!$message)
            user_error(self::E_Blank,E_USER_ERROR);
//        $fw=Base::instance();
        // Retrieve headers
        $headers=$this->headers;
        // Connect to the server
        $socket=&$this->socket;
        $socket=@fsockopen($this->host,$this->port);
        if (!$socket)
            return FALSE;
        stream_set_blocking($socket,TRUE);
        // Get server's initial response
        $this->dialog(NULL,FALSE);
        // Announce presence
        if(!empty($_SERVER['SERVER_NAME'])){
            $shost = $_SERVER['SERVER_NAME'];
        }else{
            $shost = ' ';
        }
        $reply=$this->dialog('EHLO '.$shost,$log);
        if (strtolower($this->scheme)=='tls') {
            $this->dialog('STARTTLS',$log);
            stream_socket_enable_crypto(
                $socket,TRUE,STREAM_CRYPTO_METHOD_TLS_CLIENT);
            $reply=$this->dialog('EHLO '.$shost,$log);
        }
        if (preg_match('/8BITMIME/',$reply))
            $headers['Content-Transfer-Encoding']='8bit';
        else {
            $headers['Content-Transfer-Encoding']='quoted-printable';
            $message=preg_replace('/^\.(.+)/m',
                '..$1',quoted_printable_encode($message));
        }
        if ($this->user && $this->pw && preg_match('/AUTH/',$reply)) {
            // Authenticate
            $this->dialog('AUTH LOGIN',$log);
            $this->dialog(base64_encode($this->user),$log);
            $this->dialog(base64_encode($this->pw),$log);
        }
        // Required headers
        $reqd=array('From','To','Subject');
        foreach ($reqd as $id)
            if (empty($headers[$id]))
                user_error(sprintf(self::E_Header,$id),E_USER_ERROR);
        $eol="\r\n";
        $str='';
        // Stringify headers
        foreach ($headers as $key=>&$val) {
            if (!in_array($key,$reqd) && (!$this->attachments ||
                    $key!='Content-Type' && $key!='Content-Transfer-Encoding'))
                $str.=$key.': '.$val.$eol;
            if (in_array($key,array('From','To','Cc','Bcc')) &&
                !preg_match('/[<>]/',$val))
                $val='<'.$val.'>';
            unset($val);
        }
        // Start message dialog
        $this->dialog('MAIL FROM: '.strstr($headers['From'],'<'),$log);
        foreach ($this->split($headers['To'].
            (isset($headers['Cc'])?(';'.$headers['Cc']):'').
            (isset($headers['Bcc'])?(';'.$headers['Bcc']):'')) as $dst)
            $this->dialog('RCPT TO: '.strstr($dst,'<'),$log);
        $this->dialog('DATA',$log);
        if ($this->attachments) {
            // Replace Content-Type
            $type=$headers['Content-Type'];
            unset($headers['Content-Type']);
            $enc=$headers['Content-Transfer-Encoding'];
            unset($headers['Content-Transfer-Encoding']);
            $hash=uniqid(NULL,TRUE);
            // Send mail headers
            $out='Content-Type: multipart/mixed; boundary="'.$hash.'"'.$eol;
            foreach ($headers as $key=>$val)
                if ($key!='Bcc')
                    $out.=$key.': '.$val.$eol;
            $out.=$eol;
            $out.='This is a multi-part message in MIME format'.$eol;
            $out.=$eol;
            $out.='--'.$hash.$eol;
            $out.='Content-Type: '.$type.$eol;
            $out.='Content-Transfer-Encoding: '.$enc.$eol;
            $out.=$str.$eol;
            $out.=$message.$eol;
            foreach ($this->attachments as $attachment) {
                if (is_array($attachment['filename'])) {
                    list($alias,$file)=each($attachment['filename']);
                    $filename=$alias;
                    $attachment['filename']=$file;
                }
                else
                    $filename=basename($attachment['filename']);
                $out.='--'.$hash.$eol;
                $out.='Content-Type: application/octet-stream'.$eol;
                $out.='Content-Transfer-Encoding: base64'.$eol;
                if ($attachment['cid'])
                    $out.='Content-ID: '.$attachment['cid'].$eol;
                $out.='Content-Disposition: attachment; '.
                    'filename="'.$filename.'"'.$eol;
                $out.=$eol;
                $out.=chunk_split(base64_encode(
                        file_get_contents($attachment['filename']))).$eol;
            }
            $out.=$eol;
            $out.='--'.$hash.'--'.$eol;
            $out.='.';
            $this->dialog($out,FALSE);
        }
        else {
            // Send mail headers
            $out='';
            foreach ($headers as $key=>$val)
                if ($key!='Bcc')
                    $out.=$key.': '.$val.$eol;
            $out.=$eol;
            $out.=$message.$eol;
            $out.='.';
            // Send message
            $this->dialog($out);
        }
        $this->dialog('QUIT',$log);
        if ($socket)
            fclose($socket);
        return TRUE;
    }

    /**
     *	Instantiate class
     *	@param $host string
     *	@param $port int
     *	@param $scheme string
     *	@param $user string
     *	@param $pw string
     **/
    function __construct($host='localhost',$port=25,$scheme=null,$user=null,$pw=null) {
        $this->headers=array(
            'MIME-Version'=>'1.0',
            'Content-Type'=>'text/html; '.
                'charset=UTF-8'
        );
        $this->host=$host;
        if (strtolower($this->scheme=strtolower($scheme))=='ssl')
            $this->host='ssl://'.$host;
        $this->port=$port;
        $this->user=$user;
        $this->pw=$pw;
    }

    /**
     *	Split comma-, semi-colon, or pipe-separated string
     *	@return array
     *	@param $str string
     *	@param $noempty bool
     **/
    function split($str,$noempty=TRUE) {
        return array_map('trim',
            preg_split('/[,;|]/',$str,0,$noempty?PREG_SPLIT_NO_EMPTY:0));
    }


    /**
     *	Convenience method for checking property value
     *	@return mixed
     *	@param $key string
     **/
    function offsetexists($key) {
        return Base::instance()->visible($this,$key)?
            isset($this->$key):$this->exists($key);
    }

    /**
     *	Convenience method for assigning property value
     *	@return mixed
     *	@param $key string
     *	@param $val scalar
     **/
    function offsetset($key,$val) {
        return Base::instance()->visible($this,$key)?
            ($this->key=$val):$this->set($key,$val);
    }

    /**
     *	Convenience method for retrieving property value
     *	@return mixed
     *	@param $key string
     **/
    function &offsetget($key) {
        if (Base::instance()->visible($this,$key))
            $val=&$this->$key;
        else
            $val=&$this->get($key);
        return $val;
    }

    /**
     *	Convenience method for removing property value
     *	@return NULL
     *	@param $key string
     **/
    function offsetunset($key) {
        if (Base::instance()->visible($this,$key))
            unset($this->$key);
        else
            $this->clear($key);
    }

    /**
     *	Alias for offsetexists()
     *	@return mixed
     *	@param $key string
     **/
    function __isset($key) {
        return $this->offsetexists($key);
    }

    /**
     *	Alias for offsetset()
     *	@return mixed
     *	@param $key string
     *	@param $val scalar
     **/
    function __set($key,$val) {
        return $this->offsetset($key,$val);
    }

    /**
     *	Alias for offsetget()
     *	@return mixed
     *	@param $key string
     **/
    function &__get($key) {
        $val=&$this->offsetget($key);
        return $val;
    }

    /**
     *	Alias for offsetunset()
     *	@return NULL
     *	@param $key string
     **/
    function __unset($key) {
        $this->offsetunset($key);
    }


}