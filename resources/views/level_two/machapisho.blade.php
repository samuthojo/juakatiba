@extends('layouts.new-app-inner')

@section('styles')
    <style>
        body{
            background-color: #fff;
        }
        .ipf-machapisho{
            width: 100%;
            height: auto;
            display: table;
            padding: 0 2em;
            padding-bottom: 30px;
            top: 30px;
        }
        .machapisho-card{
            width: calc(33.333% - 20px);
            height: 200px;
            float: left;
            margin: 10px;
        }
        .machapisho-card .content{
            width: 100%;
            height: 100%;
            /*height: 70%;*/
            background: whitesmoke;
            padding: 10px;
            padding: 30px;
            position: relative;
        }
        .content .title{
            font-size: 1.2em;
            text-transform: uppercase;
            display: block;
            width: 100%;
            line-height: 1.2;
            margin-bottom: 10px;
        }
        .publish-info{
            bottom: 35px;
            position: absolute;
        }
        .publisher{
            text-transform: capitalize!important;
        }
        .publish-date{
            display: block;
            margin-top: 8px;
            text-transform: capitalize!important;
        }
        .content .publisher:before{
            content: "Imechapishwa na:   ";
            content: "Mchapishaji:";
            color: #febd17;
            color: #333;
            font-family: "Lato regular", serif;
        }
        .content .publish-date:before{
            content: "Tarehe:   ";
            color: #febd17;
            color: #333;
            font-family: "Lato regular", serif;
        }
        .machapisho-card .download-btn{
            position: absolute;
            bottom: 16px;
            right: 20px;
            width: 100%;
            height: 30%;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(254, 189, 23, 0.8);
            text-align: center;
            color: #444;
            line-height: 3.6;
            font-family: "Lato regular", serif;
            /*display: block;*/
            transition: all 0.6s ease-in;
            box-shadow: 0 0 0 transparent;
        }
        .machapisho-card .download-btn span{
            display: none;
        }
        .machapisho-card:hover .download-btn{
            background-color:purple;
            background-color: #febd17;
        }
        @media screen and (max-width: 520px) {
            .machapisho-card{
                width: 100%;
                margin: 10px auto;
            }
            .ipf-machapisho{
                padding-left: 10px;
                padding-right: 10px;
            }
        }

    </style>
@endsection
@section('content')
    <section class="ipf-machapisho">

            @if(count($machapisho)>0)
                @foreach($machapisho as $details)
                    <div class="machapisho-card">
                        <div class="content">
                            <span class="title">{{$details['title']}}</span>
                            <div class="publish-info">
                                <span class="publisher">{{$details['author']}}</span><br/>
                                <span class="publish-date">{{$details['date']}}</span>
                            </div>
                        </div>
                        <a class="download-btn layout center-center" href="{{url('download_chapisho_pdf/' . $details['pdf'])}}">
                            <span>PAKUA PDF &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <i class="fa fa-cloud-download"></i>
                        </a>
                    </div>

                @endforeach
            @endif

    </section>
@endsection
