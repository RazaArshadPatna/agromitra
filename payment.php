<?php include 'config/header.php'; ?>

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Payment</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Payment</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="about-one"
    style="background-image: url('assets/images/shapes/imgpsh.webp');background-size:cover;background-position:center;">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <form>
                    <div class="row">

                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Name*</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Mobile*</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Amount*</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" required>
                            <label for="floatingInput">UTR Number*</label>
                        </div>
                        
                        <button type="submit" class="btn btn-danger">Submit</button>

                    </div>


                </form>
            </div>
            <div class="col-lg-4">
                <img src="assets/images/scan.avif" style="width:100%;">
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>



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