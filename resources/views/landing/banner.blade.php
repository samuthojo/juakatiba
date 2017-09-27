<style>
    body{
        background: #fafafa;
    }

    #landingBanner{
        position: relative;
        height: 250px;
        margin-bottom: 400px;
    }

    #imageShape{
        position: absolute;
        width: 100%;
        height: 500px;
        transform-origin: top left;
        transform: skewY(-8deg);
        overflow: hidden;
    }

    #landingBanner .image{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 120%;
        -webkit-background-size: cover;
        background-size: cover;
        background-image: url({{asset('assets/images/girl.png')}});
        transform: skewY(8deg);
    }

    #imageShape .scrim{
        z-index: 9;
        top: 0;
        left: 0;
        position: relative;
        width: 100%;
        height: 100%;
        opacity: 0.9;
        background: #ffb223;
        background-image: -webkit-linear-gradient(#ffb223, #febd17);
        background-image: -o-linear-gradient(#ffb223, #febd17);
        background-image: linear-gradient(#ffb223, #febd17);
    }

    #bannerContainer{
        max-width: 1000px;
        margin: auto;
    }

    #toppestNav{
        min-height: 120px;
        padding: 20px 0;
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
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #fff;
        color: #000;
        text-align: center;
        line-height: 30px;
        margin-left: 4px;
    }

    #thirtyVids{
        padding: 20px 30px;
        width: 300px;
        min-width: 300px;
        height: 390px;
        overflow: hidden;
        overflow-y: auto;
        background: rgba(255, 255, 255, 0.9);
    }

    #thirtyVids h3{
        padding-top: 20px;
        padding-bottom: 30px;
        font-size: 1.5em;
        line-height: 1.6em;
        text-decoration: underline;
        font-weight: bold;
    }

    #thirtyVids #videoLinks{

    }

    #thirtyVids #videoLinks a{
        font-size: 0.9em;
        font-weight: bold;
        display: block;
        color: #777;
        margin-bottom: 22px;
    }

    #thirtyVids #videoLinks a span{
        text-decoration: underline;
        margin-left: 8px;
    }

    #youtubeVid{
        position: relative;
        background: #000;
    }
</style>

<div id="landingBanner">
    <div id="imageShape">
        <div class="image"></div>
        <div class="scrim"></div>
    </div>
    <div id="bannerContainer">
        <div id="toppestNav" class="layout center justified">
            <div id="logo">
                <img src="{{asset('assets/images/logo.png')}}" alt="">
            </div>
            <div class="layout vertical end">
                <div id="languagePicker">
                    sw <i class="fa fa-chevron-down"></i>
                </div>
                <div id="socials" class="layout">
                    <a href="#" class="social-icon layout center-center"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-icon layout center-center"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-icon layout center-center"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" class="social-icon layout center-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div id="bannerBox">
            @include('landing.nav')
            <div class="layout">
                <div id="thirtyVids">
                    <h3>
                        Video 30 za haki na wajibu wa mtanzania
                    </h3>

                    <div id="videoLinks">
                        @for($i = 0; $i < 10; $i++)
                            <a href="#">
                                <i class="fa fa-play-circle-o"></i>
                                <span>
                                    Bunge la 13 la bajeti - 2017
                                </span>
                            </a>
                        @endfor
                    </div>
                </div>
                <div id="youtubeVid" class="flex">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/p6gUsyoXSLE?rel=0" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
