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
    {{ Html::style('css/frontend/services-details/index.css') }}

@stop
@section('slider')

@stop
@section('container')
    <div class="bg-container  pt-lg-5 pt-md-5 pt-0 mt-lg-4 mt-md-4 mt-0" style="background-image:url({{URL::asset('images/bg/Asset1.png')}});">
        @include('frontend.service-details.sd_1')
    </div>
@stop
