<footer class="bg-dark">
    <div class="portfolio pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <h3 class="text-white font-weight-bold">Instagram</h3>
                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="http://lightwidget.com/widgets/aa9285da535055ebbf9fa0041a1b70e1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                </div>
                <div class="col-12 col-lg-6 d-sm-none">
                    &nbsp;
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <h3 class="text-white font-weight-bold">Facebook</h3>
                    <div class="fb-page" data-href="https://www.facebook.com/saransReflections/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/saransReflections/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/saransReflections/">Sarans Reflections</a></blockquote></div>   
                </div>
            </div>
        </div>
    </div>
    <div class="copyright pt-5 pb-5">
        <div class="container text-center">
            <p class="text-white mb-2">&copy; 2020 Sarans Reflections &middot; All Rights Reserved</p>
            <small class="text-muted">Photographe Genève Marriage, Portrait, Mode, Enfant, Bébé,Grossesse</small>
        </div>
    </div>
</footer>
    
<script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/assets/js/popper-1.14.7.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.easing-1.4.1.min.js"></script>
<script type="text/javascript" src="/assets/vegas/vegas.min.js"></script>
<script type="text/javascript" src="/assets/aos/aos.js"></script>
<script type="text/javascript" src="../contactform/contactform.js"></script>
<script type="text/javascript">
    //Animate on scroll
    AOS.init();

    //Get Window Height
    var windowHeight = $(window).height();

    // Main Navigation
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > windowHeight) {
            $('.top-nav').addClass('nav-sticky');
        } else if($(this).scrollTop() <= 5) {
            $('.top-nav').removeClass('nav-sticky');
        }
    });

    // Navigation Scroll
    $(window).on('load', function() {
        $('.top-nav .nav a').on('click', function(e) {
            var anchor = $(this).attr('href');

            $('html, body').stop().animate({
                scrollTop: $(anchor).offset().top-100
            }, 800, 'easeInOutExpo');

            e.preventDefault();
        })
    });

    // Hero
    <?php if($deviceIs == 'tablet') { ?>
    $(".hero").css({minHeight: "600px"});
    <?php } else { ?>
    $(".hero").css({minHeight: windowHeight + "px"});
	<?php } ?>
    $(".hero").vegas({
        cover: true,
        slides: [
            { src: "/assets/images/hero-sr.jpg" },
        ]
    });

    // Down arrow
    $('span[data-scrolldown="true"]').on("click", function(e) {
        e.stopPropagation();
        $("html, body").animate({
            scrollTop: $("#about").offset().top
        }, 1000, 'swing')
    });
    
    // Contact form 
    $('.btn-contact').on('click', function () {
        console.log('test');
    });
</script>
