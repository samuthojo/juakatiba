<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Katiba,Tanzania,Constitution,Bunge la katiba,Bunge,Dodoma,Tanzania Bora">
    <meta name="description" content="Jua Katiba Tanzania / Know the Constitution Tanzania is a program that creates a multimedia platform for Tanzanian citizens to engage and understand the ongoing constitution processes, proposed constitution draft and entire referendum process before voting and also how to engage after voting too. ">
    <meta name="author" content="iPF Softwares" >


    <meta property="og:url"                content="http://www.juakatibatanzania.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Jua Katiba Tanzania | Know The Constitution " />
    <meta property="og:description"        content="Jua Katiba Tanzania / Know the Constitution Tanzania is a program that creates a multimedia platform for Tanzanian citizens to engage and understand the ongoing constitution processes, proposed constitution draft and entire referendum process before voting and also how to engage after voting too." />
    <meta property="og:image"              content="{{url('assets/images/logo6.png')}}" />

    <meta charset="UTF-8">

    <link href="{{url('assets/images/favicon.png')}}" rel="shortcut icon" type="image">
    <title>Jua Katiba Tanzania | Know The Constitution  </title>

    <style>
        body{
            background: #fafafa;
        }

        #bannerNav{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            z-index: 9;
        }

        #theMainContent{
            min-height: 400px;
        }

        .read-katiba{
            width: 100%;
            height: auto;
            display: table;
            background: #f1f1f1;
            /*top: 80px;*/
            overflow-y: hidden;
            position: fixed;
        }
        
        .katiba-container{
            width: 100%;
            height: auto;
            display: table;
        }
        
        .katiba-container >div{
            float: left;
        }
        
        .katiba-container .right-nav{
            width: 20%;
            height: 100vh;
            background: #fff;
            border-right: 1px solid #e8e8e8;
            overflow-y: scroll;
            padding-bottom: 200px;
            transition: all 0.6s ease-in;
        }
        .katiba-container .mid-nav{
            width: 80%;
            height:auto;
            display: table;
            background: transparent;
        }
        .top-nav{
            float: none;
            width: 100%;
            margin: 0 auto;
            height: 50px;
            background: #ffffff;
            border-bottom: 1px solid #e8e8e8;
        }
        .top-nav ul{
            width: 90%;
            height: 100%;
            margin: 0 auto;
        }
        .top-nav ul li{
            height: 100%;
            text-align: center;
            font-family: "Lato regular", serif;
            text-transform: uppercase;
            font-size: 0.8em;
        }
        .top-nav ul li a{
            margin-right: 4px;
            min-width: 160px;
            height: 100%;
            padding: 20px;
            color: #333;
        }
        .top-nav ul li.active a{
            border-bottom: solid 2px #febd17;
            color: #000;
        }
        .feed-container{
            width: 100%;
            height: 600px;
            overflow-y: scroll;
            background: transparent;
        }
        .katiba-container .katiba-feed{
            width: 90%;
            min-height: 900px;
            height: auto;
            display: table;
            background: #ffffff;
            margin: 0 auto 100px;
            top: 20px;
            border: 1px solid #e8e8e8;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.04);
            font-size: 1.2em;
            padding: 30px 20px;
            line-height: 1.35;
            text-align: justify;
            color: #000;
        }

        .katiba-container .katiba-feed strong{
            font-family: "Lato bold", serif;
        }
        .katiba-container .katiba-feed p{
            margin-bottom: 10px;
            display: block;
        }
        .top-nav .pakua-btn{
            float: right;
            padding: 10px;
            background-color: #7b2789;
            color: #ffffff;
            top: 5px;
            right: 50px;
            font-family: "Lato regular", serif;
        }

        .top-nav .pakua-btn:not(.inner){
            display: block;
        }

        .top-nav .pakua-btn.inner{
            /*background: #febd17;*/
            background: #f2f2f2;
            float: none;
            padding: 0 20px;
            color: #000;
            top: 0;
            right: 18px;
            font-family: "Lato regular", serif;
        }

        .yaliyomo-menu{
            position: absolute;
            left: 10px;
            font-size: 0.7em;
            font-family: "Lato bold", serif;
            color: #febd17;
            display: none;
        }
        .yaliyomo-menu:before{
            content: "\2261";
            color: #febd17;
            font-size: 3em;
        }
        .katiba-container .right-nav.show{
            transform: translateX(0%);
            z-index: 2;
            width: 100%;
            transition: all 0.3s ease-in;
        }
        .loader{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -50px;
            z-index: 10;
            display: none;
        }

        @media screen and (max-width: 800px) {
            .katiba-container .right-nav{
                transform: translateX(-100%);
                position: absolute;
                left: 0;
                top: 0;
                display: block;
            }
            #cssmenu{
                position: absolute;
            }
            .katiba-container .mid-nav{
                width: 100%;
            }
            .katiba-container .katiba-feed{
                width: 97%;
            }
            .yaliyomo-menu{
                display: block;
            }

        }
    </style>
    <link  href="{{url('assets/font-awesome-4.3.0/css/font-awesome.css')}}" rel="stylesheet" />
    <link  href="{{url('assets/css/reset.css')}}" rel="stylesheet"/>
    <link  href="{{url('assets/css/flex.css')}}" rel="stylesheet"/>
    <link  href="{{url('assets/sidenav/styles.css')}}" rel="stylesheet"/>

    <script src="{{url('assets/js/jquery-2.1.1.js')}}" type="text/javascript"></script>
</head>

<body>
    @yield('styles')
    @include('layouts.nav')

    <main id="theMainContent">
        <section class="read-katiba" >
            <div class="top-nav">
                <span class="yaliyomo-menu" onclick="yaliyomo()">&nbsp;&nbsp;&nbsp;YALIYOMO</span>
                <div class="loader">Loading...</div>
                <a class="pakua-btn"  href="{{url('assets/images/katiba.pdf')}} " target="_blank">PAKUA KATIBA(PDF) &nbsp;&nbsp;<i class="fa fa-cloud-download"></i></a>
            </div>

            <div class="katiba-container">
                @yield('content')

                <div class="mid-nav">
                    <div class="top-nav justified">
                        <div class="layout" style="width: 90%; height: 100%; margin: auto;">
                            <ul class="flex layout end">
                                <li class="active"><a class="layout center-center" href="{{url('read_katiba')}}">Katiba ya 1977</a></li>
                                <li><a class="layout center-center" href="{{url('read_wananchi')}}">Katiba inayo pendekezwa</a></li>
                            </ul>

                            <a class="pakua-btn inner layout center"  href="{{url('assets/images/katiba.pdf')}} " target="_blank">PAKUA KATIBA&nbsp;(PDF) &nbsp;&nbsp;<i class="fa fa-cloud-download"></i></a>
                        </div>
                    </div>
                    <div class="feed-container">
                        <div class="katiba-feed" id="clicked_ibara">{!! $utangulizi['description'] !!}</div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <script src="{{url('assets/sidenav/script.js')}}"></script>
    <script src="{{asset('assets/js/nice-scroll.min.js')}}"></script>
    <script>
        $(".right-nav")
            .niceScroll({
                cursorcolor:"#c5c5c5",
                cursoropacitymin: 0.5,
                cursoropacitymax: 1,
                cursorwidth: "8px"
            });
    </script>
    @yield('scripts')
</body>
</html>

