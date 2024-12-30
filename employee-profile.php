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
        <h2 class="page-header__title">Employee Profile</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Employee Profile</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->



<div class="container pt-5 pb-5">

    <div class="align-items-start">
        <div class="row">
        <div class="nav flex-column nav-pills me-3 col-lg-3 col-md-3 col-12" id="v-pills-tab" role="tablist" aria-orientation="vertical"
            style="    background: #1a91201c;padding: 5px;border-radius: 9px;    max-height: 249px;">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</button>
            <hr class="dashed_hr">
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Farmer
                Registration</button>
            <hr class="dashed_hr">
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">View Members</button>
            <hr class="dashed_hr">

            </div>

        <div class="tab-content col-lg-8 col-md-8 col-12" id="v-pills-tabContent"
            style="background: #ffc1072e;padding: 40px 40px 40px 40px;border-radius: 10px;">
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
                                <h3 class="team-details__title">Mahi Kumar Sinha</h3><!-- /.team-details__title -->
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
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <section class="team-details">
                    <div class="row">

                        <div class="col-lg-12">
                            <h2>Employee Form</h1>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-lg-12">
                            <form>
                                <div class="row">

                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Farmers Group Name*</label>
                                        <input type="text" required="" class="form-control"
                                            id="exampleFormControlInput1">
                                    </div>


                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Farmer Group ID*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Consultant Name*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Consultant Code*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Production Details*</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label style="font-size:13px;" for="exampleFormControlInput1"
                                            class="form-label">Total Amount*</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                        <button class="btn btn-danger btn-lg">Submit</button>
                                    </div>

                                </div>
                                <form>
                        </div>


                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            
                <div class="row">
                    <div>
                        <a href="farmer-registration.php" class="btn btn-success" style="float:right;">Add Farmers +</a>
                    </div>
                </div>


                <div class="table-responsive">

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                           for($i=0;$i<5;$i++){
                        ?>
                        <tr>
                            <td>Rabindra Tagore</td>
                            <td>9999999999</td>
                            <td>12-01-2024</td>
                            <td>1000000</td>
                        </tr>
                        <?php } ?>
                       
                    </tbody>

                </table>

                           </div>



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


