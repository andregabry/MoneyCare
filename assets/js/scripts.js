$(function () {

    $(document).ready(function () {

        /* ************************************** SIDEBAR MOBILE *************************************** */

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

        /* **************************************** PROFILE ****************************************** */

        var profileLoad = false;

        $(".icon_profile").click(function () {
            if (!profileLoad) {
                $(".background_modal").load("http://localhost/moneycare/views/modals.php .profile", function () {
                    $(".profile, .background_modal").fadeIn(200);
                    profileLoad = true;
                });
            } else {
                $(".profile, .background_modal").fadeIn(200);
            }
        });

        $(".background_modal").click(function () {
            $(".profile, .background_modal").fadeOut(200);
            $(".profile").empty(); // remove o conteúdo da modal
            profileLoad = false; // redefine a variável de controle para permitir o carregamento do conteúdo na próxima vez que a modal for aberta
        });

        /* ************************************** NOTIFY MESSAGE *************************************** */

        var notifyLoad = false;

        $(".icon_notify").click(function () {
            if (!notifyLoad) {
                $(".background_modal").load("http://localhost/moneycare/views/modals.php .notify", function () {
                    $(".notify, .background_modal").fadeIn(200);
                    notifyLoad = true;
                });
            } else {
                $(".notify, .background_modal").fadeIn(200);
            }
        });

        $(".background_modal").click(function () {
            $(".notify, .background_modal").fadeOut(200);
            $(".notify").empty(); // remove o conteúdo da modal
            notifyLoad = false; // redefine a variável de controle para permitir o carregamento do conteúdo na próxima vez que a modal for aberta
        });

        /* ************************************** MORE SPEND *************************************** */

        var moreSpend = false;

        $(".more_spend").click(function() {
            if (!moreSpend) {
                $(".more_spend").load("http://localhost/moneycare/views/modals.php .widget_modal", function() {
                    $(".modal_more_spend, .background_modal").fadeIn(200);
                    moreSpend = true;
                });
            } else {
                $(".modal_more_spend, .background_modal").fadeIn(200);
            }
        });

        $(".background_modal").click(function() {
            $(".modal_more_spend, .background_modal").fadeOut(200);
            $(".modal_more_spend").empty(); // remove o conteúdo da modal
            moreSpend = false; // redefine a variável de controle para permitir o carregamento do conteúdo na próxima vez que a modal for aberta
        });
    });

    /* ************************************** CONTENT NAVIGATION *************************************** */

    // var content = $(".app_content");
    // var defaults = content.html();
    // var template = "views/";
    // content.load(template + "dashboard.php");
    //
    // $("body").on("click", ".j_load", function (e) {
    //     e.preventDefault();
    //     if ($(this).hasClass("active")) {
    //         return
    //     } else {
    //         $(".j_load").removeClass("active");
    //         $(this).addClass("active");
    //     }
    //
    //     var load_file = $(this).attr("href");
    //     content.html(defaults).fadeOut(200, function () {
    //         content.load(template + load_file + ".php");
    //     }).fadeIn(100);
    // });
});
