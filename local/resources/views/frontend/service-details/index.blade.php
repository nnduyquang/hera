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
    {{--{{ Html::style('css/frontend/services-details/index.css') }}--}}

@stop
@section('slider')
    {{--@include('frontend.home.popup-callme')--}}
@stop
@section('container')
    @include('frontend.service-details.banner-title')
    @include('frontend.service-details.sd_1')
    @include('frontend.common.services')
    @include('frontend.common.comment-facebook')
@stop
