$(function (){

    /* SIDEBAR MOBILE */

    $(".menu_toggle").click(function (){
        $(".app_sidebar").toggleClass("app_sidebar_mobile");
        $(".app_main").toggleClass("app_main_mobile");
        $(this).toggleClass("menu_toggle_mobile");
    });

    /* CONTENT NAVIGATION */

    var content = $(".app_content");
    var defaults = content.html();
    var template = "views/";
    content.load(template + "dashboard.php");

    $("body").on("click", ".j_load", function (e){
        e.preventDefault();
        if ($(this).hasClass("active")){
            return
        }else {
            $(".j_load").removeClass("active");
            $(this).addClass("active");
        }

        var load_file = $(this).attr("href");
        content.html(defaults).fadeOut(200, function (){
            content.load(template + load_file + ".php");
        }).fadeIn();
    });

    /* PROFILE MENU */

    $(".icon_profile").click(function (){
        $(".background_modal, .profile").fadeIn(200);
    });
    $(".background_modal").click(function (){
        $(".background_modal, .profile").fadeOut(200);
    });

});