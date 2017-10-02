<style>
    #landingBanner .image{
        background-image: url({{asset('assets/images/girl.png')}});
    }

    #imageShape .scrim{
        opacity: 0.9;
        background: #ffb223;
        background-image: -webkit-linear-gradient(#ffb223, #febd17);
        background-image: -o-linear-gradient(#ffb223, #febd17);
        background-image: linear-gradient(#ffb223, #febd17);
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
        padding-top: 30px;
        padding-bottom: 20px;
        font-size: 1.5em;
        line-height: 1.2em;
        font-weight: bold;
    }

    #thirtyVids #videoLinks{

    }

    #thirtyVids #videoLinks a{
        font-weight: bold;
        color: #777;
        margin-bottom: 4px;
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    #thirtyVids #videoLinks a i{
        font-size: 25px;
        margin-right: 8px;
    }

    #thirtyVids #videoLinks a span{
        /*text-decoration: underline;*/
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
        @include('layouts.toppestNav')
        <div id="bannerBox">
            @include('layouts.nav')
            <div class="layout">
                <div id="thirtyVids">
                    <h3>
                        Video 30 za haki na wajibu wa mtanzania
                    </h3>

                    <div id="videoLinks">
                        @for($i = 0; $i < 3; $i++)
                            <a href="#" class="layout center">
                                <i class="fa fa-play-circle-o"></i>
                                <span>
                                    Bunge la 13 la bajeti - 2017 Maswala ya kudumu
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
