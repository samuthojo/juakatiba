<style>
    .ipf-slideshow{
        width: 100%;
        min-height: 100vh;
        font-family: Lato, sans-serif;
        font-weight: 300;
        position: fixed;
        transition: all 0.2s ease-in;
        background: #000000;
    }

    .ipf-slideshow .slide-show{
        float: left;
        width: 100%;
        height: 450px;
    }

    .home-contents{
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 5;
    }
    .home-contents .top-nav{
        width: 100%;
        height: 70px;
        padding-right: 50px;
        background: rgba(0, 0, 0, 0.01);
        background: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.9) 100%);
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0%, rgba(0, 0, 0, 0.01)), color-stop(100%, rgba(0, 0, 0, 0.9)));
        background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.9) 100%);
        background: linear-gradient(to top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.9) 100%);
    }
    .top-nav span{
        float: right;
        color: #ffffff;
        font-size: 0.75em;
        font-weight: 700;
        line-height: 2;
    }
    .home-contents .middle-nav{
        width: 100%;
        height: calc(100% - 300px);

    }
    .middle-nav .mid-left-nav{
        float: left;
        width: 20%;
        height: 100%;

    }
    .middle-nav .mid-logo-nav{
        float: left;
        height: 100%;
        width: 80%;
    }
    .middle-nav .mid-logo-nav a div{
        width: 80%;
        height: 100%;
        background: url("{{url('assets/images/logo6.png')}}");
        background-size: 80%;
        background-repeat: no-repeat;
        background-position: center;
    }
    .home-contents .bottom-nav{
        width: 100%;
        height: 230px;
        background: rgba(0, 0, 0, 0.01);
        background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.9) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.01)), color-stop(100%, rgba(0, 0, 0, 0.9)));
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.9) 100%);
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.01) 0%, rgba(0, 0, 0, 0.9) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='rgba(0,0,0,0.01)', endColorstr='rgba(0,0,0,0.9)', GradientType=0 );
    }
    .bottom-nav .control-links{
        width: 100%;
        height: 65%;

    }
    .bottom-nav .control-links a{
        display: block;
        float: left;
        width:25%;
        height: 100%;
        /*margin-left: 30px;*/
        cursor: pointer;

    }
    .bottom-nav .control-links a div span{
        width: 58px;
        height: 58px;
        border-radius: 50%;
        border: solid 2px #ffffff;
        margin: 0 auto 5px;
        display: block;
        padding-left: 12px;
    }
    .bottom-nav .control-links a div span i{
        font-size: 1.6em;
        text-align: center;
        color: white;
        line-height: 2;
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.30);
    }
    .bottom-nav .control-links h1{
        text-align: center;
        color: #ffffff;
        font-size: 1.5em;
        letter-spacing: 3px;
        text-shadow: 0 0 2px rgba(0, 0, 0, 0.30);


    }
    .bottom-nav .bottom-social{
        width: 100%;
        height: 35%;
        padding: 0 20px;
    }
    .bottom-social >div{
        float: left;
        width: 50%;
        height: 100%;
    }
    .quote-day span{
        font-family: "Lato light", serif;
        font-size: 1.2em!important;
        text-align: left!important;
        width: 60%;
        display: none;
    }
    .bottom-social h1{
        font-size: 0.75em;
        font-weight: 700;
        color: #c3c3c3;
        text-align: right;
        line-height: 2;
    }
    .bottom-social span{
        text-align: right;
        color: #ffffff;
        font-size: 1.5em;
        width: 100%;
        float: right;
    }
    .news-container{
        position: absolute;
        top: 20px;
        left: 20px;
        width: 450px;
        height: 120px;
        background: rgba(0, 0, 0, 0.6);


    }

    .news-container .news-image{
        width: 100px;
        height: 100%;
        background: white;
        background-size: cover;
        background-repeat: no-repeat;
        float: left;
    }
    .news-container .news-contents{
        width: calc(100% - 110px);
        height: 100%;
        margin-left: 10px;
        float: left;


    }
    .news-container > div{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px;

    }
    .news-contents span{
        display: block;
        width: 100%;
        color: #ffffff;
    }
    .news-contents .title{
        font-size: 0.7em;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 5px;
    }
    .news-contents .summary{
        font-size: 0.75em;
        font-weight: 400;
        line-height: 1.2;
    }
