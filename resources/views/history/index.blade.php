@extends('layouts.new-app-inner')
@section('styles')
    <style>
        #historiaContent{
            margin-top: 50px;
            min-height: 400px;
        }

        #historiaWrapper{
            max-width: 1100px;
            margin: auto;
        }

        #historiaIntro{
            padding: 2em;
            margin-bottom: 120px;
            text-align: justify;
        }

        #historiaIntro p{
            line-height: 1.9em;
        }

        #historiaMabadiliko{
            width: 400px;
            align-self: flex-start;
            padding: 40px 30px;
            margin-top: 35px;
            margin-left: 60px;
            margin-right: 0;
            background: #000;
            background: #ffb223;
            background-image: -webkit-linear-gradient(#ffb223, #febd17);
            background-image: -o-linear-gradient(#ffb223, #febd17);
            background-image: linear-gradient(#ffb223, #febd17);
        }

        #historiaMabadiliko h5{
            font-family: "Lato regular";
            font-size: 1.6em;
            margin-bottom: 4px;
        }

        #historiaMabadiliko p{
            font-size: 1.3em;
            line-height: 1.4em;
            margin-bottom: 12px;
        }

        #historiaMabadiliko ul{
            padding-left: 20px;
        }

        #historiaMabadiliko li{
            font-family: "Lato regular";
            margin-bottom: 14px;
            font-size: 1.05em;
            list-style-type: circle;
        }

        #historiaMabadiliko li small{
            font-family: "Lato light";
            font-size: 0.85em;
        }

        #yearThingy{
            position: absolute;
            top: 160px;
            left: 6em;
            width: 400px;
            align-self: flex-start;
            z-index: 1;
        }

        #year{
            position: absolute;
            top: -45px;
            bottom: -45px;
            margin: auto;
        }

        #year #yearText{
            position: relative;
            width: 200px;
            height: 200px;
            color: #ffb223;
            border: 4px solid #ffb223;
            border-radius: 50%;
            font-family: "Lato bold";
            font-size: 2.6em;
            overflow: hidden;
        }

        #yearScroller{
            position: relative;
            top: -2px;
        }

        #yearText span{
            height: 200px;
        }

        #spikes{
            position: relative;
            width: 120px;
            height: 120px;
            transition: all 1s ease-in-out;
        }

        #spikes .spike{
            position: absolute;
            background-color: #ffb223;
            margin: auto;
            z-index: -1;
        }

        #spikes .spike:nth-child(1),
        #spikes .spike:nth-child(2){
            left: 0;
            right: 0;
            height: 60px;
            width: 4px;
            background: #ddd;
        }

        #spikes .spike:nth-child(1){
            top: -120px;
        }

        #spikes .spike:nth-child(2){
            bottom: -112px;
        }

        #spikes .spike:nth-child(3),
        #spikes .spike:nth-child(4){
            top: 0;
            bottom: 0;
            height: 4px;
            width: 60px;
        }

        #spikes .spike:nth-child(3){
            left: -120px;
        }

        #spikes .spike:nth-child(4){
            right: -120px;
        }

        .historia-section h3{
            font-family: "Lato regular";
            font-size: 2em;
            margin-bottom: 12px;
        }

        .historia-section p{
            font-size: 1.3em;
            line-height: 1.6em;
        }

        #historiaSections{
            position: relative;
        }

        #historiaSections .historia-section{
            /*background: #0ff;*/
            /*padding: 40px;*/
            min-height: 380px;
            margin-bottom: 60px;
            padding: 4em 8em;
            padding-left: calc(6em + 480px);
        }

        #historiaSections .historia-section:nth-child(odd){
            background: #f0f0f0;
        }
    </style>
@endsection

@section('content')
    <div id="historiaContent">
        @include('history.intro')
    </div>

    <div id="historiaList" class="layout">
        <div id="yearThingy">
            <div class="layout center-justified" style="position: relative;">
                <div id="spikes">
                    <span class="spike"></span>
                    <span class="spike"></span>
                    <span class="spike"></span>
                    <span class="spike"></span>
                </div>
                <div id="year">
                    <div id="yearText" style="display: block;">
                        <div id="yearScroller" class="layout vertical">
                            @foreach ($years as $year)
                                <span class="layout center-center">{{$year}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="historiaSections">
            @foreach ($histories as $h)
                <div id="year0{{$loop->index}}" class="historia-section layout vertical center-justified">
                    <h3>{{$h['title']}}</h3>
                    <p>{{$h['description']}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{url('assets/js/lib/TweenMax.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/lib/sm-animation.gsap.min.js')}}" type="text/javascript"></script>

    <script>
        var historyController = new ScrollMagic.Controller();
        var pinScene = new ScrollMagic.Scene({
            triggerElement: "#yearThingy",
            triggerHook: 0.35,
            duration: document.getElementById("historiaList").offsetHeight - 490
        })
            .setPin("#yearThingy")
            // .addIndicators()
            .addTo(historyController);

        for(i = 1; i < 21; i++){
            var yearThingyTl = new TimelineMax();
            yearThingyTl.to('#spikes', 0.02,
                // {rotation: -20 * (i - 1), ease: Linear.easeNone},
                {rotation: -(360/20) * i, ease: Linear.easeOut}
            );

            yearThingyTl.to('#yearScroller', 0.25, {
                y: -200*i,
                ease: Linear.easeNone
            });

            var rotateSecene = new ScrollMagic.Scene({
                triggerElement: "#year0"+i,
                triggerHook: 0.3
            })
                .setTween(yearThingyTl)
                .addTo(historyController);
        }
    </script>
@endsection