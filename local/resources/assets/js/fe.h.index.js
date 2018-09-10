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

$('.btn-close').click(function () {
    $('#popup-hera').css('display','none')
})