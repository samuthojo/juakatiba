@extends('layouts.app2')
@section('content')
<style>
    .ipf-history{
        height: 100%;
        width: 100%;
        background: white;
        top: 125px;
        padding-top: 100px;
        z-index: 1;
    }
    .time{
        display: block;
        width: 100px;
        height: 100px;
        border: solid 2px purple;
        border-radius: 100%;
        margin: 10px auto;
        font-size: 1.5em;
        text-align: center;
        color: purple;
        line-height: 3.8;
        font-family: "Lato regular", serif;
    }
    .time:after{
        position: absolute;
        height: 30px;
        width: 2px;
        top: 105%;
        left: 50%;
        transform: translateX(-50%);
        content: "";
        background: purple;
    }
    .time:before {
        position: absolute;
        height: 30px;
        width: 2px;
        bottom: 105%;
        left: 50%;
        transform: translateX(-50%);
        content: "";
        background: purple;
    }
    .history-content{
        width: 80%;
        margin: 80px auto;
        height: auto;
        display: table;
        text-align: justify;

    }
    .history-content .heading{
        font-size: 1.2em;
        font-family: "Lato bold", serif;
        line-height: 1.5;
        text-transform: uppercase;
        color: purple;
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    .history-content .summary{
        font-size: 1.1em;
        line-height: 1.2;
        color: #000;
    }
</style>


<section class="ipf-history">

        @if(count($history)>0)
            @foreach($history as $details)
                <span class="time">
                    {{$details['date']}}
                </span>
                <div class="history-content">
                    <span class="heading"> {{$details['title']}}</span>
                    <span class="summary"> {!! $details['description'] !!}</span>
                </div>
            @endforeach
        @endif

</section>
@endsection
