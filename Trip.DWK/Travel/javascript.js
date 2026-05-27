//menu
var tombolMenu = $(".tombol-menu");
var menu = $("nav .menu ul"); 

function klikMenu() {
    tombolMenu.click(function () {
        menu.toggle();
    });
    menu.click(function() {
        menu.toggle();
    });
}

$(document).ready(function (){
    var width = $(window).width();
    if (width < 990){
        klikMenu();
    }
});

//check lebar
$(window).resize(function(){
    var width = $(window).width();
    if(width > 989){
        menu.css("display", "block");
    }else{
        menu.css("display", "none");
    }
    klikMenu();
});

//efek scroll
window.addEventListener("scroll", function(){
    var scroll_pos = window.scrollY;
    if(scroll_pos > 0){
        document.querySelector("nav").classList.add("Putih");
        $("nav img.Hitam").show();
        $("nav img.Putih").hide();
    } else {
        document.querySelector("nav").classList.remove("Putih");
        $("nav img.Hitam").hide();
        $("nav img.Putih").show();
    }
});

// smooth scroll menu
$(document).ready(function(){
    $("nav .menu ul li a").click(function(e){
        e.preventDefault();
        var target = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(target).offset().top - 80
        }, 800);
    });
});