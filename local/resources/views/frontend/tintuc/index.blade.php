@extends('frontend.master')
@section('title')
    TIỆC CƯỚI TDG
@stop
@section('description')

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
    @include('frontend.tintuc.banner-title')
    @include('frontend.tintuc.tt_1')
@stop
@section('jv-scripts')
    {{ Html::script('js/fe_h_index.js') }}
@stop