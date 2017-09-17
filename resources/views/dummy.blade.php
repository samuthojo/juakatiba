<style>
    .ipf-media{
        width: 100%;
        min-height: 80vh;
        display: table;
        background-color: #d7d7d7;
        padding: 50px 100px;
    }
    .ipf-media>div{
        border-radius: 5px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.25);
        width: 80%;
        margin: 0 auto;
    }
    .media-banner{
        width: 100%;
        height: 400px;
        background-image: url("{{url('assets/images/art.png')}}");
        margin: 0 auto;
        background-size: cover;

    }
    .media-desc{
        width: 100%;
        display: inline-block;
        padding: 30px;
        background-color: #FFF;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;

    }
    .media-desc p{
        text-align: left;
        font-size: 1.05em;
        color: #000;
        font-weight: 300;
        line-height: 1.2;
    }

</style>
<div class="ipf-media">
    <div>
        <div class="media-banner"></div>
        <div class="media-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci odio, sollicitudin vitae cursus id, accumsan consectetur tellus. In varius, dui quis porttitor sodales, elit quam imperdiet massa, sit amet scelerisque lectus enim ac massa. Etiam a ante molestie, fermentum enim et, tincidunt sapien. Nam molestie quis purus sit amet aliquam. Integer pretium scelerisque tellus in condimentum. Quisque venenatis a erat a tempus. In faucibus purus libero, ac ultrices arcu convallis et. Etiam eget sem ac orci egestas porta. Curabitur interdum dictum placerat. Suspendisse faucibus quis tellus nec feugiat. In ligula lorem, ultricies sed leo id, commodo pretium eros. Ut tellus augue, maximus id dictum sit amet, auctor id enim. Curabitur molestie eget orci id iaculis. Ut sodales at purus in tempor. Curabitur consectetur, nisl vel euismod condimentum, enim magna gravida diam, vitae interdum urna risus id sapien. Aliquam ac diam a est faucibus volutpat.</p><br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci odio, sollicitudin vitae cursus id, accumsan consectetur tellus. In varius, dui quis porttitor sodales, elit quam imperdiet massa, sit amet scelerisque lectus enim ac massa. Etiam a ante molestie, fermentum enim et, tincidunt sapien. Nam molestie quis purus sit amet aliquam. Integer pretium scelerisque tellus in condimentum. Quisque venenatis a erat a tempus. In faucibus purus libero, ac ultrices arcu convallis et. Etiam eget sem ac orci egestas porta. Curabitur interdum dictum placerat. Suspendisse faucibus quis tellus nec feugiat. In ligula lorem, ultricies sed leo id, commodo pretium eros. Ut tellus augue, maximus id dictum sit amet, auctor id enim. Curabitur molestie eget orci id iaculis. Ut sodales at purus in tempor. Curabitur consectetur, nisl vel euismod condimentum, enim magna gravida diam, vitae interdum urna risus id sapien. Aliquam ac diam a est faucibus volutpat.</p>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {

        $(".menu li a").removeClass("is-active");
        $("#art-li a").addClass("is-active");
    });
</script>
