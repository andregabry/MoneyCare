$(function (){
    var sidebar_brand = $(".sidebar-brand");
    var brand = "views/brand.php";
    sidebar_brand.load(brand);

    var sidebar_user = $(".sidebar-profile");
    var profile = "views/profile.php";
    sidebar_user.load(profile);

    var sidebar_menu = $(".sidebar-menu");
    var menu = "views/menu.php";
    sidebar_menu.load(menu);

   var app_content = $(".app-content");
   var content = "views/content.php";
   app_content.load(content);


   $(".menu-toggle").click(function (){
       $(".app-sidebar").toggleClass("app-sidebar-mobile");
       $(".app-main").toggleClass("app-main-mobile");
   });
});