<script>
    $(window).load(function() {
        $.getScript( "//assets.juicer.io/embed.js");});
</script>

<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />

<style>
    .juicer{
        display: none!important;
    }
    .juicer-feed h1.referral{
        display: none !important;
    }
    .ipf-social{
        padding: 10px 0 150px;

    }
    @media all and (max-width : 520px) {
        .ipf-social{
            padding:50px 0;
        }
    }

    #folowUs{
        background: #ffb223;
        background-image: -webkit-linear-gradient(top left, #febd17 20%, #ffb223);
        background-image: -o-linear-gradient(top left, #febd17 20%, #ffb223);
        background-image: linear-gradient(to bottom right, #febd17 20%, #ffb223);
    }

    #folowUs h3{
        font-family: "Lato bold", sans-serif;
        font-size: 1.4em;
        line-height: 1.7em;
        text-align: center;
        max-width: 800px;
        text-transform: uppercase;
        padding-top: 60px;
        padding-bottom: 20px;
        color: #000;
        margin: auto;
    }

    #followUsLinks{
        overflow: hidden;
        position: relative;
        padding-bottom: 40px;
        margin-bottom: 120px;
    }

    #followUsLinks button{
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 12;
        margin: auto;
        height: 60px;
        padding-left: 4px;
        padding-right: 2px;
        font-size: 26px;
        background: rgba(0,0,0,0.7);
        color: #fff;
        border: none;
        right: 0;
    }

    #followUsLinks button:first-child{
        right: auto;
        left: 0;
        padding-left: 2px;
        padding-right: 4px;
    }

    #followUsLinksScroller .follow-us-link{
        position: relative;
        overflow: hidden;
        height: 260px;
        width: 230px;
        min-width: 230px;
        background-color: #ddd;
        -webkit-background-size: cover;
        background-size: cover;
    }

    #followUsLinksScroller .follow-us-link .scrim{
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.2);
        opacity: 0;
        transition: opacity 0.35s ease-out;
    }

    #followUsLinksScroller .follow-us-link:hover .scrim{
        opacity: 1;
    }

    .follow-us-link img{
        height: 100%;
    }
</style>

<div id="folowUs">
    <h3>
        UNGANA NA WATANZANIA ZAIDI YA 1,000 WALIOTUFUATA <br>
        KWENYE MITANDAO YA KIJAMII
    </h3>

    <div id="followUsLinks">
        {{--<button class="layout center" onclick="scrollLinks(0)">--}}
            {{--<i class="fa fa-chevron-left"></i>--}}
        {{--</button>--}}
        {{--<button class="layout center" onclick="scrollLinks(1)">--}}
            {{--<i class="fa fa-chevron-right"></i>--}}
        {{--</button>--}}

        <ul id="followUsLinksScroller" class="juicer-feed" data-feed-id="tanzaniabora">

        </ul>

        {{--<div id="followUsLinksScroller" class="layout">--}}
            {{--@for($i = 0; $i < count($socials); $i++)--}}
                {{--<a href="{{$socials[$i]}}" target="_blank" class="follow-us-link layout center-center">--}}
                    {{--<img src="{{asset('assets/images/socials/' . ($i+1) . '.jpg')}}" alt="#JuaKatiba">--}}
                    {{--<span class="scrim"></span>--}}
                {{--</a>--}}
            {{--@endfor--}}
        {{--</div>--}}
    </div>
</div>
