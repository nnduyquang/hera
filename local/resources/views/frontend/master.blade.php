<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="@yield('title')"/>
    {{--<meta property="og:type" content="article" />--}}
    <meta property="og:url" content="@yield('url-og')"/>
    <meta property="og:image" content="@yield('image-og')"/>
    <meta property="og:description" content="@yield('description')"/>
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Varela+Round" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    {{--<meta property="og:site_name" content="Site Name, i.e. Moz" />--}}
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    {{ Html::style('css/frontend/common/menu/index.css') }}
    @yield('styles')
</head>
<body>
<header id="header">

</header>

<div id="blurrMe">
    {{--@include('frontend.common.menu.m-menu')--}}
    @include('frontend.common.menu.hera-mobile-menu')
    @include('frontend.common.menu.menu')
    @yield('popup')
    @yield('slider')
    <div class="bg-container" style="background-image:url({{URL::asset('images/bg/Asset1.png')}});">
        @yield('container')

    </div>
</div>
{{--@include('frontend.common.menu.m-sidebar')--}}
<div class="footer">
    @include('frontend.common.footer')
</div>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script>

    $('#mobile_menu_click').click(function () {
        if ($('#hera_mobile_menu_content').css('opacity') == 0) {
            $('#hera_mobile_menu_content').css({'opacity': '1', 'top': '100%', 'z-index': '30'})
        } else {
            $('#hera_mobile_menu_content').css({'opacity': '0', 'top': '80%', 'z-index': '-30'})
        }
    })

    $('.dv_click').click(function () {
        if ($('#demo a').css('display') == 'none') {
            $('#demo').css({'height': 'auto'});
            $('#demo a').css('display', 'block');
        }
        else {
            $('#demo').css({'height': '0'});
            $('#demo a').css('display', 'none');
        }
    })

    $('.tv_click').click(function () {
        if ($('#demo2 a').css('display') == 'none') {
            $('#demo2').css({'height': 'auto'});
            $('#demo2 a').css('display', 'block');
        }
        else {
            $('#demo2').css({'height': '0'});
            $('#demo2 a').css('display', 'none');
        }
    })

    $('.td_click').click(function () {
        if ($('#demo3 a').css('display') == 'none') {
            $('#demo3').css({'height': 'auto'});
            $('#demo3 a').css('display', 'block');
        }
        else {
            $('#demo3').css({'height': '0'});
            $('#demo3 a').css('display', 'none');
        }
    })
</script>
@yield('jv-scripts')
{{ Html::script('js/scripts.js') }}
<div class="callback d-lg-none d-md-none">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:01663997777" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                             aria-hidden="true"></i></a>
    </div>
</div>
<div class="callback d-none d-md-block" style="right: 0px;bottom: -30px;left:inherit">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:01663997777" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                             aria-hidden="true"></i></a>
    </div>
</div>
{{--<div class="mess_desk_bot d-none d-md-block" style="position: fixed;bottom:40px;right: 0px;">--}}
    {{--<a href="tel:01663997777"--}}
       {{--style="display: block;width: 260px;height: 56px;background: url({{URL::to('images/nenhot.png')}}) no-repeat;text-align: center;padding-top: 10px;color:#fff;font-size: 20px;font-family: 'roboto-bold'">--}}
    {{--</a>--}}
{{--</div>--}}


</body>

</Html>