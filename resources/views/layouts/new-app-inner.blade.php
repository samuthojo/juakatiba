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
            background: #fff;
        }

        #toppestNav{
            min-height: 80px;
            padding: 0 2em;
        }

        #bannerNav{
            z-index: 9;
        }

        #logo{
            height: 60px;
        }

        #logo img{
            height: 100%;
        }

        #socials{
            margin-top: 8px;
        }

        .social-icon{
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #fff;
            background-color: #f0f0f0;
            color: #000;
            text-align: center;
            line-height: 30px;
            margin-left: 4px;
            font-size: 14px;
        }

        #theMainContent{
            min-height: 400px;
        }
    </style>

    <link  href="{{url('assets/font-awesome-4.3.0/css/font-awesome.css')}}" rel="stylesheet" />
    <link  href="{{url('assets/css/reset.css')}}" rel="stylesheet"/>
    <link  href="{{url('assets/css/flex.css')}}" rel="stylesheet"/>

    <script src="{{url('assets/js/jquery-2.1.1.js')}}" type="text/javascript"></script>
</head>

<body>
    @yield('styles')
    @include('layouts.toppestNav')
    @include('layouts.nav')

    <main id="theMainContent">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{url('assets/js/lib/ScrollMagic.min.js')}}" type="text/javascript"></script>
    <script>
        var navController = new ScrollMagic.Controller();

        new ScrollMagic.Scene({
            triggerElement: "#bannerNav",
            offset: 295
        })
            .setPin("#bannerNav")
            .setClassToggle('#bannerNav', 'stuck')
            .addTo(navController);
    </script>
    @yield('scripts')
</body>
</html>

