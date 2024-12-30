<style>
/* Customize the style of the WhatsApp icon */
.whatsapp-icon {
    position: fixed;
    bottom: 150px;
    right: 30px;
    width: 55px;
    height: 55px;
    background-color: #25D366;
    /* Change background color here */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 40px;
    text-decoration: none;
    box-shadow: 0px 0px 0px 4px rgba(0, 0, 0, 0.1),
        /* Outer stroke */
        0px 0px 0px 8px rgba(0, 0, 0, 0.04);
    z-index: 9999;
    animation: bounce 1s infinite alternate;
}

.call-icon {
    position: fixed;
    bottom: 150px;
    left: 30px;
    width: 55px;
    height: 55px;
    background-color: #25D366;
    /* Change background color here */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 40px;
    text-decoration: none;
    box-shadow: 0px 0px 0px 4px rgba(0, 0, 0, 0.1),
        /* Outer stroke */
        0px 0px 0px 8px rgba(0, 0, 0, 0.04);
    z-index: 9999;
    animation: bounce 1s infinite alternate;
}

@keyframes bounce {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}
</style>
<a href="https://wa.me/916202191979" class="whatsapp-icon" target="_blank" rel="noopener noreferrer">
    <!-- Replace the icon with a customer support icon -->
    <i class="fab fa-whatsapp"></i> <!-- Assuming you have FontAwesome installed for the WhatsApp icon -->
</a>
<a href="tel:6202191979" class="call-icon" target="_blank" rel="noopener noreferrer">
    <!-- Replace the icon with a customer support icon -->
    <i class="fas fa-phone" style="font-size:30px;"></i>
    <!-- Assuming you have FontAwesome installed for the WhatsApp icon -->
</a>
<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg1-1.jpg);"></div>
    <div class="main-footer__overlay"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top" id="footer_padding">
        <div class="container">
            <div class="row">
                <div class="footer-widget__col footer-widget__col__col1">
                    <div class="footer-widget footer-widget--about">
                        <a href="#" class="footer-widget__logo">
                            <img src="assets/images/logo-dark.png" width="155" alt="AgroMitra">
                        </a>
                        <p class="footer-widget__experience-text">Welcome to AgroMitra, Over 20 years of experience
                            we’ll ensure you get the best guidance. AgroMitra Helps you in many ways</p>

                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->

                <div class="footer-widget__col  footer-widget__col__col2">
                    <div class="footer-widget footer-widget--links">
                        <h6 class="footer-widget__title">Important Links</h6>
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="job-apply.php">Career</a></li>
                            <li><a href="login.php">Farmer Registration</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
                <div class="footer-widget__col  footer-widget__col__col3">
                    <div class="footer-widget footer-widget--gallery">
                        <h6 class="footer-widget__title">Gallery</h6>
                        <!-- /.footer-widget__title -->
                        <div class="footer-widget__gallerywrap d-flex flex-wrap">
                            <div class="footer-widget__gallerywrap__img">
                                <img src="assets/images/resources/footer-gallery1-1.jpg" alt="grdeen">
                            </div>
                            <div class="footer-widget__gallerywrap__img">
                                <img src="assets/images/resources/footer-gallery1-2.jpg" alt="grdeen">
                            </div>
                            <div class="footer-widget__gallerywrap__img">
                                <img src="assets/images/resources/footer-gallery1-3.jpg" alt="grdeen">
                            </div>
                            <div class="footer-widget__gallerywrap__img">
                                <img src="assets/images/resources/footer-gallery1-4.jpg" alt="grdeen">
                            </div>
                            <div class="footer-widget__gallerywrap__img">
                                <img src="assets/images/resources/footer-gallery1-5.jpg" alt="grdeen">
                            </div>
                            <div class="footer-widget__gallerywrap__img">
                                <img src="assets/images/resources/footer-gallery1-6.jpg" alt="grdeen">
                            </div>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
                <div class="footer-widget__col  footer-widget__col__col4">
                    <div class="footer-widget footer-widget--blog">
                        <h5 class="footer-widget__title">Contact US</h5>
                        <!-- /.footer-widget__title -->

                        <div class="footer-widget__post-wrap">
                            <p><i class="fas fa-map-marker-alt"></i> New Market, Jama Masjid Road Patna, Bihar- 800001
                            </p>
                            <p><a href="tel:9999999999" style="color:#626f62"><i class="fas fa-phone"></i> +91
                                    9999999999</p></a>
                            <p><a href="tel:8888888888" style="color:#626f62"><i class="fas fa-phone"></i> +91
                                    8888888888</p></a>
                            <p><i class="fas fa-envelope"></i><a href="mailto:support@agromitraa.com"
                                    style="color:#626f62"> support@agromitraa.com</a></p>
                        </div>

                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__top -->

    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright"> &copy; <span class="dynamic-year"></span> AgroMitra All Rights
                    Reserved</p>
                <div class="main-footer__social-row">
                    <p class="main-footer__social-row-text">Social</p>
                    <ul class="main-footer__social-list">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.main-footer__inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__bottom -->
</footer>
<!-- /.main-footer -->

</div>
<!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:support@agromitraa.com">support@agromitraa.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:9999999999">+91 9999999999</a>
            </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://facebook.com/">
                <i class="fab fa-facebook-f"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com/">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://linkedin.com/">
                <i class="fab fa-linkedin-in"></i>
                <span class="sr-only">Linkedin</span>
            </a>
            <a href="https://www.instagram.com/">
                <i class="fab fa-instagram"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div>
        <!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="grdeen-btn">
                <span><i class="icon-search"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>



<!-- <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
<script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
<!-- template js -->
<script src="assets/js/grdeen.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"
    integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.js"
    integrity="sha512-tOyzsVuGuz0il5EcXFi/qA5DI4BNLna4gHbWn+HbQBP0jmRhyqMKup24fzyKnxSX0jBxt2+qStqwwHDIh5TaGA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
/* Video Popup*/
jQuery(document).ready(function($) {
    // Define App Namespace
    var popup = {
        // Initializer
        init: function() {
            popup.popupVideo();
        },
        popupVideo: function() {

            $('.video_model').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                gallery: {
                    enabled: true
                }
            });

            /* Image Popup*/
            $('.gallery_container').magnificPopup({
                delegate: 'a',
                type: 'image',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                gallery: {
                    enabled: true
                }
            });

        }
    };
    popup.init($);
});
</script>
<script>
	
    new DataTable('#example');
    new DataTable('#example1');
</script>