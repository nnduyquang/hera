@extends('frontend.master')
@section('title')
    TIỆC CƯỚI TDG
@stop
@section('description')
    TDGCENTER
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
    @include('frontend.thucdon.banner-title')
    @include('frontend.thucdon.t_1')
    @include('frontend.common.services')
@stop

@section('jv-scripts')

    <script>
        $(document).ready(function () {


            $('#owl_doitac').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2,
                        // dots:true,
                    },
                    600: {
                        items: 2,
                        // dots:true,
                    },
                    1000: {
                        items: 3,
                        // dots:true,
                    }
                }
            });

            $('#owl_doitac2').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        // dots:true,
                    },
                    600: {
                        items: 1,
                        // dots:true,
                    },
                    1000: {
                        items: 1,
                        // dots:true,
                    }
                }
            });

            var owl2 = $('#owl_doitac2');
            // Go to the next item
            $('.customNextBtn').click(function () {
                owl2.trigger('next.owl.carousel');
            })
            // Go to the previous item
            $('.customPrevBtn').click(function () {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl2.trigger('prev.owl.carousel', [300]);
            })

        });

    </script>

@stop
