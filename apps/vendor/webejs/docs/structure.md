# Structure File


```
project
    api
    .htaccess
    index.php
    README.md
    assets
    vendor
        composer
        example-api
        guzzlehttp
        jagweb
        webejs
            action
            config
                global
                page
            docs
            public
                component
                component-apps
                config
                helper
                helper-apps
                layout
                layout-apps
                node_modules
                page
                tpl
                tpl-apps
                tpl-page
                webpack.config.js
            view
                layout
                partial
            _start.php
            readme.md
        .httaccess
        autoload.php
        composer.json
        README.md
    .htaccess
    index.php
```


## JS apps

dir yang di gunakan untuk melakukan develop
```
public
    component // component template
    component-apps // component template hanya untuk apps ini saja
    config // var atau func config
    helper // func helper yang dapat di gunakan berulang kali
    helper-apps // helper func yang di gunakan hanya dalam app ini saja
    layout // layout template
    layout-apps // layout template yang di gunakan hanya dalam app ini saja
    page // -> main dir
    tpl-apps // template yang uniq dan di gunakan hanya untuk apps ini saja
    tpl // deprecated
    tpl-page // deprecated
    webpack.config.js // webpack config
```

sedangakan dir untuk di akses browser adalah  `assets/apps`