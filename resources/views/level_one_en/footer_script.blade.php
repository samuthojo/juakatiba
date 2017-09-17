<script  src="{{url('assets/css/owl-carousel/owl.carousel.js')}}" type="text/javascript"></script>
<script  src="{{url('assets/sidenav/script.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({


            slideSpeed: 400,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: 30000,
            navigation: true,
            pagination: false,
            responsive: true,
            transitionStyle: "fade" //fade,fadeUp,backSlide

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

        $(".openpopup").on("click",function(){
            var pillars_section= $('body,html');
            $('body,html').animate({
                    'scrollTop': pillars_section.offset().top-50
                }, 1000
            );
            $(".ipf-popup").show();
            $(" .popup-contents").addClass("animated bounceIn").delay(4000);

        });
    });

</script>

</body>
</html>
