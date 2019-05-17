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
    {{--{{ Html::style('css/frontend/uudai/index.css') }}--}}

@stop
@section('slider')

@stop
@section('container')
    @include('frontend.uudai.banner-title')
    @include('frontend.uudai.u_1')
    @include('frontend.common.services')
@stop
