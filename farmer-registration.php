<?php include 'config/header.php'; ?>

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="page-header__shape wow fadeInUp" data-wow-delay="200ms"></div>
    <div class="page-header__overlay"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Farmer Registration</h2>
        <ul class="grdeen-breadcrumb list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><span>Farmer Registration</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<!-- Login Start -->
<section class="login-page" style="padding: 20px 0;background:url(assets/images/shapes/imgpsh.webp);background-size:cover;background-position:center;">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 wow fadeInUp animated" data-wow-delay="400ms"
                style="text-align:center;padding:50px 10px 10px 10px">
                <h5 style="color:black;font-weight:700;line-height:2;">MANDI MITRA GENERAL KISHAN CARD= RS – 175/-</h5>
                <h5 style="color:black;font-weight:700;line-height:2;">GENERAL GOLD CARD WITH SPRAY MACHINE= RS – 360 /-
                </h5>
                <h5 style="color:#37c137;font-weight:700;line-height:2;">PREMIUM GOLD CLUB CARD + SPRAY MACHINE +
                    SOIL TESTING =RS- 600/-</h5>
                <h5 style="color:skyblue;font-weight:700;line-height:2;">PLATINUM CLUB CARD + BATTERY SPRAY MACHINE =RS-
                    660/-</h5>
                <h5 style="color:orange;font-weight:700;line-height:2;">PLATINUM CLUB CARD + BATTERY SPRAY MACHINE +
                    SOIL TESTING =RS- 1200 /-</h5>
            </div>
            <div class="col-lg-4 wow fadeInUp animated" data-wow-delay="300ms">
                <img src="assets/images/scan.avif" style="width:100%;">

            </div>
        </div>

    </div>


    <div class="container-fluid" style="padding-bottom:30px;">


        <div class="row">
            <h1 style="color:black;text-align:center;font-weight:700;">Farmer Registration Form</h1>
        </div>


        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h2>Personal Details</h1>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="row">

            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Applicant
                            Name*</label>
                        <input type="email" required="" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Father/Husband
                            Name*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>


                    <div class="col-lg-4 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Date Of
                            Birth*</label>
                        <input placeholder="Select your DOB" type="date" name="checkIn" id="datepicker"
                            class="form-control">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Age*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-4 mb-3" style="padding-top:8px;">
                        <p style="font-size:13px;">Category*</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1000"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1000" style="font-size:13px;">APL</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2000"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio2000" style="font-size:13px;">BPL</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio20000"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio20000" style="font-size:13px;">No</label>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-1"></div>
        </div>





        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h2>Address Details</h1>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="row">

            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Village
                            Name*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>


                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Post*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1"
                            class="form-label">Panchayat*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Police
                            Station*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Block*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1"
                            class="form-label">Subdivision*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1"
                            class="form-label">District/Province*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <div class="main">
                            <label style="font-size:13px;padding-bottom:6px;">State*</label>
                            <select name="" class="form-select">
                                <option value="1">Bihar</option>
                                <option value="2">Bengal</option>
                                <option value="3">Maharashtra</option>
                                <option value="3">Madhya Pradesh</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Pin Code /
                            Postal Code*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Mobile
                            Number*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Watsapp
                            Number*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Adhar
                            Number*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Pan Card
                            Number*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Nominee
                            Name*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1"
                            class="form-label">Relation*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Nominee
                            Age*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-2 mb-3" style="padding-top:8px;">
                        <p style="font-size:13px;">Kisan credit card*</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio100"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio100" style="font-size:13px;">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio200"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio200" style="font-size:13px;">No</label>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">KCC
                            Number*</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                </div>

            </div>

            <div class="col-lg-1"></div>
        </div>



        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-9">
                <h2>Details Of Land Holding</h1>
            </div>
            <!-- <div class="col-lg-2"><a href="javascript:void(0)" class="extra-fields-customer text-center btn btn-success"><i class="fas fa-plus"></i></a></div> -->
        </div>

        <div class="row customer_records">

            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">



                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Village
                            Name*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>


                    <div class="col-lg-3 mb-3">
                        <div class="main">
                            <label style="font-size:13px;padding-bottom:6px;">Land Type*</label>
                            <select name="" class="form-select">
                                <option value="1">Personal</option>
                                <option value="2">Partnership</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Area(In
                            Acer)*</label>
                        <input type="number" name="checkIn" id="" class="form-control">
                    </div>

                    <div class="col-lg-3 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Irrigated
                            Land*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Source Of
                            Irrigation*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Agricultural
                            Equipment Detail(if any)*</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>


                    <div class="col-lg-12 mb-3" style="padding-top:8px;">
                        <p style="font-size:13px;">Crop Details(What Kind of farming you do?)*</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1" style="font-size:13px;">Fruits</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio2" style="font-size:13px;">Flowers</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio3"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio3"
                                style="font-size:13px;">Vegetables</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio4"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio4" style="font-size:13px;">Rice</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio5"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio5" style="font-size:13px;">Wheat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio6"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio6" style="font-size:13px;">Corn</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio7"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio7" style="font-size:13px;">Oil Seeds</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio8"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio8" style="font-size:13px;">Pulses</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio9"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio9" style="font-size:13px;">Mushroom</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio10"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio10"
                                style="font-size:13px;">pharmaceutical</label>
                        </div>
                        
                    </div>


                    <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Other Agricultural Products</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="col-lg-4 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Spices Factory</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="col-lg-4 mb-3">
                        <label style="font-size:13px;" for="exampleFormControlInput1" class="form-label">Village Industry Business</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>


                </div>

            </div>

            <div class="col-lg-1 remove_btn"></div>


        </div>



        <div class="customer_records_dynamic"></div>


         <div class="row mb-3">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
            <label for="exampleFormControlTextarea1" class="form-label">Any More Info..</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-lg-1"></div>
                            

         </div>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
            <div class="col-lg-1"></div>
        </div>




    </div>





</section>






<!-- Login End -->


<?php include 'config/footer.php'; ?>


<!--Add More Detail -->
<script>
$('.extra-fields-customer').click(function() {
  $('.customer_records').clone().appendTo('.customer_records_dynamic');
  $('.customer_records_dynamic .customer_records').addClass('single remove');
  $('.single .extra-fields-customer').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');

  $('.customer_records_dynamic > .single').attr("class", "remove row");



  $('.customer_records_dynamic input').each(function() {
    var count = 0;
    var fieldname = $(this).attr("name");
    $(this).attr('name', fieldname + count);
    count++;
  });

});

$(document).on('click', '.remove-field', function(e) {
  $(this).parent('.remove').remove();
  e.preventDefault();
});
</script>
<!--Add More Detail-->

<script>
var padding_footer = document.getElementById('footer_padding');
padding_footer.classList.add('padding_footer');
</script>
