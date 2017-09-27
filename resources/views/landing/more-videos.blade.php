<style>
    #moreVideosContainer{
        max-width: 1000px;
        margin: auto;
    }

    #moreVideos h3{
        font-family: "Lato bold", sans-serif;
        font-size: 2em;
        margin-bottom: 40px;
    }

    #moreVideos{

    }

    #moreVideoLinks{
        transition: all 0.35s ease-out;
    }

    #moreVideos.temp-hidden #moreVideoLinks{
        height: 305px;
        overflow: hidden;
    }

    .more-video{
        width: calc(33.333% - 8px);
        min-width: calc(33.333% - 8px);
        margin-right: 8px;
        margin-bottom: 34px;
    }

    .more-video i{
        color: #febd17;
        font-size: 24px;
        margin-right: 8px;
    }

    .more-video span{
        color: #888;
        font-size: 18px;
    }

    #moreVideos button{
        outline-color: #e08e0b;
        background: inherit;
        display: block;
        margin: 40px auto;
        border: 3px solid #ffb223;
        padding: 8px 22px;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    #moreVideos button:active{
        transform: scale(1.02);
    }

    #moreVideos button i{
        font-size: 20px;
        margin-left: 4px;
    }

    #moreVideos:not(.temp-hidden) #showMore{
        display: none;
    }

    #moreVideos.temp-hidden #showLess{
        display: none;
    }
</style>

<div id="moreVideos" class="temp-hidden">
    <div id="moreVideosContainer">
        <h3>
            TAZAMA VIDEO ZAIDI
        </h3>

        <div id="moreVideoLinks" class="layout wrap">
            @for($i = 0; $i < 30; $i++)
                <a href="#" class="more-video {{$i > 18 ? 'temp-hidden' : ''}}">
                    <i class="fa fa-play-circle-o"></i>
                    <span>
                        {{($i + 1)}}. Bunge la 13 la bajeti - 2017
                    </span>
                </a>
            @endfor
        </div>

        <button class="layout center-center" onclick="toggleShowTemp()">
            ONYESHA
            <span id="showMore">ZAIDI <i class="fa fa-arrow-circle-o-down"></i></span>
            <span id="showLess">CHACHE <i class="fa fa-arrow-circle-o-up"></i></span>
        </button>

        <script>
            function toggleShowTemp() {
                document.getElementById('moreVideos').classList.toggle('temp-hidden');
            }
        </script>
    </div>
</div>
