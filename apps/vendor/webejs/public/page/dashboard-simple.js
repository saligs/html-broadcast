var global = window._wiz_global, funcInPage={};


funcInPage.render = function(){
    var tpl = require("ejs!"+__dirname+"/../tpl-page/dashboard.ejs");
    var html = tpl();
    global.ui.wrapper.append(html);
    $(document).ready(function() {
        Main.init();
        Index.init();
    });
};

funcInPage.render();