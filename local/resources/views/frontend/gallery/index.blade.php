@extends('frontend.master')
@section('title')
    TIỆC CƯỚI HERA
@stop
@section('description')
    Nội Thất
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

@stop
@section('container')

    @include('frontend.gallery.banner-title')
    @include('frontend.gallery.g_1')

@stop
@section('jv-scripts')
    {{ Html::script('js/fe_g_index.js') }}
@stop