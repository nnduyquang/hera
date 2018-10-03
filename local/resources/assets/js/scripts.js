var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    sd_1_sdBottom:$('#sd_1 #sd-bottom .sd-bottom-carousel .sd-b-owl'),
    sendPhone:$('#btnSendPhone'),
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
    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }
    }
    function runSendPhone(){
        var data = new FormData($(this).get(0));
        data.append('phone', $("input[name='phone']").val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sendphone/send",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    $('#popup-callme').css('display', 'none');
                }
                else {
                    $('#popup-callme').css('display', 'none');
                }
            }
        });
    }
    if (plugins.sendPhone.length) {
        plugins.sendPhone.click(function () {
            runSendPhone();
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