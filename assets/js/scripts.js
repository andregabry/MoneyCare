$(function (){
    $(".menu-toggle").click(function (){
       $(".app-sidebar").toggleClass("app-sidebar-mobile");
       $(".app-main").toggleClass("app-main-mobile");
   });
});