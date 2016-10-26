var global = window._wiz_global, funcInPage={};


funcInPage.render = function(){
    var tplLayout = require("ejs!"+__dirname+"/../layout/dashboard.ejs");
    var html = tplLayout();
    global.ui.wrapper.append(html);

    // nav
    var nav = require(__dirname+"/../config/global/navigation.js");
    nav.init(function(data){
        var tplSidebar = require("ejs!"+__dirname+"/../component/sidebar.ejs");
        var html = tplSidebar({navigation:data, tplItem:require("ejs!"+__dirname+"/../component/navigation-item.ejs")});
        $('#sidebar').html(html);
        var ui = require(__dirname+"/../helper/ui-packet.js");
        ui.sidebarHandler();
    });

    // header
    var tplHeader = require("ejs!"+__dirname+"/../component/header.ejs");
    html = tplHeader();
    $('#header').html(html);


    // breadcrumb
    var tplBreadcrumb = require("ejs!"+__dirname+"/../component/breadcrumb.ejs");
    html = tplBreadcrumb(global.configPage.breadcrumb);
    $('#breadcrumb').html(html);
};


funcInPage.render();


