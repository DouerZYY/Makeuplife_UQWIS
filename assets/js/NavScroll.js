// JavaScript Document
jQuery(function($) {
  var fixedLayer;
  (fixedLayer = function() {
    if ($(window).scrollTop() > $('.PosFixed').map(function() {
      return $(this).offset().top - 118;
    })[0]) {
      return $('.fix-layer').fadeIn(0);
    } else {
      return $('.fix-layer').fadeOut(0);
    }
  })();
  $(window).scroll(function() {
    clearTimeout(fixedLayer.timer);
    return fixedLayer.timer = setTimeout(fixedLayer, 50);
  });
  
    var rightsidebar;
  (rightsidebar = function() {
    if ($(window).scrollTop() > $('.PosFixed2').map(function() {
      return $(this).offset().top - 0;
    })[0]) {
      return $('.rightsidebar').fadeIn(0);
    } else {
      return $('.rightsidebar').fadeOut(0);
    }
  })();
  $(window).scroll(function() {
    clearTimeout(rightsidebar.timer);
    return rightsidebar.timer = setTimeout(rightsidebar, 50);
  });
  
 
    var rightsidebar2;
  (rightsidebar2 = function() {
    if ($(window).scrollTop() > $('.PosFixed2').map(function() {
      return $(this).offset().top - 0;
    })[0]) {
      return $('.rightsidebar2').fadeIn(0);
    } else {
      return $('.rightsidebar2').fadeOut(0);
    }
  })();
  $(window).scroll(function() {
    clearTimeout(rightsidebar2.timer);
    return rightsidebar2.timer = setTimeout(rightsidebar2, 50);
  });


});

! 
function(n) {
    "use strict";
    window.nifty = {
        container: n("#container"),
        contentContainer: n("#content-container"),
        navbar: n("#navbar"),
        mainNav: n("#mainnav-container"),
        aside: n("#aside-container"),
        footer: n("#footer"),
        scrollTop: n("#scroll-top"),
        window: n(window),
        body: n("body"),
        bodyHtml: n("body, html"),
        document: n(document),
        screenSize: "",
        isMobile: function() {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        } (),
        randomInt: function(n, t) {
            return Math.floor(Math.random() * (t - n + 1) + n)
        },
        transition: function() {
            var n = document.body || document.documentElement,
            t = n.style,
            e = void 0 !== t.transition || void 0 !== t.WebkitTransition;
            return e
        } ()
    },
    nifty.window.on("load", 
    function() {
        var t = n(".add-tooltip");
        t.length && t.tooltip();
        var e = n(".add-popover");
        e.length && e.popover();
        var i = n(".nano");
        i.length && i.nanoScroller({
            preventPageScrolling: !0
        }),
        n("#navbar-container .navbar-top-links").on("shown.bs.dropdown", ".dropdown", 
        function() {
            n(this).find(".nano").nanoScroller({
                preventPageScrolling: !0
            })
        }),
        nifty.body.addClass("nifty-ready")
    })
} (jQuery)