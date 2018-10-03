var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    sd_1_sdBottom:$('#sd_1 #sd-bottom .sd-bottom-carousel .sd-b-owl')
};
$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }
    sidebar();
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function runSd_1_sdBottom(){
        plugins.sd_1_sdBottom.owlCarousel({
            dots: false,
            autoplay: true,
            navContainer: '.nav-arrow',
            loop: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }
    if (plugins.slider.length) {
        runSlider();
    }
    if(plugins.sd_1_sdBottom.length){
        runSd_1_sdBottom();
    }
});

$('.btn-close-callme').click(function () {
    $('#popup-callme').css('display', 'none')
})

$('.call-me-web').click(function () {
    if($('#popup-callme').css('display')=='none')
    {
        $('#popup-callme').css('display', 'block')
        // alert (123);
    }else{
        $('#popup-callme').css('display', 'none')
    }
})