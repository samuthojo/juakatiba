<style>
    .ipf-news{
        width: 100%;
        height: auto;
        display: table;
        background: whitesmoke;
        top: 100vh;
        box-shadow: 0px -2px 5px 0px rgba(0,0,0,0.25);
        padding:30px 5%;

    }
    .ipf-news h1{
        font-size: 2em;
        font-family: "Lato regular", serif;
        color: purple;
        line-height: 2;

    }
    .ipf-news .title:after{
        width: 20%;
        height: 2px;
        background: purple;
        position: absolute;
        top: 100%;
        left: 0;
        content: "";
    }
    .footer{

    }
    .juicer, .referral{
        display: none!important;
    }
    ul.juicer-feed.colored-icons.photos-only.j-modern.loaded{
        overflow-y: hidden;
    }
</style>


<section class="ipf-news">

    <h1 class="title">Habari & Updates</h1>

    <script src="{{url('//assets.juicer.io/embed.js')}}" type="text/javascript"></script>
    <link href="{{url('//assets.juicer.io/embed.css')}}" media="all" rel="stylesheet" type="text/css" />
    <ul class="juicer-feed" data-feed-id="juakatiba"><h1 class="referral"><a href="https://www.juicer.io"></a></h1></ul>
</section>
<div class="footer"></div>

<script>

    jQuery(window).on('scroll', function() {

        var height = jQuery(window).scrollTop();
//        var nav_target = $('.ipf-navigation');
        if (height > 650) {

            $(".ipf-navigation").addClass("show");

        }
        if (height < 50) {
            $(".ipf-navigation").removeClass("show");
        }
    });
</script>