</style>
<section class="ipf-slideshow">
    <div id="owl-demo" class="owl-carousel slide-show">

        <div class="item">
            <div class="slide-image" style="background-image: url('{{url('assets/images/bunge.jpg')}}')">

            </div>

        </div>
        <div class="item">
            <div class="slide-image" style="background-image: url('{{url('assets/images/slidesample4.png')}}')">

            </div>

        </div>
/**/
/*            </div>*/
/**/
/*        </div>*/
/**/
/*            </div>*/
/**/
/*        </div>*/
/**/
/*            </div>*/
/**/
/*        </div>*/

    </div>
    <div class="home-contents">
        <div class="top-nav">
            <span><a href="{{url('sw')}}"><i class="fa fa-language" style="font-size: 200%;line-height: 2.8"></i> &nbsp;&nbsp;SWAHILI</a></span>
        </div>
        <div class="news-container" id="slideshow">

            @if(count($news)>0)
                @foreach($news as $details)
                    @php
                      $image = explode(".",$details['image']);
                      $name = $image[0];
                      $extension = $image[1];
                      $thumb_name = $name."_thumb.".$extension;
                    @endphp
                    <div>
                        <div class="news-image" style="background-image: url('{{url('uploads/thumb/' . $thumb_name)}}')"></div>
                        <div class="news-contents">
                            <span class="title">{{$details['title']}}</span>
                            <span class="summary">{{$details['description']}}<a href="{{$details['link']}}" style="color: purple; cursor: pointer;">&nbsp;read more</a></span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="middle-nav">
            <div class="mid-left-nav"></div>
            <div class="mid-logo-nav">
                <a>
                    <div></div>
                </a>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="control-links">
                <a href="{{url('read_katiba')}}"><div>
                        <span><i class="fa fa-book"></i></span>
                        <h1>READ <br/> CONSTITUTIONS</h1>
                </div></a>
                <a id="gotonews"><div>
                        <span><i class="fa fa-newspaper-o" ></i></span>
                        <h1>READ <br/> NEWS & UPDATES</h1>
                </div></a>
                <a id="gotomdahalo"><div>
                        <span><i class="fa fa fa-users" ></i></span>
                        <h1>CONSTITUTIONS <br/> YA &nbsp;&nbsp;&nbsp;DEBATES</h1>
                </div></a>
                <a class="openpopup"><div >
                        <span><i class="fa fa-cloud-download"></i></span>
                        <h1>DOWNLOAD <br/> CONSTITUTIONS</h1>
                </div></a>
            </div>
            <div class="bottom-social">
               <div class="quote-day">
                    <span> The Citizen Handbook is intended to provide useful information to anyone seeking to learn about civic education, some critical provisions of the Constitution</span>
               </div>
               <div>
                   <h1>LEARN MORE FROM OUR SOCIAL MEDIA</h1>
                <span>
                   <a> <i class="fa fa-facebook-square"></i></a>&nbsp;
                   <a> <i class="fa fa-twitter-square"></i></a>&nbsp;
                   <a> <i class="fa fa-instagram"></i></a>

                </span>
               </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            slideSpeed: 400,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: 10000,
            navigation: false,
            pagination: false,
            responsive: true
            //transitionStyle: "backSlide"//"fade,fadeUp,backSlide,goDown"
            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
        $("#gotonews").on("click",function(){
            var pillars_section= $('.ipf-news');
            $('body,html').animate({
                    'scrollTop': pillars_section.offset().top-50
                }, 1000
            );
        });
        $("#gotomdahalo").on("click",function(){
            var pillars_section= $('.ipf-debates');
            $('body,html').animate({
                    'scrollTop': pillars_section.offset().top-50
                }, 1000
            );
        });


        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
            $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
        },  6000);
    });
</script>
