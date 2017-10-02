<style>
    .ipf-navigation{
        width: 100%;
        height: 80px;
        background: whitesmoke;
        position: fixed;
        top: 0;
        z-index: 0;
        transition: all 0.6s ease-in;
        opacity: 0;
    }
    .ipf-navigation.show{
        opacity: 1;
        z-index: 10;
    }

    .bottom-nav{
        width: 100%;
        height: 80px;
        background-color: #7b2789;

    }
    .logo{
        height: 100%;
        width: 50%;
        float: left;
        padding: 28px 20px 0;
    }

    .nav-words {
       text-align: center;
        line-height: 3.5;
        font-size: 1.4em;
        display: block;
        position: absolute;
        top: 48px;
        left: 98px;

    }
    .nav-words  a{
        color: green;
        text-decoration: underline;
        cursor: pointer;
    }
    .login{
        height: 100%;
        width: 50%;
        float: left;
        padding: 28px 20px 0;
        text-align: right;
        font-size: 1.2em;
    }
    @media screen and (max-width: 520px) {
     .nav-words{
         width: 100%;
         line-height: 6.5;
         font-size: 0.7em;
         font-weight: 700;
     }
    }
</style>

<section class="ipf-navigation">

<div class="bottom-nav">
    <input type="checkbox" id="menu">
    <label for="menu" onclick></label>
    <nav role="off-canvas">
        <ul class="menu">
            <li id="home-li"><a href="{{url('')}}">Nyumbani</a></li>
            <li id="video-li"><a href="{{url('history')}}">HISTORIA YA KATIBA</a></li>
            <li id="articles-li"><a href="{{url('machapisho')}}">MACHAPISHO Ya Katiba</a></li>
            <li id="video-li"><a href="{{url('read_katiba')}}">SOMA & PAKUA KATIBA</a></li>
            <li id="nafsi-li"><a  href="{{url('faq')}}" >FAQ</a></li>
        </ul>
    </nav>
</div>

</section>
