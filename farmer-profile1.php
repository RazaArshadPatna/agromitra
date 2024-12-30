<?php include 'config/header.php'; ?>

<style>
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: #de1f26;
}
</style>

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Farmer profile</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Farmer Profile</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->



<div class="container pt-5 pb-5">

    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" style="color:#1a9120;"
                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                aria-selected="true">Profile</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" style="color:#1a9120;"
                data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                aria-selected="false">Receipt</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" style="color:#1a9120;"
                data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                aria-selected="false">Wallet</button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" style="color:#1a9120;"
                data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">Withdrawal</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <section class="team-details">
                    <!-- <div class="container"> -->
                    <div class="row gutter-y-60">
                        <div class="col-lg-4">
                            <div class="team-details__image">
                                <img src="assets/images/team/team-d-1.jpg" alt="grdeen">
                            </div><!-- /.team-details__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-8">
                            <div class="team-details__content">
                                <h3 class="team-details__title">Solamin karbi</h3><!-- /.team-details__title -->
                                <div class="team-details__designation">Senior gardener</div>
                                <div class="team-details__text">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua.
                                    Quis ipsum suspendisse ultrices gravida.Risus commodo viverra accu
                                </div>
                                <div class="row gutter-y-30">
                                    <div class="col-md-6">
                                        <div class="team-details__box">
                                            <div class="team-details__box__icon"><span class="fas fa-envelope"></span>
                                            </div>
                                            <h5 class="team-details__box__title">Email Me</h5>
                                            <p class="team-details__box__text">
                                                <a href="mailto:Help@gmail.com">Help@gmail.com</a>
                                                <a href="mailto:Garden@gmail.com">Garden@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-details__box">
                                            <div class="team-details__box__icon"><span
                                                    class="fas fa-map-marker-alt"></span></div>
                                            <h5 class="team-details__box__title">Location</h5>
                                            <p class="team-details__box__text">
                                                21 King Street 5th Floor, Ontario Canada
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.team-details__designation -->
                                <div class="team-details__social">
                                    <h5 class="team-details__social__title">Social</h5>
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
                                </div><!-- /.team-details__social -->
                                <!-- /.team-details__text -->
                                <div class="team-details__info">
                                    <p class="team-details__info__text">Do you have an emergency</p>
                                    <div class="team-details__info__call"><span
                                            class="fas fa-phone-square-alt"></span><a href="tel:+0881745651">+0(88)
                                            1745651</a></div>
                                </div>
                            </div><!-- /.team-details__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <!-- </div> -->
                </section><!-- /.team-details -->
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                Amount In Wallet ₹1000000
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                <div class="row">
                      <div class="col-lg-6"></div>
                      <div class="col-lg-6"></div>
                </div>
                

            </div>
        </div>
    </div>

</div>



<?php include 'config/footer.php'; ?>

<script>
var padding_footer = document.getElementById('footer_padding');
padding_footer.classList.add('padding_footer');
</script>