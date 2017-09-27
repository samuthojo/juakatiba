<style>
    footer{
        margin-top: 180px;
        background: #261704;
        min-width: 600px;
        overflow: visible;
        color: #f0f0f0;
    }

    #footerWrapper{
        max-width: 1000px;
        margin: auto;
        padding-bottom: 40px;
    }

    #footerContacts{
        position: relative;
        top: -90px;
        padding: 50px 40px;
        color: #000;
        background: #ffb223;
    }

    #footerContacts > div{
        padding-left: 30px;
        position: relative;
    }

    #footerContacts i{
        position: absolute;
        font-size: 3.5em;
        left: -44px;
        margin-right: 4px;
        color: #ffd588;
    }

    #footerContacts h3{
        font-family: "Lato bold", sans-serif;
        margin-bottom: 12px;
        font-size: 1.4em;
    }

    #footerContacts span{
        display: block;
        font-size: 16px;
        font-family: "Lato regular", sans-serif;
    }

    #footerContacts strong{
        font-family: "Lato bold", sans-serif;
    }

    #footerContent .layout > div{
        margin-right: 12px;
    }

    #footerContent .layout > div h3{
        font-family: "Lato bold", sans-serif;
        height: 60px;
        margin-bottom: 12px;
        color: #f0f0f0;
        font-size: 20px;
    }

    #footerLogo img{
        height: 100%;
    }

    #footerLinks a{
        margin-bottom: 6px;
        color: #febd17;
    }

    #footerLinks a:before{
        font-family: FontAwesome;
        content: "\f105";
        padding-right: 3px;
    }

    #footerContent .layout > div.flex{
        max-width: 440px;
    }

    #footerContent .layout > div:not(.flex){
        min-width: 220px;
    }

    #footerSocials .social-icon{
        margin-left: 0;
        margin-right: 8px;
        background: #f0f0f0;
    }
</style>
<footer>
    <div id="footerWrapper">

        <div id="footerContacts" class="layout">
            <div class="flex">
                <h3>WASILIANA NASI</h3>
                <div class="layout">
                    <i class="fa fa-phone"></i>
                    <div>
                        <span>
                            <strong>Ya Mkononi</strong>
                            +2556798124351
                        </span>
                        <span>
                            <strong>Ya Mezani</strong>
                            +2556798124351
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex">
                <h3>TUTEMBELEE</h3>
                <div class="layout">
                    <i class="fa fa-map-marker"></i>
                    <div>
                        <span>
                            Tanzania Bora Initiative,<br>
                            Main Office, Plot No. 319,<br>
                            Old Bagamoyo Road, Kawe Beach,<br>
                            Tanzania, East Africa.<br>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex">
                <h3>TUANDIKIE BARUA PEPE</h3>
                <div class="layout">
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        info@juakatibatanzania.com
                    </span>
                </div>
            </div>
        </div>

        <div id="footerContent">
            <div class="layout justified">
                <div id="about" class="flex">
                    <h3 id="footerLogo">
                        <img src="{{asset('assets/images/logo-words.png')}}" alt="">
                    </h3>
                    <p style="max-width: 87%">
                        Katiba ni waraka wa kisiasa
                        unaowawezesha wananchi
                        kujitambua kama Taifa. Pia
                        katiba ni waraka wa kiutawala
                        unaelezea mgawanyo wa
                        madaraka na majukumu ya
                        vyombo mbalimbali vya dola.
                    </p>
                </div>
                <div id="footerLinks">
                    <h3>LINK MUHIMU</h3>
                    <div class="layout vertical">
                        <a href="#">
                            Soma na pakua katiba
                        </a>
                        <a href="#">
                            Historia ya katiba
                        </a>
                        <a href="#">
                            Machapisho muhimu
                        </a>
                        <a href="#">
                            Maswali muhimu
                        </a>
                    </div>
                </div>
                <div id="footerSocials">
                    <h3>MITANDAONI</h3>
                    <div class="layout">
                        <a href="#" class="social-icon layout center-center"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-icon layout center-center"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon layout center-center"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="social-icon layout center-center"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>