<?php include 'config/header.php'; ?>




<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Farmer Login</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Farmer Login</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<!-- Login Start -->
<section class="login-page" style="background:url(assets/images/shapes/booking-bg1-1.jpg);">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="300ms">
                <img src="assets/images/young.jpg" style="width:100%;border-radius:10px;">
              
            </div>
            <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="400ms">
                <div class="login-page__wrap">
                    <h3 class="login-page__wrap__title">Farmer's Login</h3>
                    <form class="login-page__form" action="farmer-profile.php">
                        <div class="login-page__form-input-box">
                            <input type="email" placeholder="User ID">
                        </div>
                        <div class="login-page__form-input-box">
                            <input type="password" placeholder="Password">
                        </div>
                        
                       
                        
                        <div class="login-page__form-btn-box">
                            <button type="submit" class="grdeen-btn">
                                <span>Login</span>
                            </button>
                        </div><br>

                    </form>
                </div><!-- register-form -->
            </div>
        </div>
    </div>
</section>
<!-- Login End -->


<section class="great-together">
    <div class="container">
        <div class="great-together__wrapper">
            <div class="great-together__bg"
                style="background-image: url('assets/images/backgrounds/companies-bg1-1.jpg');"></div>
            <div class="great-together__overlay"></div>
            <div class="great-together__content text-center">
                <h3 class="great-together__title">Let's make something great together</h3>
                <p class="great-together__text">For more information and our consultation please contact us</p>
                <a href="#" class="grdeen-btn great-together__btn">
                    <span>CONTACT NOW</span>
                </a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /.great-together -->

<?php include 'config/footer.php'; ?>