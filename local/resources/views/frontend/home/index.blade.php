@extends('frontend.master')
@section('title')
    {{$listFrontEndInfo['config-seo-title']}}
@stop
@section('description')
    {{$listFrontEndInfo['config-seo-description']}}
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')
{{URL::to($listFrontEndInfo['config-seo-image'])}}
@stop
@section('styles')

    {{ Html::style('css/themes/default/default.css') }}

@stop
@section('slider')
    @include('frontend.common.owl-slider')
    @include('frontend.home.popup')
    @include('frontend.home.popup-callme')
    @include('frontend.home.nav')
@stop

@section('container')

    @include('frontend.home.h_1')
    @include('frontend.home.h_2')
    @include('frontend.home.h_3')
    @include('frontend.common.services')
    @include('frontend.home.h_4')
    @include('frontend.home.h_5')


@stop
@section('jv-scripts')
    {{ Html::script('js/fe_h_index.js') }}
@stop