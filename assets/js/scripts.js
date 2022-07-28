$(function () {

    /* SIDEBAR MOBILE */

    $(document).ready(function () {
        var width = $(window).width();

        if (width >= 700) {
            $(".menu_toggle").click(function () {
                $(".app_sidebar").toggleClass("app_sidebar_mobile");
                $(".app_main").toggleClass("app_main_mobile");
            });
        }
        if (width < 700) {
            $(".menu_toggle").click(function () {
                $(".app_sidebar").addClass("app_sidebar_mobile");
                $(".app_main").addClass("app_main_mobile");
                $(".background_sidebar").fadeIn(100);
            });
        }
        if (width < 700) {
            $(".background_sidebar, .j_load").click(function () {
                $(".app_sidebar").removeClass("app_sidebar_mobile");
                $(".app_main").removeClass("app_main_mobile");
                $(".background_sidebar").fadeOut(100);
            });
        }
    });

    /* PROFILE MENU */

    $(".icon_profile").click(function () {
        $(".background_modal, .profile").fadeIn(200);
    });

    $(".background_modal").click(function () {
        $(".background_modal, .profile").fadeOut(200);
    });

    /* NOTIFY MESSAGE */

    $(".icon_notify").click(function () {
        $(".background_modal, .notify").fadeIn(200);
    });

    $(".background_modal, .header_x").click(function () {
        $(".background_modal, .notify").fadeOut(200);
    });

    /* CONTENT NAVIGATION */

    var content = $(".app_content");
    var defaults = content.html();
    var template = "views/";
    content.load(template + "wallets.php");

    $("body").on("click", ".j_load", function (e) {
        e.preventDefault();
        if ($(this).hasClass("active")) {
            return
        } else {
            $(".j_load").removeClass("active");
            $(this).addClass("active");
        }

        var load_file = $(this).attr("href");
        content.html(defaults).fadeOut(200, function () {
            content.load(template + load_file + ".php");
        }).fadeIn(100);
    });



});
