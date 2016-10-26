/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	/**
	 * Created by gilas on 07/10/16.
	 */
	var global = window._wiz_global, funcInPage={};

	funcInPage.render = function(){
	    var tplLayout = __webpack_require__(1);
	    var html = tplLayout();
	    global.ui.wrapper.append(html);

	    // nav
	    var nav = __webpack_require__(2);
	    nav.init(function(data){
	        var tplSidebar = __webpack_require__(4);
	        var html = tplSidebar({navigation:data, tplItem:__webpack_require__(5)});
	        $('#sidebar').html(html);
	        var ui = __webpack_require__(6);
	        ui.sidebarHandler();
	    });

	    // header
	    var tplHeader = __webpack_require__(7);
	    html = tplHeader();
	    $('#header').html(html);


	    // breadcrumb
	    var tplBreadcrumb = __webpack_require__(8);
	    html = tplBreadcrumb(global.configPage.breadcrumb);
	    $('#breadcrumb').html(html);

	    // content
	    var tplContent = __webpack_require__(11);
	    html = tplContent();
	    $('#c-section-1').html(html);
	    //FormElements.init();
	};

	funcInPage.render();


/***/ },
/* 1 */
/***/ function(module, exports) {

	module.exports = function (obj) {
	obj || (obj = {});
	var __t, __p = '';
	with (obj) {
	__p += '<!-- sidebar -->\n<div class="sidebar app-aside" id="sidebar">\n</div>\n<!-- / sidebar -->\n<div class="app-content">\n    <!-- start: TOP NAVBAR -->\n    <header id="header" class="navbar navbar-default navbar-static-top">\n    </header>\n    <!-- end: TOP NAVBAR -->\n    <div class="main-content" >\n        <div class="wrap-content container" id="container">\n            <div id="breadcrumb">\n            </div>\n\n            <div id="c-section-1">\n            </div>\n\n            <div id="c-section-2">\n            </div>\n\n            <div id="c-section-3">\n            </div>\n\n            <div id="c-section-4">\n            </div>\n\n            <div id="c-section-5">\n            </div>\n\n        </div>\n    </div>\n</div>\n<!-- start: FOOTER -->\n<footer id="footer">\n</footer>\n<!-- end: FOOTER -->';

	}
	return __p
	}

/***/ },
/* 2 */
/***/ function(module, exports, __webpack_require__) {

	var config = {};

	var web = __webpack_require__(3);

	config.init = function (callback) {
	    $.post(web.urlBaseApi + 'fetch-navigation', function(data){
	        console.log(data);
	        if(data.status){
	            callback(data.data);
	        }
	    });

	};

	module.exports = config;

/***/ },
/* 3 */
/***/ function(module, exports) {

	var config = {}, global = window._wiz_global;

	config.urlBase = global.urlBase;
	config.urlBaseApi = config.urlBase + 'api/';

	config.init = function (callback) {
	    callback(config);
	};

	module.exports = config;


/***/ },
/* 4 */
/***/ function(module, exports) {

	module.exports = function (obj) {
	obj || (obj = {});
	var __t, __p = '', __j = Array.prototype.join;
	function print() { __p += __j.call(arguments, '') }
	with (obj) {
	__p += '<div class="sidebar-container perfect-scrollbar">\n    <div>\n        <!-- start: SEARCH FORM -->\n        <!--<div class="search-form hidden-md hidden-lg">-->\n            <!--<a class="s-open" href="#"> <i class="ti-search"></i> </a>-->\n            <!--<form class="navbar-form" role="search">-->\n                <!--<a class="s-remove" href="#" target=".navbar-form"> <i class="ti-close"></i> </a>-->\n                <!--<div class="form-group">-->\n                    <!--<input type="text" class="form-control" placeholder="Enter search text here...">-->\n                    <!--<button class="btn search-button" type="submit">-->\n                        <!--<i class="ti-search"></i>-->\n                    <!--</button>-->\n                <!--</div>-->\n            <!--</form>-->\n        <!--</div>-->\n        <!-- end: SEARCH FORM -->\n        <!-- start: USER OPTIONS -->\n        <div class="nav-user-wrapper">\n            <div class="media">\n                <div class="media-left">\n                    <a class="profile-card-photo" href="#"><img alt="" src="assets/images/avatar-1.jpg"></a>\n                </div>\n                <div class="media-body">\n                    <span class="media-heading text-white">Peter Clark</span>\n                    <div class="text-small text-white-transparent">\n                        UI Designer\n                    </div>\n                </div>\n                <div class="media-right media-middle">\n                    <div class="dropdown">\n                        <button href class="btn btn-transparent text-white dropdown-toggle" data-toggle="dropdown">\n                            <i class="fa fa-caret-down"></i>\n                        </button>\n                        <ul class="dropdown-menu animated fadeInRight pull-right">\n                            <li>\n                                <a href="#"> My Profile </a>\n                            </li>\n                            <li>\n                                <a href="#"> My Calendar </a>\n                            </li>\n                            <li>\n                                <a href="#"> My Messages (3) </a>\n                            </li>\n                            <li>\n                                <a href="#"> Lock Screen </a>\n                            </li>\n                            <li class="divider"></li>\n                            <li>\n                                <a href="#"> Log Out </a>\n                            </li>\n                        </ul>\n                    </div>\n                </div>\n            </div>\n        </div>\n        <!-- end: USER OPTIONS -->\n        <nav>\n            ';
	 _.each(navigation, function(item){ ;
	__p += '\n            <div class="navbar-title">\n                <span>' +
	((__t = ( item.title )) == null ? '' : __t) +
	'</span>\n            </div>\n            <ul class="main-navigation-menu">\n                ';
	 _.each(item.navigation, function(e){ ;
	__p += '\n                ' +
	((__t = ( tplItem(e)  )) == null ? '' : __t) +
	'\n                ';
	 }); ;
	__p += '\n            </ul>\n            ';
	 }); ;
	__p += '\n        </nav>\n    </div>\n</div>';

	}
	return __p
	}

/***/ },
/* 5 */
/***/ function(module, exports) {

	module.exports = function (obj) {
	obj || (obj = {});
	var __t, __p = '', __j = Array.prototype.join;
	function print() { __p += __j.call(arguments, '') }
	with (obj) {

	 if (typeof childs !== 'undefined' && childs) { ;
	__p += '\n';
	 var tmp=false; ;
	__p += '\n';
	 _.each(childs, function(e, i){ ;
	__p += '\n';
	 if(e.name == window._wiz_global.configPage.name){ ;
	__p += '\n    ';
	 tmp=true; ;
	__p += '\n';
	 } ;
	__p += '\n';
	 }); ;
	__p += '\n';
	 if(name == window._wiz_global.configPage.name || tmp){ ;
	__p += '\n<li class="active open">\n';
	 }else{ ;
	__p += '\n<li>\n';
	 } ;
	__p += '\n    <a href="javascript:void(0)">\n        <div class="item-content">\n            <div class="item-media">\n                <i class="fa fa-clone"></i>\n            </div>\n            <div class="item-inner">\n                <span class="title"> ' +
	((__t = ( label )) == null ? '' : __t) +
	' </span><i class="icon-arrow"></i>\n            </div>\n        </div> </a>\n    <ul class="sub-menu">\n        ';
	 _.each(childs, function(e, i){ ;
	__p += '\n            <li>\n                <a href="' +
	((__t = ( e.href )) == null ? '' : __t) +
	'"> <span class="title"> ' +
	((__t = ( e.label )) == null ? '' : __t) +
	' </span> </a>\n            </li>\n        ';
	 }); ;
	__p += '\n    </ul>\n</li>\n';
	 }else{ ;
	__p += '\n    ';
	 if(name == window._wiz_global.configPage.name){ ;
	__p += '\n<li class="active open">\n    ';
	 }else{ ;
	__p += '\n<li>\n    ';
	 } ;
	__p += '\n    <a href="' +
	((__t = ( href )) == null ? '' : __t) +
	'">\n        <div class="item-content">\n            <div class="item-media">\n                <i class="' +
	((__t = ( icon )) == null ? '' : __t) +
	'"></i>\n            </div>\n            <div class="item-inner">\n                <span class="title"> ' +
	((__t = ( label )) == null ? '' : __t) +
	' </span>\n            </div>\n        </div> </a>\n</li>\n';
	 } ;
	__p += '\n\n\n';

	}
	return __p
	}

/***/ },
/* 6 */
/***/ function(module, exports) {

	'use strict';

	var themePacket = {};


	var Main = function() {
	    var $html = $('html'), $win = $(window), wrap = $('.app-aside'), MEDIAQUERY = {}, app = $('#app');
	    var clipSetting = {}, appSetting = {};
	    MEDIAQUERY = {
	        desktopXL : 1200,
	        desktop : 992,
	        tablet : 768,
	        mobile : 480
	    };
	    $(".current-year").text((new Date()).getFullYear());
	    //sidebar
	    var sidebarHandler = function() {
	        var eventObject = isTouch() ? 'click' : 'mouseenter', elem = $('#sidebar'), ul = "", menuTitle, _this, sidebarToggler = $('.sidebar-toggler'), sidebarMobileToggler = $('.sidebar-mobile-toggler'), $winOffsetTop = 0, $winScrollTop = 0, $appWidth, space = 0;

	        elem.on('click', 'a', function(e) {

	            _this = $(this);
	            if (isSidebarClosed() && !isSmallDevice() && !_this.closest("ul").hasClass("sub-menu"))
	                return;

	            _this.closest("ul").find(".open").not(".active").children("ul").not(_this.next()).slideUp(200).parent('.open').removeClass("open");
	            if (_this.next().is('ul') && _this.parent().toggleClass('open')) {

	                _this.next().slideToggle(200, function() {
	                    $win.trigger("resize");

	                });
	                e.stopPropagation();
	                e.preventDefault();
	            } else {
	                //_this.parent().addClass("active");

	            }
	        });
	        elem.on(eventObject, 'a', function(e) {
	            if (!isSidebarClosed() || isSmallDevice())
	                return;
	            _this = $(this);

	            if (!_this.parent().hasClass('hover') && !_this.closest("ul").hasClass("sub-menu")) {
	                wrapLeave();
	                _this.parent().addClass('hover');
	                menuTitle = _this.find(".item-inner").clone();
	                if (_this.parent().hasClass('active')) {
	                    menuTitle.addClass("active");
	                }

	                if ($('#app').hasClass('lyt-3')) {
	                    space = $('#sidebar > .sidebar-container').position().top - $('header').outerHeight() + _this.position().top;
	                }
	                var offset = $('#sidebar > .sidebar-container > div').position().top + $('.nav-user-wrapper').outerHeight() + $('header').outerHeight();
	                var itemTop = isSidebarFixed() && !isBoxedPage() ? _this.parent().position().top + offset + space : (_this.parent().offset().top - $('header').outerHeight());
	                menuTitle.css({
	                    position : isSidebarFixed() && !isBoxedPage() ? 'fixed' : 'absolute',
	                    height : _this.parent().outerHeight(),
	                    top : itemTop,
	                    borderBottomRightRadius : '10px',
	                    lineHeight : _this.parent().outerHeight() + 'px',
	                    padding : 0
	                }).appendTo(wrap);
	                if (_this.next().is('ul')) {
	                    ul = _this.next().clone(true);
	                    menuTitle.css({
	                        borderBottomRightRadius : 0
	                    });
	                    ul.appendTo(wrap).css({
	                        top : itemTop + _this.parent().outerHeight(),
	                        position : isSidebarFixed() && !isBoxedPage() ? 'fixed' : 'absolute',
	                    });
	                    if (_this.parent().position().top + _this.outerHeight() + offset + ul.height() > $win.height() && isSidebarFixed() && !isBoxedPage()) {
	                        ul.css('bottom', 0);
	                    } else {
	                        ul.css('bottom', 'auto');
	                    }

	                    wrap.find('.sidebar-container').scroll(function() {
	                        if (isSidebarFixed() && !isBoxedPage())
	                            wrapLeave();
	                    });

	                    setTimeout(function() {

	                        if (!wrap.is(':empty')) {
	                            $(document).on('click tap', wrapLeave);
	                        }
	                    }, 300);

	                } else {
	                    ul = "";
	                    return;
	                }

	            }
	        });
	        wrap.on('mouseleave', function(e) {
	            $(document).off('click tap', wrapLeave);
	            $('.hover', wrap).removeClass('hover');
	            $('> .item-inner', wrap).remove();
	            $('> ul', wrap).remove();
	        });

	        sidebarMobileToggler.on('click', function() {

	            $winScrollTop = $winOffsetTop;
	            if (!$('#app').hasClass('app-slide-off') && !$('#app').hasClass('app-offsidebar-open')) {
	                $winOffsetTop = $win.scrollTop();
	                $winScrollTop = 0;
	                $('footer').hide();
	                $appWidth = $('#app .main-content').innerWidth();
	                $('#app .main-content').css({
	                    position : 'absolute',
	                    top : -$winOffsetTop,
	                    width : $appWidth
	                });
	            } else {
	                resetSidebar();
	            }

	        });

	        sidebarToggler.on('click', function() {
	            $('.main-content').on('webkitTransitionEnd mozTransitionEnd oTransitionEnd otransitionend transitionend', function() {
	                var evt = window.document.createEvent('UIEvents');
	                evt.initUIEvent('resize', true, false, window, 0);
	                window.dispatchEvent(evt);

	                $('.main-content').off('webkitTransitionEnd mozTransitionEnd oTransitionEnd otransitionend transitionend');
	            });

	        });

	        $(document).on("mousedown touchstart", function(e) {
	            if (elem.has(e.target).length === 0 && !elem.is(e.target) && sidebarMobileToggler.has(e.target).length === 0 && !sidebarMobileToggler.is(e.target) && ($('#app').hasClass('app-slide-off') || $('#app').hasClass('app-offsidebar-open'))) {
	                resetSidebar();
	            }
	        });

	        var resetSidebar = function() {
	            $winScrollTop = $winOffsetTop;
	            $("#app .app-content").one("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function() {

	                if (!$('#app').hasClass('app-slide-off') && !$('#app').hasClass('app-offsidebar-open')) {
	                    $('#app .main-content').css({
	                        position : 'relative',
	                        top : 'auto',
	                        width : 'auto'
	                    });

	                    window.scrollTo(0, $winScrollTop);
	                    $('footer').show();
	                    $("#app .app-content").off("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd");
	                }

	            });
	        };
	    };
	    $('.lettericon').letterIcon();

	    $('.sidebar-toggler').on('click', function(){
	        app.toggleClass('app-sidebar-closed');
	        $('#closed-sidebar').siblings().remove();
	        $('#closed-sidebar').prop('checked', app.hasClass('app-sidebar-closed'));
	        var switchery = new Switchery(document.getElementById('closed-sidebar'));
	        appSetting.closedSidebar = app.hasClass('app-sidebar-closed');

	    });
	    // navbar collapse
	    var navbarHandler = function() {
	        var navbar = $('.navbar-collapse > .nav');
	        var pageHeight = $win.innerHeight() - $('header').outerHeight();
	        var collapseButton = $('#menu-toggler');
	        if (isSmallDevice()) {
	            navbar.css({
	                height : pageHeight
	            });
	        } else {
	            navbar.css({
	                height : 'auto'
	            });
	        }
	        $(document).on("mousedown touchstart", toggleNavbar);
	        function toggleNavbar(e) {
	            if (navbar.has(e.target).length === 0 && !navbar.is(e.target) && collapseButton.has(e.target).length === 0 && !collapseButton.is(e.target) && navbar.parent().hasClass("collapse in")) {
	                collapseButton.trigger("click");
	            }
	        }

	    };
	    // tooltips handler
	    var tooltipHandler = function() {
	        $('[data-toggle="tooltip"]').tooltip();
	    };
	    // popovers handler
	    var popoverHandler = function() {
	        $('[data-toggle="popover"]').popover();
	    };
	    // perfect scrollbar
	    var perfectScrollbarHandler = function() {
	        var pScroll = $(".perfect-scrollbar");

	        if (!isMobile() && pScroll.length) {
	            pScroll.perfectScrollbar({
	                suppressScrollX : true
	            });
	            pScroll.on("mousemove", function() {
	                $(this).perfectScrollbar('update');
	            });

	        }
	    };
	    //toggle class
	    var toggleClassOnElement = function() {
	        var toggleAttribute = $('*[data-toggle-class]');
	        toggleAttribute.each(function() {
	            var _this = $(this);
	            var toggleClass = _this.attr('data-toggle-class');
	            var outsideElement;
	            var toggleElement;
	            typeof _this.attr('data-toggle-target') !== 'undefined' ? toggleElement = $(_this.attr('data-toggle-target')) : toggleElement = _this;
	            _this.on("click", function(e) {
	                if (_this.attr('data-toggle-type') !== 'undefined' && _this.attr('data-toggle-type') == "on") {
	                    toggleElement.addClass(toggleClass);
	                } else if (_this.attr('data-toggle-type') !== 'undefined' && _this.attr('data-toggle-type') == "off") {
	                    toggleElement.removeClass(toggleClass);
	                } else {
	                    toggleElement.toggleClass(toggleClass);
	                }
	                e.preventDefault();
	                if (_this.attr('data-toggle-click-outside')) {

	                    outsideElement = $(_this.attr('data-toggle-click-outside'));
	                    $(document).on("mousedown touchstart", toggleOutside);

	                }

	            });

	            var toggleOutside = function(e) {
	                if (outsideElement.has(e.target).length === 0 && !outsideElement.is(e.target) && !toggleAttribute.is(e.target) && toggleElement.hasClass(toggleClass)) {
	                    toggleElement.removeClass(toggleClass);
	                    $(document).off("mousedown touchstart", toggleOutside);
	                }
	            };

	        });
	    };
	    //switchery
	    var switcheryHandler = function() {
	        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

	        elems.forEach(function(html) {
	            var switchery = new Switchery(html);
	        });
	    };
	    //search form
	    var searchHandler = function() {
	        var elem = $('.search-form');
	        var searchForm = elem.children('form');
	        var formWrap = elem.parent();

	        $(".s-open").on('click', function(e) {
	            searchForm.prependTo(wrap);
	            e.preventDefault();
	            $(document).on("mousedown touchstart", closeForm);
	        });
	        $(".s-remove").on('click', function(e) {
	            searchForm.appendTo(elem);
	            e.preventDefault();
	        });
	        var closeForm = function(e) {
	            if (!searchForm.is(e.target) && searchForm.has(e.target).length === 0) {
	                $(".s-remove").trigger('click');
	                $(document).off("mousedown touchstart", closeForm);
	            }
	        };
	    };
	    // settings
	    var settingsHandler = function() {

	        clipSetting = {
	            fixedHeader : true,
	            fixedSidebar : true,
	            closedSidebar : false,
	            fixedFooter : false,
	            theme : 'lyt2-theme-1'
	        };

	        if (Cookies.get('clip-setting')) {
	            appSetting = $.parseJSON(Cookies.get('clip-setting'));
	        } else {
	            appSetting = clipSetting;
	        }

	        appSetting.fixedHeader ? app.addClass('app-navbar-fixed') : app.removeClass('app-navbar-fixed');
	        appSetting.fixedSidebar ? app.addClass('app-sidebar-fixed') : app.removeClass('app-sidebar-fixed');
	        appSetting.closedSidebar ? app.addClass('app-sidebar-closed') : app.removeClass('app-sidebar-closed');
	        appSetting.fixedFooter ? app.addClass('app-footer-fixed') : app.removeClass('app-footer-fixed');
	        app.hasClass("app-navbar-fixed") ? $('#fixed-header').prop('checked', true) : $('#fixed-header').prop('checked', false);
	        app.hasClass("app-sidebar-fixed") ? $('#fixed-sidebar').prop('checked', true) : $('#fixed-sidebar').prop('checked', false);
	        app.hasClass("app-sidebar-closed") ? $('#closed-sidebar').prop('checked', true) : $('#closed-sidebar').prop('checked', false);
	        app.hasClass("app-footer-fixed") ? $('#fixed-footer').prop('checked', true) : $('#fixed-footer').prop('checked', false);
	        $('#skin_color').attr("href", "assets/css/themes/" + appSetting.theme + ".css");
	        $('input[name="setting-theme"]').each(function() {
	            $(this).val() == appSetting.theme ? $(this).prop('checked', true) : $(this).prop('checked', false);
	        });
	        //switchLogo(appSetting.theme);

	        $('input[name="setting-theme"]').change(function() {
	            var selectedTheme = $(this).val();
	            $('#skin_color').attr("href", "assets/css/themes/" + selectedTheme + ".css");
	            appSetting.theme = selectedTheme;

	        });

	        $('#fixed-header').change(function() {
	            $(this).is(":checked") ? app.addClass("app-navbar-fixed") : app.removeClass("app-navbar-fixed");
	            appSetting.fixedHeader = $(this).is(":checked");
	        });
	        $('#fixed-sidebar').change(function() {
	            $(this).is(":checked") ? app.addClass("app-sidebar-fixed") : app.removeClass("app-sidebar-fixed");
	            appSetting.fixedSidebar = $(this).is(":checked");
	        });
	        $('#closed-sidebar').change(function() {
	            $(this).is(":checked") ? app.addClass("app-sidebar-closed") : app.removeClass("app-sidebar-closed");
	            appSetting.closedSidebar = $(this).is(":checked");
	        });
	        $('#fixed-footer').change(function() {
	            $(this).is(":checked") ? app.addClass("app-footer-fixed") : app.removeClass("app-footer-fixed");
	            appSetting.fixedFooter = $(this).is(":checked");

	        });
	        function switchLogo(theme) {
	            switch (theme) {
	                case "theme-2":
	                case "theme-3":
	                case "theme-5":
	                case "theme-6":
	                    $(".navbar-brand img").attr("src", "assets/images/logo2.png");
	                    break;

	                default:
	                    $(".navbar-brand img").attr("src", "assets/images/logo.png");
	                    break;
	            }
	        }

	        function defaultSetting() {

	        }

	    };
	    // function to allow a button or a link to open a tab
	    var showTabHandler = function(e) {
	        if ($(".show-tab").length) {
	            $('.show-tab').on('click', function(e) {
	                e.preventDefault();
	                var tabToShow = $(this).attr("href");
	                if ($(tabToShow).length) {
	                    $('a[href="' + tabToShow + '"]').tab('show');
	                }
	            });
	        }
	    };
	    var saveLayout = $('#save-layout').ladda();

	    $('#save-layout').on('click', function() {
	        saveLayout.ladda('start');
	        Cookies.set("clip-setting", JSON.stringify(appSetting));
	        setTimeout(function() {
	            saveLayout.ladda('stop');
	        }, 1500);
	    });

	    var resetLayout = $('#reset-layout').ladda();

	    $('#reset-layout').on('click', function() {
	        resetLayout.ladda('start');
	        Cookies.remove('clip-setting');
	        $('input.js-switch').siblings().remove();
	        $('#fixed-header').prop('checked', true);
	        $('#fixed-sidebar').prop('checked', true);
	        $('#closed-sidebar').prop('checked', false);
	        $('#fixed-footer').prop('checked', false);
	        $('#skin_color').attr("href", "assets/css/themes/lyt2-theme-1.css");
	        switcheryHandler();
	        settingsHandler();
	        setTimeout(function() {
	            resetLayout.ladda('stop');
	        }, 1500);
	    });
	    // function to enable panel scroll with perfectScrollbar
	    var panelScrollHandler = function() {
	        var panelScroll = $(".panel-scroll");
	        if (panelScroll.length && !isMobile()) {
	            panelScroll.perfectScrollbar({
	                suppressScrollX : true
	            });
	        }
	    };
	    //function to activate the panel tools
	    var panelToolsHandler = function() {

	        // panel close
	        $('body').on('click', '.panel-close', function(e) {
	            var panel = $(this).closest('.panel');

	            destroyPanel();

	            function destroyPanel() {
	                var col = panel.parent();
	                panel.fadeOut(300, function() {
	                    $(this).remove();
	                    if (col.is('[class*="col-"]') && col.children('*').length === 0) {
	                        col.remove();
	                    }
	                });
	            }


	            e.preventDefault();
	        });
	        // panel refresh
	        $('body').on('click', '.panel-refresh', function(e) {
	            var $this = $(this), csspinnerClass = 'csspinner', panel = $this.parents('.panel').eq(0), spinner = $this.data('spinner') || "load1";
	            panel.addClass(csspinnerClass + ' ' + spinner);

	            window.setTimeout(function() {
	                panel.removeClass(csspinnerClass);
	            }, 1000);
	            e.preventDefault();
	        });
	        // panel collapse
	        $('body').on('click', '.panel-collapse', function(e) {
	            e.preventDefault();
	            var el = $(this);
	            var panel = $(this).closest(".panel");
	            var bodyPanel = panel.children(".panel-wrapper");
	            if (!bodyPanel.length) {
	                bodyPanel = panel.children(".panel-body");
	            }
	            bodyPanel.slideToggle(200, function() {
	                panel.toggleClass("collapses");
	            });
	        });
	        // panel expand
	        $('body').on('click', '.panel-expand', function(e) {
	            e.preventDefault();
	            var el = $(this);

	            var panel = $(this).closest(".panel");

	            panel.toggleClass("panel-fullscreen").toggleFullScreen();
	            if (panel.hasClass("panel-fullscreen")) {
	                el.attr("data-original-title", "Compress");
	            } else {
	                el.attr("data-original-title", "Expand");
	            }
	        });

	    };

	    $('body').on('click', '.toggle-fullscreen', function(e) {
	        e.preventDefault();
	        var el = $(this);
	        $(document).toggleFullScreen();
	        $("#app").toggleClass("isFullscreen");
	    });

	    // function to activate the Go-Top button
	    var goTopHandler = function(e) {
	        $('.go-top').on('click', function(e) {
	            $("html, body").animate({
	                scrollTop : 0
	            }, "slow");
	            e.preventDefault();
	        });
	    };
	    var customSelectHandler = function() {
	        [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function(el) {
	            new SelectFx(el);
	        });
	    };
	    // Window Resize Function
	    var resizeHandler = function(func, threshold, execAsap) {
	        $(window).resize(function() {
	            navbarHandler();
	            if (isLargeDevice()) {
	                $('#app .main-content').css({
	                    position : 'relative',
	                    top : 'auto',
	                    width : 'auto'
	                });
	                $('footer').show();
	            }
	        });
	    };
	    $('.carousel').slick();
	    $('.counter').each(function() {
	        var _this = $(this);
	        _this.numerator({
	            toValue : _this.data('count-to'),
	            duration : _this.data('duration'),
	            delimiter : _this.data('delimiter')
	        });
	    });

	    function wrapLeave() {
	        wrap.trigger('mouseleave');
	    }

	    function isTouch() {
	        return $html.hasClass('touch');
	    }

	    function isSmallDevice() {
	        return $win.width() < MEDIAQUERY.desktop;
	    }

	    function isLargeDevice() {
	        return $win.width() >= MEDIAQUERY.desktop;
	    }

	    function isSidebarClosed() {
	        return $('.app-sidebar-closed').length;
	    }

	    function isSidebarFixed() {
	        return $('.app-sidebar-fixed').length;
	    }

	    function isBoxedPage() {
	        return $('.boxed-page').length;
	    }

	    function isMobile() {
	        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    themePacket.sidebarHandler = sidebarHandler;

	    return {
	        init : function() {
	            settingsHandler();
	            //sidebarHandler();
	            toggleClassOnElement();
	            navbarHandler();
	            searchHandler();
	            tooltipHandler();
	            popoverHandler();
	            perfectScrollbarHandler();
	            switcheryHandler();
	            resizeHandler();
	            showTabHandler();
	            panelScrollHandler();
	            panelToolsHandler();
	            customSelectHandler();
	            goTopHandler();
	        }
	    };
	}();

	themePacket.main = Main;

	module.exports = themePacket;


/***/ },
/* 7 */
/***/ function(module, exports) {

	module.exports = function (obj) {
	obj || (obj = {});
	var __t, __p = '';
	with (obj) {
	__p += '<!-- start: NAVBAR HEADER -->\n<div class="navbar-header">\n    <button href="#" class="sidebar-mobile-toggler pull-left btn no-radius hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">\n        <i class="fa fa-bars"></i>\n    </button>\n    <a class="navbar-brand" href="index.html"> <img src="assets/images/logo.png" alt="Packet"/> </a>\n    <a class="navbar-brand navbar-brand-collapsed" href="index.html"> <img src="assets/images/logo-collapsed.png" alt="" /> </a>\n\n    <button class="btn pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse" data-toggle-class="menu-open">\n        <i class="fa fa-folder closed-icon"></i><i class="fa fa-folder-open open-icon"></i><small><i class="fa fa-caret-down margin-left-5"></i></small>\n    </button>\n</div>\n<!-- end: NAVBAR HEADER -->\n<!-- start: NAVBAR COLLAPSE -->\n<div class="navbar-collapse collapse">\n    <ul class="nav navbar-left hidden-sm hidden-xs">\n        <li class="sidebar-toggler-wrapper">\n            <div>\n                <button href="javascript:void(0)" class="btn sidebar-toggler visible-md visible-lg">\n                    <i class="fa fa-bars"></i>\n                </button>\n            </div>\n        </li>\n        <li>\n            <a href="#" class="toggle-fullscreen"> <i class="fa fa-expand expand-off"></i><i class="fa fa-compress expand-on"></i></a>\n        </li>\n        <li>\n            <form role="search" class="navbar-form main-search">\n                <div class="form-group">\n                    <input type="text" placeholder="Enter search text here..." class="form-control">\n                    <button class="btn search-button" type="submit">\n                        <i class="fa fa-search"></i>\n                    </button>\n                </div>\n            </form>\n        </li>\n    </ul>\n    <ul class="nav navbar-right">\n        <!-- start: MESSAGES DROPDOWN -->\n        <li class="dropdown">\n            <a href class="dropdown-toggle" data-toggle="dropdown"> <span class="badge"> 3 </span> <i class="fa fa-envelope"></i> </a>\n            <ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large animated fadeInUpShort">\n                <li>\n                    <span class="dropdown-header"> Unread messages</span>\n                </li>\n                <li>\n                    <div class="drop-down-wrapper ps-container">\n                        <ul>\n                            <li class="unread">\n                                <a href="javascript:;" class="unread">\n                                    <div class="clearfix">\n                                        <div class="thread-image">\n                                            <img src="./assets/images/avatar-2.jpg" alt="">\n                                        </div>\n                                        <div class="thread-content">\n                                            <span class="author">Nicole Bell</span>\n                                            <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>\n                                            <span class="time"> Just Now</span>\n                                        </div>\n                                    </div> </a>\n                            </li>\n                            <li>\n                                <a href="javascript:;" class="unread">\n                                    <div class="clearfix">\n                                        <div class="thread-image">\n                                            <img src="./assets/images/avatar-3.jpg" alt="">\n                                        </div>\n                                        <div class="thread-content">\n                                            <span class="author">Steven Thompson</span>\n                                            <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>\n                                            <span class="time">8 hrs</span>\n                                        </div>\n                                    </div> </a>\n                            </li>\n                            <li>\n                                <a href="javascript:;">\n                                    <div class="clearfix">\n                                        <div class="thread-image">\n                                            <img src="./assets/images/avatar-5.jpg" alt="">\n                                        </div>\n                                        <div class="thread-content">\n                                            <span class="author">Kenneth Ross</span>\n                                            <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>\n                                            <span class="time">14 hrs</span>\n                                        </div>\n                                    </div> </a>\n                            </li>\n                        </ul>\n                    </div>\n                </li>\n                <li class="view-all">\n                    <a href="#"> See All </a>\n                </li>\n            </ul>\n        </li>\n        <!-- end: MESSAGES DROPDOWN -->\n        <!-- start: ACTIVITIES DROPDOWN -->\n        <li class="dropdown">\n            <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i> </a>\n            <ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large animated fadeInUpShort">\n                <li>\n                    <span class="dropdown-header"> You have new notifications</span>\n                </li>\n                <li>\n                    <div class="drop-down-wrapper ps-container">\n                        <div class="list-group no-margin">\n                            <a class="media list-group-item" href=""> <img class="img-circle" alt="..." src="assets/images/avatar-1.jpg"> <span class="media-body block no-margin"> Use awesome animate.css <small class="block text-grey">10 minutes ago</small> </span> </a>\n                            <a class="media list-group-item" href=""> <span class="media-body block no-margin"> 1.0 initial released <small class="block text-grey">1 hour ago</small> </span> </a>\n                        </div>\n                    </div>\n                </li>\n                <li class="view-all">\n                    <a href="#"> See All </a>\n                </li>\n            </ul>\n        </li>\n        <!-- end: ACTIVITIES DROPDOWN -->\n        <!-- start: LANGUAGE SWITCHER -->\n        <li class="dropdown">\n            <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="flag-icon flag-icon-us"></i> English </a>\n            <ul role="menu" class="dropdown-menu dropdown-light fadeInUpShort">\n                <li>\n                    <a href="#" class="menu-toggler"> Deutsch </a>\n                </li>\n                <li>\n                    <a href="#" class="menu-toggler"> English </a>\n                </li>\n                <li>\n                    <a href="#" class="menu-toggler"> Italiano </a>\n                </li>\n            </ul>\n        </li>\n        <!-- end: LANGUAGE SWITCHER -->\n    </ul>\n    <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->\n    <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">\n        <div class="arrow-left"></div>\n        <div class="arrow-right"></div>\n    </div>\n    <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->\n</div>\n<button class="sidebar-mobile-toggler dropdown-off-sidebar btn hidden-md hidden-lg"  data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">\n    &nbsp;\n</button>\n<button class="dropdown-off-sidebar btn hidden-sm hidden-xs" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">\n    &nbsp;\n</button>\n<!-- end: NAVBAR COLLAPSE -->';

	}
	return __p
	}

/***/ },
/* 8 */
/***/ function(module, exports) {

	module.exports = function (obj) {
	obj || (obj = {});
	var __t, __p = '', __j = Array.prototype.join;
	function print() { __p += __j.call(arguments, '') }
	with (obj) {
	__p += '<!-- start: BREADCRUMB -->\n<div class="breadcrumb-wrapper">\n    <h4 class="mainTitle no-margin">' +
	((__t = ( title )) == null ? '' : __t) +
	'</h4>\n    <span class="mainDescription">' +
	((__t = ( subTitle )) == null ? '' : __t) +
	' </span>\n    <ul class="pull-right breadcrumb">\n        ';
	 if(list){ ;
	__p += '\n            ';
	 _.each(list, function(e, i){ ;
	__p += '\n            <li>\n                <a href="' +
	((__t = ( e.href )) == null ? '' : __t) +
	'"><i class="' +
	((__t = ( e.icon )) == null ? '' : __t) +
	' margin-right-5 text-large text-dark"></i>' +
	((__t = ( e.label )) == null ? '' : __t) +
	'</a>\n            </li>\n            ';
	 }); ;
	__p += '\n        ';
	 } ;
	__p += '\n        <li>\n            ' +
	((__t = ( active )) == null ? '' : __t) +
	'\n        </li>\n    </ul>\n</div>\n<!-- end: BREADCRUMB -->';

	}
	return __p
	}

/***/ },
/* 9 */,
/* 10 */,
/* 11 */
/***/ function(module, exports) {

	module.exports = function (obj) {
	obj || (obj = {});
	var __t, __p = '';
	with (obj) {
	__p += '<!-- start: BASIC EXAMPLE -->\n<div class="container-fluid container-fullw">\n    <div class="row">\n        <div class="col-md-12">\n            <div class="panel panel-white">\n                <div class="panel-body">\n					<!--\n					<h5 class="over-title margin-bottom-15">Basic <span class="text-bold">example</span></h5>\n					-->\n					<p>\n						A Individual form controls automatically receive some global styling.\n					</p>\n\n					<iframe id="sheetframe" src="https://docs.google.com/spreadsheets/d/1KoU1-IR8RxreibLxkjt0qy2EVV1HXwMX_jRZD6iTQQE/pubhtml?gid=0&amp;single=true&amp;headers=true"></iframe>\n\n					<div class="row">\n						<div class="col-sm-offset-2 col-sm-10 text-right">\n							<a href="#" type="button" class="btn btn-o btn-primary">Back</a>\n							<button class="btn btn-primary" type="submit">Save</button>\n						</div>\n					</div>\n\n				</div>\n            </div>\n        </div>\n    </div>\n</div>\n<!-- end: INPUT SPINNER -->';

	}
	return __p
	}

/***/ }
/******/ ]);