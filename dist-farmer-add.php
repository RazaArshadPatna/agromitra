<?php include 'config/header.php'; ?>

<style>
.input_field {
    width: 100%;
    background-color: #efefee;
    border: none;
    padding: 22px;
    color: #717c70;
}
</style>


<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Customer Form</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Customer Form</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<!-- Login Start -->
<section class="pb-50" style="background:url(assets/images/shapes/imgpsh.webp);">
    <div class="container">

        <div class="row">

            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay="400ms">
                <div class="login-page__wrap pt-5">

                    <form>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:5px;">
                        <span style="color:#3c6c0e;font-size:25px;">Customer Details</span>
                        <a href="distributor-profile.php?id=<?php echo '1' ?>" class="btn btn-success">View Sell</a>
                        </div>

                        <div class="row">
                     
                            <div class="col-lg-6 mb-3">

                                <select name="" class="form-select input_field">
                                    <option value="1">--Select Name--</option>
                                    <option value="1">Mukesh Kumar Mishra</option>
                                    <option value="2">Santosh Kumar Chouhan</option>
                                    <option value="3">Amit Kumar Mishra</option>
                                    <option value="3">Manish Pandey</option>
                                </select>
                            </div>



                            <div class="col-lg-6 login-page__form-input-box">
                                <input type="text" placeholder="Amount" class="input_field">
                            </div>

                            <div class="col-lg-6 login-page__form-input-box">
                                <input type="text" placeholder="Mobile Number" class="input_field">
                            </div>
                           
                            <div class="col-lg-6 login-page__form-input-box">
                                <input type="date" placeholder="Date" class="input_field">
                            </div>
                            
                            <div class="col-lg-12 login-page__form-input-box">
                                <input type="text" placeholder="Remarks" class="input_field">
                            </div>
                        </div>
                       
                        <button type="submit" class="btn btn-danger">Submit</button>
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