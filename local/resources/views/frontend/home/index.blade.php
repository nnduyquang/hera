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
    {{ Html::style('css/frontend/home/index.css') }}

@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')

        @include('frontend.home.h_1')
        @include('frontend.home.h_2')
        @include('frontend.home.h_3')
        @include('frontend.home.h_4')
        @include('frontend.home.h_5')

@stop
@section('jv-scripts')
    {{ Html::script('js/fe_h_index.js') }}
@stop