@extends('frontend.master')
@section('title')
{{$post->title}}
@stop
@section('description')
{{--{!! $post->description !!}--}}
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')
{{URL::to($post->image)}}
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
    @include('frontend.common.comment-facebook')

@stop
