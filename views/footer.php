<footer class="footer">
    <div class="portfolioContainer wow fadeInUp delay-08s">       
        <div class=" Portfolio-box">
                <h2 class="date">Instagram</h2>
                <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/aa9285da535055ebbf9fa0041a1b70e1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
        <div class=" Portfolio-box">
            <h2 class="date">Merci</h2>
            <div class="footer-logo"><a href="#"><img src="/assets/images/SRlsmall.png" alt=""></a></div> 
            <span class="copyright">&copy; 2018 sarans Reflections. Photographe Annecy Marriage, Portrait, Mode, Enfant, Bébé, Naissance-Haute Savoie-Annecy-74,Lyon, Grenoble, Genève All Rights Reserved</span>
        </div> 
        <div class=" Portfolio-box">
            <h2 class="date">Facebook</h2>
                        <div class="fb-page" data-href="https://www.facebook.com/saransReflections/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/saransReflections/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/saransReflections/">Sarans Reflections</a></blockquote></div>
        </div> 
    </div>    		
</footer>
    
<script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/assets/js/popper-1.14.7.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="/assets/js/jquery.easing-1.4.1.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="/assets/js/wow.min.js"></script>
<script type="text/javascript" src="/assets/js/classie.js"></script>
<script type="text/javascript" src="/assets/vegas/vegas.min.js"></script>
<script type="text/javascript">
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

    $(document).ready(function(e) {
        //$('#main-navigation').scrollToFixed();
        /*$('header > nav > a').click(function() {
            $('.main-nav').slideToggle();
        });*/

        /* $('.res-nav_click').click(function() {
            $('.main-nav').slideToggle();
            return false
        }); */
    });

    // Hero
    $(".hero").css({minHeight: windowHeight + "px"});
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
    

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();

    /* $(window).load(function() {
        $('.main-nav li a, .servicelink').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500, 'easeInOutExpo');

            if ($(window).width() < 768) {
                $('.main-nav').hide();
            }
            event.preventDefault();
        });
    }) */

    $(window).on('load', function() {
        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;

        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function() {
            // check if columns has changed
            var currentColumns = Math.floor(($body.width() - 30) / colW);
            if (currentColumns !== columns) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width(columns * colW)
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });
    });
</script>
</body>
</html>