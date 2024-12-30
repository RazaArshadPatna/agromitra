<?php include 'config/header.php'; ?>

<style>
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: white;
    background-color: #1f9a26;
}


.nav-link {

    color: #ff0000;

}
</style>




<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Farmer's Profile</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Farmer's Profile</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->



<div class="container pt-5 pb-5">

    <div class="align-items-start">
        <div class="row">
        <div class="nav flex-column nav-pills me-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"
            style="    background: #1a91201c;padding: 5px;border-radius: 9px;max-height:330px;">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" 
                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                aria-selected="true">Profile</button>
            <hr class="dashed_hr">
            <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" 
                data-bs-target="#v-pills-reciept" type="button" role="tab" aria-controls="v-pills-home"
                aria-selected="true">Reciept</button>
            <hr class="dashed_hr">
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" 
                data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                aria-selected="false">Wallet</button>
            <hr class="dashed_hr">
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" 
                data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                aria-selected="false">Withdrawal</button>
            <hr class="dashed_hr">

        </div>


        <div class="tab-content col-lg-8" id="v-pills-tabContent"
            style="background: #ffc1072e;padding: 30px 30px 30px 30px;border-radius: 10px;min-height:300px;    display: flex;align-items: center;justify-content: center;">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <section class="team-details">
                    <!-- <div class="container"> -->
                    <div class="row gutter-y-60">
                        <div class="col-lg-4">
                            <div class="team-details__image">
                                <img src="assets/images/team/team-d-1.jpg" alt="grdeen" class="emp_img">
                            </div><!-- /.team-details__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-8">
                            <div class="team-details__content">
                                <h3 class="team-details__title">Mukesh Kumar Sinha</h3><!-- /.team-details__title -->
                                <div class="row  pt-2">
                                    <div class="col-lg-3"><b>Address:</b></div>
                                    <div class="col-lg-9">Kumhrar Patna Junction Gandhi Maidan Patna Bihar India.</div>
                                </div>
                                <div class="row  pt-2">
                                    <div class="col-lg-3"><b>Mobile Number:</b></div>
                                    <div class="col-lg-9">98888888888.</div>
                                </div>
                                <div class="row  pt-2">
                                    <div class="col-lg-3"><b>Email:</b></div>
                                    <div class="col-lg-9">Emp@gmail.com</div>
                                </div>
                            </div><!-- /.team-details__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <!-- </div> -->
                </section><!-- /.team-details -->
            </div>

            <div class="tab-pane fade" id="v-pills-reciept" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <h3>Click here to print receipt: <a href="receipt/receipt.html" target="_blank" style="color:red;"> click...</a></h3>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2>Amount in Your Wallet Is: <span style="color:red;"> ₹ 10000000.</span></h2>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <section class="team-details">
                    <div class="row">

                        <div class="col-lg-12">
                            <h2>Withdrawal Form</h1>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-lg-12">
                            <form>
                                <div class="row">

                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Farmer Name*</label>
                                        <input type="text" required="" class="form-control"
                                            id="exampleFormControlInput1">
                                    </div>


                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Farmer Mobile Number*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Bank Name*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">IFSC Code*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">MICR Code*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Branch Name Address*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                   

                                    <h5 class="text-center">OR</h4>

                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">UPI ID*</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">UPI Phone*</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1">
                                    </div>


                                    <div>
                                        <button class="btn btn-danger btn-lg">Submit</button>
                                    </div>


                                </div>
                            <form>
                        </div>


                    </div>
                </section>
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
