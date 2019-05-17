@extends('frontend.master')
@section('title')
    TIỆC CƯỚI TDG
@stop
@section('description')
    TIỆC CƯỚI TDG
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')

@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
    {{--{{ Html::style('css/frontend/gallery/index.css') }}--}}

@stop
@section('slider')
    {{--@include('frontend.home.popup-callme')--}}
@stop
@section('container')

    @include('frontend.gallery.banner-title')
    @include('frontend.gallery.g_1')
    @include('frontend.gallery.video-lightbox')
    @include('frontend.common.services_2')

@stop
@section('jv-scripts')
    {{ Html::script('js/fe_g_index.js') }}
    {{ Html::script('js/fe_h_index.js') }}
    <script>
        function revealVideo(div,video_id,src_video) {
            var video = document.getElementById(video_id).src;
            document.getElementById(video_id).src = src_video+'?showinfo=0&autoplay=1'; // adding autoplay to the URL
            document.getElementById(div).style.display = 'block';
        }

        // Hiding the lightbox and removing YouTube autoplay
        function hideVideo(div,video_id) {
            var video = document.getElementById(video_id).src;
            var cleaned = video.replace('&autoplay=1',''); // removing autoplay form url
            document.getElementById(video_id).src = cleaned;
            document.getElementById(div).style.display = 'none';
        }
    </script>
@stop