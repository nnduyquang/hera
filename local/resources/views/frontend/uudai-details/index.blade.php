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
    {{--{{ Html::style('css/frontend/uudai-details/index.css') }}--}}

@stop
@section('slider')

@stop
@section('container')

    @include('frontend.uudai-details.banner-title')
    @include('frontend.uudai-details.ud_1')

@stop
