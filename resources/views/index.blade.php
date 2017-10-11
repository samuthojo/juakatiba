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
        $("#viewVideosLink").bind("mouseenter", function () {
            $("#bannerBox").addClass("view-vidz");
        });

        $("#bannerContainer").bind("mouseleave", function () {
            $("#bannerBox").removeClass("view-vidz");
        });

        $("#videoLinks a")
            .mouseenter(function () {
                $("#bannerBox").removeClass("view-vidz");
            })
            .click(function () {
                loadIframe($(this).data('path'));
            });

        $("#gridVideos a")
            .click(function () {
                loadIframe($(this).data('path'));
                $("#bannerBox").removeClass("view-vidz");
            });

        $("#gridVideos")
            .niceScroll({
                cursorcolor:"rgba(120,120,120,0.8)",
                bordercolor:"rgba(120,120,120,0.8)",
                cursoropacitymin: 0.6,
                cursoropacitymax: 1,
                cursorwidth: "8px"
            });


        function loadIframe(id) {
            var url = "https://www.youtube.com/embed/" + id;
            var src = "http://img.youtube.com/vi/"+id+"/maxresdefault.jpg";
            console.log(url, src);

            $iframe = $('<iframe id="curVideo" width="100%" height="100%" src="'+url+'?rel=0" frameborder="0" allowfullscreen=""></iframe>')
            $('#curVideo').replaceWith($iframe);
            $("#landingBanner .image").css({'background-image' : 'url(' + src + ')'});
        }
    </script>
@endsection