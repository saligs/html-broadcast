# How to create script apps for page

contoh script apps nya:

```
var global = window._wiz_global, funcInPage={};

funcInPage.render = function(){
    var tpl = require("ejs!"+__dirname+"/../tpl-page/dashboard.ejs");
    var html = tpl();
    // global.ui.wrapper = $('#app')
    global.ui.wrapper.append(html);

    // init theme
    Main.init();
    Index.init();
};

funcInPage.render();
```


## Cara memanggil template

```
var tpl = require("ejs!"+__dirname+"/../tpl-page/dashboard.ejs");
```

syntak di atas adalah syntax dari webpack.
yang artinya:
script ini require("ejs!"+__dirname+"/../tpl-page/dashboard.ejs") akan di ganti function template ejs dari file
`tpl-page/dashboard.ejs`
