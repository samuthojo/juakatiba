@extends('layouts.new-app')
@section('content')
    <style>
        .ipf-navigation{
            z-index: 0;
            opacity: 0;
        }
    </style>
    @include('landing.banner')
    @include('landing.more-videos')
    @include('landing.follow-us')
    @include('landing.blogs')
@endsection

@section('scripts')
    <script src="{{asset('assets/js/nice-scroll.min.js')}}"></script>
    <script>
        $("#thirtyVids")
            .niceScroll({
                cursorcolor:"rgba(120,120,120,0.8)",
                cursoropacitymin: 0.6,
                cursoropacitymax: 1,
                cursorwidth: "8px",
            });
    </script>
@endsection