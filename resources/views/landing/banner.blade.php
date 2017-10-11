<style>
    #landingBanner .image{
        background-image: url('http://img.youtube.com/vi/YCqSh6RhNro/maxresdefault.jpg');
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
    }

    #thirtyVids #videoLinks a:not(:last-child){
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

    #gridVideos{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #444;
        z-index: 1;
        padding: 1px;
        overflow: auto;
    }

    #bannerBox:not(.view-vidz) #gridVideos{
        opacity: 0;
        pointer-events: none;
    }
    
    .grid-video{
        background: #f0f0f0;
        width: calc(16.66% - 2px);
        height: 75px;
        margin: 1px;
        position: relative;
        overflow: hidden;
    }

    .grid-video img{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
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
                    <h3 id="viewVideosLink">
                        Video 30 za haki na wajibu wa mtanzania
                    </h3>

                    <div id="videoLinks">
                        @for($i = 0; $i < 3; $i++)
                            @php
                                $video = $videos[$i];
                                $id = $video['id'];
                            @endphp

                            <a href="#" class="layout center"
                                data-path="{{$id}}">
                                <i class="fa fa-play-circle-o"></i>
                                <span>
                                    {{$video['title']}}
                                </span>
                            </a>
                        @endfor
                    </div>
                </div>
                <div id="youtubeVid" class="flex">
                    <div id="gridVideos" class="layout wrap">
                        @for($i = 0; $i < 30; $i++)
                            @php
                                $video = $videos[rand(0, 5)];
                                $id = $video['id'];
                            @endphp

                            <a href="#" class="grid-video layout center"
                               data-path="{{$id}}">
                                <img src="{{asset('http://img.youtube.com/vi/'.$id.'/maxresdefault.jpg')}}" alt="">
                            </a>
                        @endfor
                    </div>
                    <iframe id="curVideo" width="100%" height="100%"
                            src="https://www.youtube.com/embed/YCqSh6RhNro" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
