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
    {{--{{ Html::style('css/frontend/services-details/index.css') }}--}}

@stop
@section('slider')
    {{--@include('frontend.home.popup-callme')--}}
@stop
@section('container')
    @include('frontend.gioithieu.banner-title')
    @include('frontend.gioithieu.sd_1')
    @include('frontend.common.comment-facebook')
@stop
