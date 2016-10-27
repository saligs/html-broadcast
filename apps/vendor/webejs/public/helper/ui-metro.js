var h = {};

h.goToTop = function(){
    var Go2TopOperation = function(){
        var CurrentWindowPosition = $(window).scrollTop();// current vertical position
        if (CurrentWindowPosition > 100) {
            $(".go2top").show();
        } else {
            $(".go2top").hide();
        }
    };

    Go2TopOperation();// call headerFix() when the page was loaded
    if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
        $(window).bind("touchend touchcancel touchleave", function(e){
            Go2TopOperation();
        });
    } else {
        $(window).scroll(function() {
            Go2TopOperation();
        });
    }

    $(".go2top").click(function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 600);
    });
};


h.checkLogin = function(configConst, cb) {
  $.post(configConst.urlBaseApi + 'is-admin', function(data) {
    if(data.status){
      cb();
    }else{
      window.location = configConst.urlLogin;
    }
  }, 'json');
};


h.webConfig = function(configConst, cb){
  $.post(configConst.urlBaseApi + 'web-config', function(data){
      if(data.status){
          cb(data.data);
      }
  }, 'json');
};


module.exports = h;
