$(document).ready(function(){

    $('#owl_ykkh').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                dots:true,
            },
            600:{
                items:2,
                dots:true,
            },
            1000:{
                items:2,
                dots:true,
            }
        }
    });

    $('#owl_doitac').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                dots:true,
            },
            600:{
                items:3,
                dots:true,
            },
            1000:{
                items:5,
                dots:true,
            }
        }
    });
});

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("h_1");
var navbar2 = document.getElementById("h_2");
var navbar3 = document.getElementById("h_3");
var navbar4 = document.getElementById("h_4");
var sticky = navbar.offsetTop-130;
var sticky2 = navbar2.offsetTop-160;
var sticky3 = navbar3.offsetTop-160;
var sticky4 = navbar4.offsetTop-168;

function myFunction() {
    var i;
    if (window.pageYOffset >= sticky4) {
        // alert (123);

        tablinks = document.getElementsByClassName("nav-r");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        $("#h_4_nav").addClass("active");
        // navbar.classList.add(" active")
    }else if(window.pageYOffset >= sticky3){

        tablinks = document.getElementsByClassName("nav-r");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        $("#h_3_nav").addClass("active");
    }
    else if(window.pageYOffset >= sticky2){

        tablinks = document.getElementsByClassName("nav-r");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        $("#h_2_nav").addClass("active");
    }else if(window.pageYOffset >= sticky){

        tablinks = document.getElementsByClassName("nav-r");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        $("#h_1_nav").addClass("active");
    }

    else {
        tablinks = document.getElementsByClassName("nav-r");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        $("#h_top_nav").addClass("active");
    }
}

$("#h_top_nav").click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top-138
    }, 800);
});

$("#h_4_nav").click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#h_4").offset().top-138
    }, 800);
});

$("#h_3_nav").click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#h_3").offset().top-110
    }, 800);
});

$("#h_2_nav").click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#h_2").offset().top-110
    }, 800);
});

$("#h_1_nav").click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#h_1").offset().top-110
    }, 800);
});

$('.btn-close').click(function () {
    $('#popup-hera').css('display','none')
})