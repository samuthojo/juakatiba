<style>
    .ipf-machapisho{
        width: 100%;
        height: auto;
        display: table;
        padding-bottom: 150px;
        background: white;
        top: 150px;
        padding-left: 25px;


    }
    .machapisho-card{
        width: 30%;
        height: 200px;
        float: left;
        margin: 10px;


    }
    .machapisho-card:hover .download-btn{

        background-color:purple;
    }
    .machapisho-card .content{
        width: 100%;
        height: 70%;
        background: whitesmoke;
        padding: 10px;
    }
    .content .title{
        font-size: 1.2em;
        text-transform: uppercase;
        display: block;
        width: 100%;
        line-height: 1.2;
        margin-bottom: 10px;



    }
    .publisher{
        bottom: 35px;
        position: absolute;
        text-transform: capitalize!important;
    }
    .publish-date{
        bottom: 10px;
        position: absolute;
        text-transform: capitalize!important;
    }
    .content .publisher:before{
        content: "Imechapishwa na:   ";
        color: purple;
        font-family: "Lato regular", serif;

    }
    .content .publish-date:before{
        content: "Tarehe:   ";
        color: purple;
        font-family: "Lato regular", serif;
    }
    .machapisho-card .download-btn{
        width: 100%;
        height: 30%;
        background-color: rgba(128, 0, 128, 0.8);
        text-align: center;
        color: #ffffff;
        line-height: 3.6;
        font-family: "Lato regular", serif;
        display: block;
        transition: all 0.6s ease-in;
        box-shadow: 0 0 0 transparent;
    }
    @media screen and (max-width: 520px) {
        .machapisho-card{
            width: 100%;
            margin: 10px auto;
        }
        .ipf-machapisho{
            padding-left: 10px;
            padding-right: 10px;
        }
    }

</style>


<section class="ipf-machapisho">

        @if(count($machapisho)>0)
            @foreach($machapisho as $details)
                <div class="machapisho-card">
                    <div class="content">
                        <span class="title">{{$details['title']}}</span>
                        <span class="publisher">{{$details['author']}}</span><br/>
                        <span class="publish-date">{{$details['date']}}</span>
                    </div>
                    <a class="download-btn" href="{{url('api/download_chapisho_pdf/' . $details['id'] . '/' . $details['pdf'])}}">
                        PAKUA PDF &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cloud-download"></i>
                    </a>
                </div>
            @endforeach      
       @endif

</section>
