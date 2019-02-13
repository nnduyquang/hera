@extends('frontend.master')
@section('title')
    TIỆC CƯỚI HERA
@stop
@section('description')
    TIỆC CƯỚI HERA
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')

@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
    {{--{{ Html::style('css/frontend/contact/index.css') }}--}}

@stop
@section('slider')
    {{--@include('frontend.home.popup-callme')--}}
@stop
@section('container')
    @include('frontend.contact.banner-title')
    @include('frontend.contact.c_1')
@stop
@section('jv-scripts')
    {{ Html::script('js/fe_h_index.js') }}
@stop