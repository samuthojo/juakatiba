<style>
.ipf-popup{
    position: absolute;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 10;
    background-image: url("{{url('assets/images/shdw.png')}}");
    display: none;
}
    .popup-contents{
        width: 500px;
        height: 280px;
        background: #ffffff;
        margin:30vh auto;
        box-shadow: 0 0 5px #000;
        padding-top: 30px;
    }
    .popup-row:first-child{
        background-color: #000;

    }
    .popup-row:nth-child(2){
        background-color: #254c9e;

    }
    .popup-row:nth-child(3){
        background-color: #2baa3a;

    }
    .popup-row{
        width: 80%;
        height: 50px;
        margin: 10px auto;
        background: red;
        display: block;
        padding: 0 8px;

        color: #ffffff;
        text-transform: uppercase;
        line-height: 3;
        font-family: "Lato regular", serif;
    }
    .popup-row i{
        position: absolute;
        top: 15px;
        right: 10px;

    }
    .close-button{
        text-transform: uppercase;
        letter-spacing: 0.125em;
        position: absolute;
        bottom: 20px;
        transform: translateX(-50%);
        left: 50%;
        font-family: "Lato bold";
        font-size: 0.9em;
        color: #254c9e;
        cursor: pointer;
    }


</style>

<section class="ipf-popup">
    <div class="popup-contents">
        <a class="popup-row" href="{{url('download_katiba_pdf/3')}}" >pakua katiba inayo pendekezwa<i class="fa fa-cloud-download"></i></a>
        <a class="popup-row" href="{{url('download_katiba_pdf/2')}}" >pakua rasimu ya katiba<i class="fa fa-cloud-download"></i></a>
        <a class="popup-row" href="{{url('download_katiba_pdf/1')}}" >Pakua katiba ya mwaka 1977<i class="fa fa-cloud-download"></i></a>
        <span class="close-button">FUNGA</span>
    </div>



</section>



<script>
    $(".close-button").on("click",function(){
        $(".ipf-popup").fadeOut();
        $(" .popup-contents").removeClass("animated wobble");

    })

</script>
