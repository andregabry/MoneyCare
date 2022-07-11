$(function (){
    $(".menu_toggle").click(function (){
        $(".app_sidebar").toggleClass("app_sidebar_mobile");
        $(".app_main").toggleClass("app_main_mobile");
    });

    $(".app_sidebar").parent().click(function (){

    });
});