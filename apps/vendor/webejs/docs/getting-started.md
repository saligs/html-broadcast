# Getting Started

## How step create Page

* Pilih nama untuk page tersebut
misal : dashboard-simple

url untuk mengakses halaman ini : `http:BASE_URL/dashboard-simple `

* Buat config

tiap halaman harus memiliki config

path config : `VENDOR_DIR/webejs/config`


contoh config halaman :

```
return [
    'name' => 'dashboard-simple',
    'layout' => 'default',
    'seo' => [
        'title' => 'Beon Apps'
    ],
    'js_var' => [],
    'js_file' => require(VENDOR_DIR . '/webejs/config/global/default-js-file.php'),
    'css_file' => require(VENDOR_DIR . '/webejs/config/global/default-css-file.php'),
];
```

* Buat apps js

tiap halaman harus memiliki apps js sesuai name page nya

path app js : `VENDOR_DIR/webejs/public/page`

create file `VENDOR_DIR/webejs/public/page/dashboard-simple.js`

contoh script apps nya:

```
var global = window._wiz_global, funcInPage={};

funcInPage.render = function(){
    var tpl = require("ejs!"+__dirname+"/../tpl-page/dashboard.ejs");
    var html = tpl();
    global.ui.wrapper.append(html);
    // init theme
    Main.init();
    Index.init();
};

funcInPage.render();
```

* Tambahkan webpack config

path webpack config : `VENDOR_DIR/webejs/public/webpack.config.js`

pada bagian entry, tambahkan konfigurasi page baru

```
entry: {
        "xxxxxx": "xxxxxxxxxxxx",
        "xxxxxx": "xxxxxxxxxxxx",
        "xxxxxx": "xxxxxxxxxxxx",
        "halaman-baru": __dirname + "/page/halaman-baru.js",
    },
```

* Compile secriptnya

cd VENDOR_DIR/webejs/public
webpack

## Tambahan EJS Editor di PHPStorm

Masuk ke menu File > Settings > Editor > File Types > pilih HTML > tambahkan ekstensi *.ejs

## What Next

apa saja yang harus di pelajari :

* js language
* ejs language
* webpack command
