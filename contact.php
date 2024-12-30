<?php include 'config/header.php'; ?>

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Contact</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one">
    <div class="container">
        <h3 class="contact-one__title">
            Do you have Any Query?<br>  Contact Us
        </h3>

        <!-- /.contact-one__text -->
        <div class="contact-one__info-wrapper" style="background-image: url(assets/images/shapes/contact-bg-1.png);">
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-one__info">
                        <div class="contact-one__info__icon">
                            <i class="icon-location"></i>
                        </div><!-- /.contact-one__info__icon -->
                        <h4 class="contact-one__info__title">Our office</h4><!-- /.contact-one__info__title -->
                        <p class="contact-one__info__text">123, Gandhi Maidan Patna Junction Patna City Patna</p>
                        <!-- /.contact-one__info__text -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-one__info">
                        <div class="contact-one__info__icon">
                            <i class="icon-telephone-call"></i>
                        </div><!-- /.contact-one__info__icon -->
                        <h4 class="contact-one__info__title">Make a call</h4><!-- /.contact-one__info__title -->
                        <p class="contact-one__info__text">
                            <a href="tel:0881682648101">+91 9999999997</a>
                            <a href="tel:0881682648101">+91 8988988888</a>
                        </p><!-- /.contact-one__info__text -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-one__info">
                        <div class="contact-one__info__icon">
                            <i class="icon-help"></i>
                        </div><!-- /.contact-one__info__icon -->
                        <h4 class="contact-one__info__title">Support</h4><!-- /.contact-one__info__title -->
                        <p class="contact-one__info__text">
                            <a href="mailto:agro@gmail.com">agro@gmail.com</a>
                            <a href="mailto:mitra@gmail.com">mitra@gmail.com</a>
                        </p><!-- /.contact-one__info__text -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
    <div class="container contact-one__container">
        <div class="contact-one__wrapper" style="background-image: url(assets/images/backgrounds/contact-bg-2.jpg);">
            <form class="form-one contact-one__form contact-form-validated "
                action="#">
                <div class="form-one__group">
                    <div class="form-one__control ">
                        <input type="text" name="name" placeholder="Your Name">
                    </div><!-- /.form-one__control  -->
                    <div class="form-one__control">
                        <input type="email" name="email" placeholder="Email Address">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <input type="text" name="tel" placeholder="Phone">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <input type="text" name="text" placeholder="Subject">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full">
                        <textarea name="message" placeholder="Your Message here"></textarea><!-- /# -->
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full text-center">
                        <button type="submit" class="grdeen-btn"><span>Send a message</span></button>
                    </div><!-- /.form-one__control -->
                </div><!-- /.form-one__group -->
            </form>
            <div class="result"></div><!-- /.result -->
        </div>
    </div>
</section><!-- /.contact-one -->
<section class="contact-map">
    <div class="google-map google-map__contact">
        <iframe title="template google map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="map__contact" allowfullscreen></iframe>
    </div>
    <!-- /.google-map -->
</section><!-- /.contact-map -->




<?php include 'config/footer.php'; ?>

<script>
   var padding_footer=document.getElementById('footer_padding');
   padding_footer.classList.add('padding_footer');
</script>