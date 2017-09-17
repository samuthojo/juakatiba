<style>
    .ipf-debates{
        background: #ffffff;
        height: 400px;
        width: 100%;
        display: table;
        top: 100vh;
        padding:30px 5%;
    }
  .ipf-debates  .title{
        font-size: 1.5em;
        font-family: "Lato regular", serif;
        color: purple;
        line-height: 2;
         text-align: center;
        margin-bottom: 30px;
       text-transform: uppercase;
    }
    .ipf-debates >.title:after{
        width: 13%;
        height: 2px;
        background: purple;
        position: absolute;
        top: 95%;
        transform: translateX(-50%);
        left: 50%;
        content: "";
    }
    .today-topic{
        float: left;
        width: 50%;
        height: auto;
        min-height: 400px;
        display: table;
        padding-right: 50px;
    }
    .prev-topics{
        float: left;
        width: 40%;
        height: auto;
        min-height: 400px;
        margin-left: 5%;

    }
    .today-topic .title{
        text-transform: uppercase;
        font-size: 0.8em;
        font-family: "Lato bold", serif;
        letter-spacing: 0.07em;
    }
    .prev-topics .title{
        text-transform: uppercase;
        font-size: 0.8em;
        font-family: "Lato bold", serif;
        letter-spacing: 0.07em;
        text-align: right;
        display: block;
    }
    .today-topic .time-stamp{
        font-size: 0.7em;
        color: #444;
        font-family: "Lato bold", serif;
    }
    .today-topic .topic{
        font-size: 1.2em;
        font-family: "Lato light", serif;
        line-height: 1.2;
        width: 100%;
        display: block;
        margin-top: 20px;
    }
    .prev-row{
        width: 100%;
        height: 120px;
        background-color: #fafafa;
    }
    .prev-row:nth-child(even){
        background-color: #fdfdfd;
    }
    .prev-row >div{
        float: left;
    }
    .prev-row .number-comments{
        width: 120px;
        height: 100px;
        text-align: center;
        padding: 20px 5px;

    }
    .prev-row .number-comments:after{
        position: absolute;
        height: 60%;
        width: 1px;
        background: lightgrey;
        content: "";
        top: 20%;
        left: 100%;
    }
    .fb-comments-count{
        color: purple;
        font-family: "Lato bold", serif;
        font-size: 2em;
        line-height: 1.3;
    }
    .fb-comments-text{
        color: #444;
        font-family: "Lato bold", serif;
        text-transform: uppercase;
        font-size: 0.7em;
        letter-spacing: 0.1em;
    }
    .topic-desc{
        font-size: 1em;
        color: #000000;
        font-family: "Lato light", serif;
        line-height: 1.2;
        width: calc(100% - 130px);
        margin-left: 10px;
        display: block;
        padding-top: 10px;

    }
</style>

<section class="ipf-debates">

    @if(count($midahalo)>0)
        <h1 class="title">Midahalo</h1>
        <div class="today-topic">
            <span class="title">mada mpya</span> | <span class="time-stamp">{{$midahalo[0]['date']}}</span>
            <span class="topic">{{$midahalo[0]['description']}}</span>
            <div class="fb-comments" data-href="{{$midahalo[0]['link']}}" data-numposts="1"></div>
        </div>
    @endif

    <div class="prev-topics">

        @if(count($midahalo)>0)
            <span class="title">mada zilizopita</span>
            @foreach($midahalo as $details)
                <div class="prev-row">
                    <div class="number-comments">
                        <span class="fb-comments-count" data-href="{{$details['link']}}"></span><br/>
                        <span class="fb-comments-text">maoni</span>
                    </div>
                    <div class="topic-desc">{{$details['description']}}<a style="color: purple" href="{{url('debates/'. $details['id'])}}"> soma zaidi</a></div>
                </div>
            @endforeach
        @endif    
    </div>


</section>
