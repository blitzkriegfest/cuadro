<section class="get-started">

          <div class="pagewrapper8">

              <div class="wrap">

                <h1 class="heading-text">Get Started</h1>

                  <div class="step-1 steps active-step" style="display: block">

                        <h5>Step 1: Select a recipient</h5>

                        <ul class="pick-options">

                            <li>

                                <input type="radio" name="options" id="for-me" value="for-me">

                                <label for="for-me">For Me</label>

                            </li>

                            <li class="divider">OR</li>

                            <li>

                                <input type="radio" name="options" id="special-someone" value="special-someone">

                                <label for="special-someone">For Special Someone</label>

                            </li>

                        </ul>

                        <ul class="navigation">

                            <button type="button" class="next-btn" disabled>NEXT</button>

                        </ul>

                  </div>



                  <form action="<?php echo base_url('getStarted/addOrder'); ?>" method="POST" enctype="multipart/form-data" id="ordetails">

                  <div class="step-2 steps" style="display: none">

                        <h5>Step 2: Select your photos (min of 3)</h5>

                        <p>Please upload high resolution photos<br/>Suggested size: 499 x 499 pixels</p>

                        <ul class="upload-options">

                            <li>

                                <input type="file" name="order_images[]" id="computer-upload" multiple accept="image/jpeg, image/png">

                                <label for="computer-upload" class="upload-el"><img src="<?php echo base_url('public/frontend/'); ?>images/cam.png" class='logo'/>Upload photos from my phone or computer</label>

                                <ul class="files">

                                    <!-- <li><a href="#" target="_blank">sample.jpg</a><span class="remove"></span></li> -->

                                </ul>

                            </li>

                            <li>

                                <!-- <input type="file" name="options" id="computer-upload"> -->

                                <label for="fb-upload" id= "facebookUpload" class="upload-el"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png"/ class='logo'>Import from Facebook</label>

                            </li>

                            <li>

                                <!-- <input type="file" name="options" id="computer-upload"> -->

                                <label for="ig-upload" class="upload-el"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"/ class='logo'>Import from Instagram</label>

                            </li>

                        </ul>

                        <ul class="navigation">

                            <button type="button" class="back-btn">BACK</button>

                            <button type="button" id="initial-images-button" disabled>NEXT</button>

                        </ul>

                  </div>

                  

                  <div class="step-3 steps" style="display: none">

                        <h5>Step 3: Select your frame</h5>

                        <!--FRAMES SELECTION-->

                        <div class="frame-options-container">    

                            <ul class="frame-options">

                                <?php if (count($frames) > 0 ): ?>

                                    <?php $c = $ctwo = 1;?>

                                    <?php $i = 1; foreach ($frames as $key => $value): ?>

                                        <?php if ($c == 1) { ?>

                                        <li>

                                            <input type="radio" name="order_type" class="ord_type" id="frame-option<?php echo $c++?>" data-boundary="<?php echo $value->data_boundary;?>" data-percent-boundary="<?php echo $value->data_percentage_boundary;?>" value="<?php echo $value->frame_type;?>" class="frame" checked>

                                            <label for="frame-option<?php echo $ctwo++;?>"><img src="<?php echo $value->frame_image_f;?>" alt="frame-small"></label>

                                        </li>      

                                        <?php } else { ?>

                                        <li>

                                            <input type="radio" name="order_type" class="ord_type" id="frame-option<?php echo $c++?>" data-boundary="<?php echo $value->data_boundary;?>" data-percent-boundary="<?php echo $value->data_percentage_boundary;?>" value="<?php echo $value->frame_type;?>" class="frame">

                                            <label for="frame-option<?php echo $ctwo++;?>"><img src="<?php echo $value->frame_image_f;?>" alt="frame-small"></label>

                                        </li>

                                        <?php } ?>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                            </ul>

                            <div class="frame-result-name">bestseller</div>
                            <input type="hidden" name="order" id="ordertype" value="bestseller">

                        </div>

                        <!--EOF FRAME SELECTION-->



                        <!--PHOTOS SECTION-->

                        <div class="photos-section">

                            <ul class="container">

                                <li class="empty"></li>

                                

                            </ul>

                        </div>

                        <!--EOF PHOTO SECTION-->



                        <ul class="navigation">

                            <span class="check-crop-notif">Please make sure all images are cropped before proceeding</span>

                            <button type="button" class="reset-selection">BACK</button>

                            <button type="button" id="check-proceed">NEXT</button>

                        </ul>

                  </div>



                  <div class="step-4 steps" style="display: none">

                        <h5>Step 4: Checkout</h5>

                        <!-- <div id="for-me-form" class="forms">

                            <form action="getstarted/addOrder" method="POST" enctype="multipart/form-data" id="forme">

                                <div class="recipient">

                                    <h5>Recipient Details</h5>

                                    <ul class="form-list">

                                        <li>

                                            <label for="fm-recipient-name">Name<span>*</span></label>

                                            <input type="text" name="name" id="fm-recipient-name" required="required">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-email">Email Address<span>*</span></label>

                                            <input type="text" name="email" id="fm-recipient-email" required="required">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-address-1">Address 1 (House/Unit #, Street Name)<span>*</span></label>

                                            <input type="text" name="address_1" id="fm-recipient-address-1" required="required">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-address-2">Address 2 (Village or Building Name, Barangay)<span>*</span></label>

                                            <input type="text" name="address_2" id="fm-recipient-address-2" required="required">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-city">City<span>*</span></label>

                                            <input type="text" name="city" id="fm-recipient-city" required="required">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-state">State/Province<span>*</span></label>

                                            <input type="text" name="state_province" id="fm-recipient-state" required="required">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-postal">Postal Code</label>

                                            <input type="text" name="postal_code" id="fm-recipient-postal">

                                        </li>

                                        <li>

                                            <label for="fm-recipient-number">Contact Number<span>*</span></label>

                                            <input type="number" name="number" id="fm-recipient-number" required="required">

                                        </li>



                                        <input type="submit" name="">

                                    </ul>

                                </div>

                            </form>

                        </div> -->

                        <div id="special-someone-form" class="forms">

                            

                                <div class="sender">

                                    <h5>Sender Details</h5>

                                    <ul class="form-list">

                                        <li>

                                            <label for="ss-sender-name">Name<span>*</span></label>

                                            <input type="text" name="sender_name" id="ss-sender-name" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-sender-email">Email Address<span>*</span></label>

                                            <input type="text" name="sender_email" id="ss-sender-email" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-sender-number">Contact Number<span>*</span></label>

                                            <input type="number" name="sender_number" id="ss-sender-number" required="required">

                                        </li>

                                    </ul>

                                </div>

                                <div class="recipient">

                                    <h5>Recipient Details</h5>

                                    <ul class="form-list">

                                        <li>

                                            <label for="ss-recipient-name">Name<span>*</span></label>

                                            <input type="text" name="name" id="ss-recipient-name" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-email">Email Address<span>*</span></label>

                                            <input type="text" name="email" id="ss-recipient-email" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-address-1">Address 1 (House/Unit #, Street Name)<span>*</span></label>

                                            <input type="text" name="address_1" id="ss-recipient-address-1" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-address-2">Address 2 (Village or Building Name, Barangay)<span>*</span></label>

                                            <input type="text" name="address_2" id="ss-recipient-address-2" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-city">City<span>*</span></label>

                                            <input type="text" name="city" id="ss-recipient-city" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-state">State/Province<span>*</span></label>

                                            <input type="text" name="state_province" id="ss-recipient-state" required="required">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-postal">Postal Code</label>

                                            <input type="text" name="postal_code" id="ss-recipient-postal">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-number">Contact Number<span>*</span></label>

                                            <input type="number" name="number" id="ss-recipient-number" required="required">

                                        </li>

                                        <input type="submit" name="">

                                    </ul>

                                </div>

                        </div>

                        <ul class="navigation">
                            <span class="form-notif">Please check required fields(<b>*</b>)</span>

                            <button type="button" class="back-btn">BACK</button>

                            <span class="checkout-btn">CHECKOUT</span>

                        </ul>

                  </div>


                  <div class="step-5 steps" style="display: none">

                      <h5>Step 5: Order Summary</h5>

                      <!-- <div id="for-me-checkout" class="checkouts">

                        <div class="container">

                          <div class="left">

                              <h5>Recipient:</h5>

                              <p id="fm-name">Amara Chloe Sandoval</p>

                              <p id="fm-email">achloesand@gmail.com</p>

                              <p id="fm-address">Address 1, Address 2</p>

                              <p id="fm-city">City</p>

                              <p id="fm-contact">09172167246</p>

                          </div>

                          <div class="right">

                              <div class="top">

                                <ul class="photos-list-final">

                                  <li>

                                    <div class="photo-wrap-sm">

                                      <div class="frames">


                                        <img class="final-frame active-frame" src="./images/best-seller.png" data-frame-name="bestseller"/>

                                        <img class="final-frame" src="./images/midnight.png" data-frame-name="midnight"/>

                                        <img class="final-frame" src="./images/natural.png" data-frame-name="natural"/>

                                        <img class="final-frame" src="./images/snow.png" data-frame-name="snow"/>

                                        <img class="final-frame" src="./images/infinity.png" data-frame-name="infinity"/>

                                      </div>

                                      <img class="final-image" src="./images/sample-photo.png"/>

                                    </div>

                                  </li>

                                  <li>

                                    <div class="photo-wrap-sm">

                                      <div class="frames">


                                        <img class="final-frame active-frame" src="./images/best-seller.png" data-frame-name="bestseller"/>

                                        <img class="final-frame" src="./images/midnight.png" data-frame-name="midnight"/>

                                        <img class="final-frame" src="./images/natural.png" data-frame-name="natural"/>

                                        <img class="final-frame" src="./images/snow.png" data-frame-name="snow"/>

                                        <img class="final-frame" src="./images/infinity.png" data-frame-name="infinity"/>

                                      </div>

                                      <img class="final-image" src="./images/sample-photo.png"/>

                                    </div>

                                  </li>

                                  <li>

                                    <div class="photo-wrap-sm">

                                      <div class="frames">

                                        <img class="final-frame active-frame" src="./images/best-seller.png" data-frame-name="bestseller"/>

                                        <img class="final-frame" src="./images/midnight.png" data-frame-name="midnight"/>

                                        <img class="final-frame" src="./images/natural.png" data-frame-name="natural"/>

                                        <img class="final-frame" src="./images/snow.png" data-frame-name="snow"/>

                                        <img class="final-frame" src="./images/infinity.png" data-frame-name="infinity"/>

                                      </div>

                                      <img class="final-image" src="./images/sample-photo.png"/>

                                    </div>

                                  </li>

                                  <li>

                                    <div class="photo-wrap-sm">

                                      <div class="frames">


                                        <img class="final-frame active-frame" src="./images/best-seller.png" data-frame-name="bestseller"/>

                                        <img class="final-frame" src="./images/midnight.png" data-frame-name="midnight"/>

                                        <img class="final-frame" src="./images/natural.png" data-frame-name="natural"/>

                                        <img class="final-frame" src="./images/snow.png" data-frame-name="snow"/>

                                        <img class="final-frame" src="./images/infinity.png" data-frame-name="infinity"/>

                                      </div>

                                      <img class="final-image" src="./images/sample-photo.png"/>

                                    </div>

                                  </li>

                                </ul>

                                <ul class="costs">

                                    <li><label>Set of 3 Frames (<span class="frame-result-name">Best Seller</span>)</label><span class="value">P1,800.00</span></li>

                                    <li><label>Additional Frame</label><span class="quantity">x1</span><span class="value">P450.00</span></li>

                                </ul>

                              </div>

                              <div class="total">

                                  <label>Total</label>

                                  <span class="value-total">P2,250.00</span>

                              </div>

                          </div>

                          <ul class="navigation">

                              <div class="iagree-sec">

                                <div class="iagree-wrap">

                                  <input type="checkbox" name="agree-place-order" id="agreeforme"><label for="agreeforme">I agree to the <a href="#">terms and conditions</a> by Cuadro Corporation.</label>

                                </div>

                              </div>

                              <button class="back-btn">BACK</button>

                              <button class="place-order-btn" id="forme-placeorder" disabled>PLACE ORDER</button>

                          </ul>

                        </div>

                      </div> -->

                      <div id="special-someone-checkout" class="checkouts">

                        <div class="container">

                            <div class="left">

                                <div class="sender">

                                    <h5>Sender:</h5>

                                    <p id="fs-name">Sender Name</p>

                                    <p id="fs-email">Sender Email</p>

                                    <p id="fs-contact">Sender Contact Number</p>

                                </div>

                                <div class="recipient">

                                    <h5>Recipient:</h5>

                                    <p id="fs-rname">Recipient Name</p>

                                    <p id="fs-remail">Recipient Email</p>

                                    <p id="fs-raddress">Address 1, Address 2</p>

                                    <p id="fs-rcity">City</p>

                                    <p id="fs-rcontact">Recipient Contact Number</p>

                                </div>

                            </div>

                            <div class="right">

                              <div class="top">

                                <ul class="photos-list-final">

                                </ul>

                                <ul class="costs">

                                    <?php if (count($rates) > 0 ): ?>

                                    <?php $i = 1; foreach ($rates as $key => $value): ?>

                                    <li><label>Set of 3 Frames (<span class="frame-result-name">Best Seller</span>)</label><span class="value">P <?php echo number_format($value->base_rate, 2);?></span></li>
                                    <input type="hidden" value="<?php echo $value->base_rate;?>" id="base">

                                    <li id="greater3"><label>Additional Frame</label><span class="quantity">x1</span><span class="value">P <?php echo number_format($value->additional_rate_per_frame, 2);?></span></li>
                                    <input type="hidden" value="<?php echo $value->additional_rate_per_frame;?>" id="perframe">

                                <?php endforeach ;?>

                            <?php endif;?>

                                </ul>

                              </div>

                                <div class="total">

                                    <label>Total</label>

                                    <span class="value-total">P2,250.00</span>

                                </div>

                            </div>

                            <ul class="navigation">

                                <div class="iagree-sec">

                                  <div class="iagree-wrap">

                                    <input type="checkbox" id="agreespecial"><label for="agreespecial">I agree to the <a href="<?php echo base_url('PrivacyPolicy'); ?>">terms and conditions</a> by Cuadro Corporation.</label>

                                  </div>

                                </div>

                                <button type="button" class="checkout-clear">BACK</button>

                                <button class="place-order-btn" id="special-placeorder" disabled>PLACE ORDER</button>

                            </ul>

                            <ul class="hidden-inputs">
                            <!--INSERTS HIDDEN INPUT FIELDS HERE-->
                            </ul>

                          </div>

                      </div>

                  </div>

                  </form>

                  <!-- <div class="step-6 steps" style="display: none">

                        <h1>Thank You!</h1>

                        <p>We've now recieved your order, please wait as we process it.</p>

                        <a href="./index.html" class="return-home-btn">RETURN</a>

                  </div> -->

              </div>

          </div>

      </section>



      <!--CROPPER ELEMENT-->

      <section class="cropper-popup">

        <div class="container">

          <div class="lbox">

            <h5>Adjust your image</h5>

            <div id="maincropper"></div>

            <div class="buttons-container">

              <button id="back-crop">BACK</button>

              <button id="done-crop">APPLY</button>

            </div>

          </div>

        </div>

      </section>

      <script src="<?php echo base_url('public/frontend/'); ?>js/jquery-3.6.0.min.js"></script>

        <script src="<?php echo base_url('public/frontend/'); ?>js/slick.min.js"></script>  
        <script type="text/javascript" src="https://api.filestackapi.com/filestack.js"></script>
  
        <script type="text/javascript">
          $('.ord_type').each(function(){
            $(this).click(function(){
                $('#ordertype').val( $(this).val() );
            });
          });

            filepicker.setKey("AfLddltxlRFyI7PzHfgR4z");
            
            document.getElementById('facebookUpload').onclick = function(){

                filepicker.pick(
                {
                    mimetype: 'image/*',
                    services: ['COMPUTER','FACEBOOK','INSTAGRAM'],
                    maxFiles: 100
                },
                function(Blob){
                    console.log(JSON.stringify(Blob));
                }
                );
            }; 

             $('.checkout-btn').click(function(){
                var countimages = $('.photo-pane').length;
                if (countimages > 3){
                    $('.quantity').text( "x" + countimages);
                    var base = Number($('#base').val());
                    var perframe = Number($('#perframe').val()) * countimages;
                    var total = base + perframe;
                    var format = parseFloat(total);
                    $('.value-total').text( "P " + format.toFixed(2));
                }else{
                    $('#greater3').hide();
                    $('.value-total').text("P" + parseFloat($('#base').val().toFixed(2)));
                };
             });

      </script>

      <script src="<?php echo base_url('public/frontend/'); ?>js/croppie.js"></script>

        <!--NATH GET STARTED CODE-->
        <script type="text/javascript">
        $(document).ready(function(){
        if(window.location.pathname.indexOf('get-started') > 0 && $("footer").length) {
            $('footer').css('display', 'none')
        }
        //click step 1
        $('.pick-options li').click(function(){
            if(!$(this).hasClass('active')){
                $('.pick-options li').removeClass('active');
                $(this).addClass('active');
            }
        })
        //picking for me or someone else
        // $("input[name='options']").change(function(){
        //     if($(this).val() === 'for-me') {
        //         //enable only for me sections
        //         $("#special-someone-form").removeClass('active-form');
        //         $("#special-someone-checkout").removeClass('active-checkout');
        //         $("#for-me-form").addClass('active-form');
        //         $("#for-me-checkout").addClass('active-checkout');

        //     }else if ($(this).val() === 'special-someone') {
        //         //enable only special someone sections
        //         $("#for-me-form").removeClass('active-form');
        //         $("#for-me-checkout").removeClass('active-checkout');
        //         $("#special-someone-form").addClass('active-form');
        //         $("#special-someone-checkout").addClass('active-checkout');
        //     }
        //     //enable button
        //     if($(this).val() !== "" && $(".step-1 .navigation .next-btn").is(':disabled')) {
        //         $(".step-1 .navigation .next-btn").prop('disabled', false);
        //     }
        // });
        // 
        
        $("input[name='options']").change(function(){
    if($(this).val() === 'for-me') {
        //enable only for me sections
        // $("#special-someone-form").removeClass('active-form');
        // $("#special-someone-checkout").removeClass('active-checkout');
        // $("#for-me-form").addClass('active-form');
        // $("#for-me-checkout").addClass('active-checkout');
        $("#for-me-form").removeClass('active-form');
        $("#for-me-checkout").removeClass('active-checkout');
        $("#special-someone-form").addClass('active-form');
        $("#special-someone-checkout").addClass('active-checkout');
        $('.sender').hide();
        $('.sender input[type=text]').prop('disabled', true);
        $('.sender input[type=number]').prop('disabled', true);

    }else if ($(this).val() === 'special-someone') {
        //enable only special someone sections
        $('.sender').show();
        $('.sender input[type=text]').prop('disabled', false);
        $('.sender input[type=number]').prop('disabled', false);
        $("#for-me-form").removeClass('active-form');
        $("#for-me-checkout").removeClass('active-checkout');
        $("#special-someone-form").addClass('active-form');
        $("#special-someone-checkout").addClass('active-checkout');
    }
    //enable button
    if($(this).val() !== "" && $(".step-1 .navigation .next-btn").is(':disabled')) {
        $(".step-1 .navigation .next-btn").prop('disabled', false);
    }
});

        //navigation for steps
        var stepchange = false;
        var steps = $(".steps");
        var current = 0;
        $(".navigation .next-btn").click(function(){
            if(current < steps.length && !stepchange){
                stepchange = true;
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    ++current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;
                })
            }
        });
        $(".navigation .back-btn").click(function(){
            if(current > 0 && !stepchange){
                stepchange = true;
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    --current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;
                })
            }
        });

        //STEP 3 CHECK IF CROPPED
        $("#check-proceed").click(function(){
            if(current > 0 && !stepchange){
                if ($('.not-cropped').length <= 0) {
                    stepchange = true;
                    $(steps[current]).fadeOut(200,function(){
                        $(steps[current]).removeClass('active-step');
                        ++current;
                        $(steps[current]).fadeIn(200);
                        $(steps[current]).addClass('active-step');
                        stepchange = false;
                    })
                }else {
                    $(".check-crop-notif").fadeIn(200, function(){
                        setTimeout(function(){$(".check-crop-notif").fadeOut(200)}, 4000)
                    })
                }
            }
        });

        
        //STEP 3 BACK (REMOVES SELECTION)
        $(".reset-selection").click(function(){
            if(current > 0 && !stepchange){
                stepchange = true;
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    --current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;
                    
                    var emptyel = `<li class="empty"></li>`;
                    //clear slides
                    for (var i = 0; i <= $('.photos-section .slick-slide').length; i++) {
                        $('.step-3 .photos-section .container').slick('slickRemove', null, null, true);
                    }
                    //add empty
                    $(".step-3 .photos-section .container").slick('slickAdd', emptyel);

                    //clear input file
                    $("#computer-upload").val('');

                    //clear files
                    $(".get-started .wrap .step-2 ul.upload-options > li ul.files").empty();
                    
                    //clear array
                    filesUploaded = [];
                })
            }
            
        })

        //CHECKOUT BTN
        $(".checkout-btn").click(function(){
            if(current < steps.length && !stepchange){
                var checkinputs = true;
                if ($("input[name='options']:checked").val() === "for-me") {
                    $(".step-4 .forms .recipient ul.form-list li input:required").each(function(){
                        if ($(this).val() === '') {
                            checkinputs = false;
                        }
                    });
                }else if ($("input[name='options']:checked").val() === "special-someone") {
                    $(".step-4 .forms ul.form-list li input:required").each(function(){
                        if ($(this).val() === '') {
                            checkinputs = false;
                        }
                    });
                }
                if (checkinputs) {
                    //initialize checkout list images and hidden inputs
                    $(filesUploaded).each(function(){
                        checkoutImagesList($(this));
                    });

                    //set frame
                    $(".final-frame.active-frame").removeClass('active-frame');
                    $('.final-frame').each(function(){
                        if($(this).data('frame-name') === $('input[name="order_type"]:checked').val()){
                            $(this).addClass('active-frame');
                        }
                    })

                    stepchange = true;
                    $(steps[current]).fadeOut(200,function(){
                        $(steps[current]).removeClass('active-step');
                        ++current;
                        $(steps[current]).fadeIn(200);
                        $(steps[current]).addClass('active-step');
                        stepchange = false;
                    })
                }else {
                    $(".form-notif").fadeIn(200, function(){
                        setTimeout(function(){$(".form-notif").fadeOut(200)}, 4000)
                    })
                }
            }
        });

        //clears images and input hidden in checkout step
        $('.checkout-clear').click(function(){

            if(current > 0 && !stepchange){
                stepchange = true;
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    --current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;

                    //empty current checkout items
                    $('.photos-list-final').empty();
                    $('.hidden-inputs').empty();
                })
            }
        })

        //PLACE ORDER BTN shows thank you
        $(".place-order-btn").click(function(){
            $(".heading-text").fadeOut(200);
            if(current < steps.length && !stepchange){
                stepchange = true;
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    ++current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;
                })
            }
        })

        function blob2base(blob){
            var reader = new FileReader();
            reader.readAsDataURL(blob); 
            reader.onloadend = function() {
                var base64data = reader.result;                
                return base64data;
            }
        }

        //file upload step 2
        //use [0] when accessing properties
        var filesUploaded = [];

        var filechanged = 0;

        $("#computer-upload").change(function(){
            var $files = $('#computer-upload')[0];
            //creates file element
            for (var i = 0; i < $files.files.length; i++) {
                // var temp = blob2base(URL.createObjectURL($files.files.item(i)));

                createFileElement($files.files.item(i));
                filesUploaded.push({name: $files.files.item(i).name, src: URL.createObjectURL($files.files.item(i))});
            }

            
            //adds remove file uploaded event
            $(".files .remove").each(function(){
                if(!$(this).hasClass('has-event')) {
                    
                    //remove file function
                    $(this).click(function(){
                        $(this).closest('li').remove();
                        //checks if empty, disable next button
                        if($('.files li').length <= 0) {
                            $("#initial-images-button").prop('disabled', true);
                        }

                        //remove stored file
                        for (var i = 0; i <= filesUploaded.length; i++) {
                            if (filesUploaded[i].name === $(this).prev().text()) {
                                filesUploaded.splice(i, 1);
                            }
                        }
                    });

                    $(this).addClass('has-event');
                }
            });

            //enable next button
            if($('.files li').length > 0) {
                $("#initial-images-button").prop('disabled', false);
            }
        });

        //CREATE FILE ELEMENT STEP 2
        function createFileElement(file) {
            var toappend = '<li><a href="#" target="_blank">'+ file.name +'</a><span class="remove"></span></li>';
            $(".step-2 .files").append(toappend);
            return;
        }   


        //FRAMES SELECTION
        //boundary
        var frameboundary = $("input[name='order_type']").data('boundary');
        var framepercent = $("input[name='order_type']").data('percent-boundary') + '%';
        $('.photo-wrap-big').css('padding', frameboundary);
        $('.photo-wrap-sm').css('padding', framepercent);

        $("input[name='order_type']").change(function(){
            $framesel = $(this);
            //sets name of frame
            $('.frame-result-name').html($(this).val());

            //set frame for big frame
            $('.frames-container .frame-above.active-frame').removeClass('active-frame');
            $('.frames-container .frame-above').each(function(){
                if($(this).data('frame-name') === $framesel.val().toLowerCase() && !$(this).hasClass('active-frame')){
                    $(this).addClass('active-frame');
                }
            });
            //setframe for sm frame
            $('.final-frame').removeClass('active-frame');
            $('.final-frame').each(function(){
                if($(this).data('frame-name') === $framesel.val().toLowerCase() && !$(this).hasClass('active-frame')){
                    $(this).addClass('active-frame');
                }
            });


            //adds boundary
            frameboundary = $(this).data('boundary');
            framepercent = $(this).data('percent-boundary') + '%';
            $('.photo-wrap-big').css('padding', frameboundary);
            $('.photo-wrap-sm').css('padding', framepercent);
        });


        //STEP 3 SLIDER OPTIONS
        var photoSlider = {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            variableWidth: true,
            swipe: true,
            responsive : [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true
                    }
                }
            ]
        }

        //STEP 3 SLIDER INIT
        var isSliding = false;
        $(".step-3 .photos-section .container").slick(photoSlider);
        $(".step-3 .photos-section .container").on('beforeChange', function(){isSliding = true});
        $(".step-3 .photos-section .container").on('afterChange', function(){isSliding = false});

        //STEP 3 ADDING NEW PANES
        $(document).on('click', ".add-new-single", function(){
            createPaneElement();

            // if($('.remove-photo-btn').hasClass('disabled')) {
            //     $('.remove-photo-btn').removeClass('disabled');
            // }
        });

        var elCounter = 0
        //STEP 3 CREATE NEW PANE ELELEMNT
        function createPaneElement () {
            //counter for ids
            var paneElement = `<li class="single-container">
                                <!--UPLOAD-->
                                <div class="upload-pane">
                                    <ul class="inner-upload-options">
                                        <!--INCREMENT COUNTER PER PHOTO SECTION-->
                                        <li><input type="file" accept="image/*" name="order_images[]" id="photo-cp-upload-`+elCounter+`" class="single-input-file">
                                            <label for="photo-cp-upload-`+elCounter+`" class="upload-pc"><img src="<?php echo base_url('public/frontend/'); ?>images/cam.png" class="logo" alt="camera">Upload photos from my phone or computer</label>
                                        </li>
                                        <li><button type="button" class="upload-fb"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png" class="logo" alt="camera">Import from Facebook</button></li>
                                        <li><button type="button" class="upload-ig"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"  class="logo"alt="camera">Import from Instagram</button></li>
                                    </ul>
                                    <ul class="photo-options">
                                        <li><button type="button" class="remove-photo-btn">Remove</button></li>
                                    </ul>
                                </div>
                                <!--IF HAS UPLOADED SHOW THIS-->
                                <div class="photo-pane" data-name="">
                                    <div class="result-photo">
                                        <!--ORIGINAL UPLOADED PHOTO FOR CROPPER HIDDEN-->
                                        <img src="./images/sample.jpg" alt="orginal photo" class="pic-original">
                                        <!--RESULT PHOTO FROM CROP-->
                                        <div class="photo-wrap-big" style="padding: `+frameboundary+`px">
                                        <img src="./images/sample.jpg" alt="pic to use" class="pic-used">
                                        </div>
                                        <!--FRAMES-->
                                        <div class="frames-container">
                                        <?php if (count($frames) > 0 ): ?>

                                        <?php $c = 1;?>

                                        <?php $i = 1; foreach ($frames as $key => $value): ?>

                                            <?php if ( $c == 1 ) { ?>

                                                <img src="<?php echo $value->frame_image_f;?>" alt="frame to use" data-frame-name="<?php echo $value->frame_type;?>" class="frame-above active-frame">

                                                <?php $c++ ;?>

                                            <?php } else { ?>

                                                <img src="<?php echo $value->frame_image_f;?>" alt="frame to use" data-frame-name="<?php echo $value->frame_type;?>" class="frame-above">

                                                <?php $c++ ;?>

                                            <?php } ?>

                                        <?php endforeach; ?>

                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <ul class="photo-options">
                                        <li><button type="button" class="adjust-crop-btn">Adjust Crop</button></li>
                                        <li><button type="button" class="remove-photo-btn">Remove</button></li>
                                    </ul>
                                </div>
                            </li>`;
            

            //if not sliding add the element
            if(!isSliding) {
                var addindex = 0
                if($(".single-container").length){
                    addindex = $(".single-container").length;
                }else{
                    addindex = 0}
                $(".step-3 .photos-section .container").slick('slickAdd', paneElement, addindex);
            }
            ++elCounter;
        }

        //STEP 2 INITIALIZE UPLOADED
        function initializeUploads (file) {
            //crop on initial
            var usesrc = file[0].src;

            var paneElement = `<li class="single-container result not-cropped">
            <!--UPLOAD-->
            <div class="upload-pane">
                <ul class="inner-upload-options">
                    <!--INCREMENT COUNTER PER PHOTO SECTION-->
                    <li><input type="file" accept="image/*" name="order_images[]" id="photo-cp-upload-`+elCounter+`" class="single-input-file">
                        <label for="photo-cp-upload-`+elCounter+`" class="upload-pc"><img src="./images/cam.png" class="logo" alt="camera">Upload photos from my phone or computer</label>
                    </li>
                    <li><button type="button" class="upload-fb"><img src="./images/fb.png" class="logo" alt="camera">Import from Facebook</button></li>
                    <li><button type="button" class="upload-ig"><img src="./images/ig.png"  class="logo"alt="camera">Import from Instagram</button></li>
                </ul>
                <ul class="photo-options">
                    <li><button type="button" class="remove-photo-btn">Remove</button></li>
                </ul>
            </div>
            <!--IF HAS UPLOADED SHOW THIS-->
            <div class="photo-pane" data-name="`+file[0].name+`">
                <div class="result-photo">
                    <!--ORIGINAL UPLOADED PHOTO FOR CROPPER HIDDEN-->
                    <img src="`+usesrc+`" alt="orginal photo" class="pic-original">
                    <!--RESULT PHOTO FROM CROP-->
                    <div class="photo-wrap-big" style="padding: `+frameboundary+`px">
                    <img src="`+usesrc+`" alt="pic to use" class="pic-used">
                    </div>
                    <!--FRAMES-->
                    <div class="frames-container">
                    <?php if (count($frames) > 0 ): ?>

                    <?php $c = 1;?>

                    <?php $i = 1; foreach ($frames as $key => $value): ?>

                        <?php if ( $c == 1 ) { ?>

                            <img src="<?php echo $value->frame_image_f;?>" alt="frame to use" data-frame-name="<?php echo $value->frame_type;?>" class="frame-above active-frame">

                            <?php $c++ ;?>

                        <?php } else { ?>

                            <img src="<?php echo $value->frame_image_f;?>" alt="frame to use" data-frame-name="<?php echo $value->frame_type;?>" class="frame-above">

                            <?php $c++ ;?>

                        <?php } ?>

                    <?php endforeach; ?>

                    <?php endif; ?>
                    </div>
                </div>
                <ul class="photo-options">
                    <li><button type="button" class="adjust-crop-btn">Adjust Crop</button></li>
                    <li><button type="button" class="remove-photo-btn">Remove</button></li>
                </ul>
            </div>
        </li>`;

            var addindex = 0
            if($(".single-container").length){
                addindex = $(".single-container").length;
            }else{
                addindex = 0}
            $(".step-3 .photos-section .container").slick('slickAdd', paneElement, addindex);
            
            ++elCounter;
        }

        //checkout images adding
        function checkoutImagesList(file) {
            console.log(file);
            var element = `<li>
                                <div class="photo-wrap-sm" style="padding: `+framepercent+`">
                                <div class="frames">
                                    <?php if (count($frames) > 0 ): ?>
                                        <?php $i = 1; foreach ($frames as $key => $value): ?>
                                            <?php if ($i == 1) { ?>
                                            <img class="final-frame active-frame" src="<?php echo $value->frame_image_f;?>" data-frame-name="<?php echo $value->frame_type;?>"/>
                                            <?php $i++;?>
                                            <?php } else { ?>
                                            <img class="final-frame" src="<?php echo $value->frame_image_f;?>" data-frame-name="<?php echo $value->frame_type;?>"/>
                                            <?php $i++;?>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <img class="final-image" src=`+file[0].src+`>
                                </div>
                            </li>`;
            //input element
            var inputelement = `<li><input type="hidden" name="cropped_images[]" value=`+file[0].src+`></li>`

            //append UI
            $(".photos-list-final").append(element);
            //append INPUT
            $(".hidden-inputs").append(inputelement);

        }


        //CREATES PANES PER FILE UPLOADED ON STEP 2
        var initIndex = 0;
        var addElement = `<li class="add-new-single">
                            <div class="empty-pane">
                                <span class="add-logo"></span>
                                ADD PHOTO
                            </div>
                        </li>`;

        // function initialCrop () {
        //     return new Promise (function(resolve) {
        //         setTimeout(function(){
        //             resolve('passed')
        //         }, 2000);
        //     });
        // }

        $("#initial-images-button").click(function(){
            if(current < steps.length && !stepchange){
                //initialize elements
                $(filesUploaded).each(function(){
                    initializeUploads($(this));
                });

                // $(filesUploaded).each(async function() {
                //     const status = await initialCrop();
                //     console.log(status);
                // })

                $(".step-3 .photos-section .container").slick('slickAdd', addElement, $(".single-container").length);
                // $(".step-3 .photos-section .container").slick('slickRemove', 0);
                ++initIndex;

                stepchange = true;
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    ++current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;
                })
            }
        });

        //events per pane

        //STEP 3  ADD SINGLE EVENT
        $(document).on('change', ".single-input-file", function(){
            $image = $(this).closest('.single-container').find('.pic-original');
            $image2 = $(this).closest('.single-container').find('.pic-used');
            $index = $(this).closest('.single-container').index() - 1;
            
            //sets uploaded image as image inside
            var url = URL.createObjectURL($('.single-input-file')[$index].files[0]);
            $image.attr('src', url);
            $image2.attr('src', url);

            //sets data name and adds to filesuploaded array
            filesUploaded.push({name: $('.single-input-file')[$index].files[0].name, src: url});
            // $(this).closest('.single-container').find('.photo-pane').data('name', $('.single-input-file')[$index].files[0].name);
            $(this).closest('.single-container').find('.photo-pane').attr('data-name', $('.single-input-file')[$index].files[0].name)

            //shows result
            $(this).closest('.single-container').addClass('result');
            $(this).closest('.single-container').addClass('not-cropped');
        });

        //STEP 3 REMOVE SINGLE EVENT
        $(document).on('click', '.remove-photo-btn', function(){
            if ($('.photos-section .single-container').length >0){
                $removeIndex = $(this).closest('.single-container').index();
                $('.step-3 .photos-section .container').slick('slickRemove', $removeIndex);

                //remove from array
                for(var i = 0; i <= filesUploaded.length; i++) {
                    if(filesUploaded[i].name === $(this).closest('.photo-pane').data('name')) {
                        filesUploaded.splice(i, 1);
                        return;
                    }
                }
            }
            //adds disabled
            // if($('.photos-section .single-container').length <= 1){
            //     $(".remove-photo-btn").addClass('disabled');
            // }
        });


        //STEP 5 I agree
        //forme
        $("#agreeforme").change(function(){
            if($(this).prop('checked') === true) {
                $("#forme-placeorder").prop('disabled', false);
            }else {
                $("#forme-placeorder").prop('disabled', true);
            }
        });
        //special someone
        $("#agreespecial").change(function(){
            if($(this).prop('checked') === true) {
                $("#special-placeorder").prop('disabled', false);
            }else {
                $("#special-placeorder").prop('disabled', true);
            }
        })


        //CROPPER STUFF HERE
        //CROPPER INITIALIZE
        $("#maincropper").croppie({
            viewport: {
                width: 240,
                height: 240,
                showZoomer: true,
                url: "http://lorempixel.com/500/400/",
            },
            boundary: { width: 300, height: 300}
        });
        
        //adjust crop button
        var cropindex = 0;
        $(document).on('click', '.adjust-crop-btn', function(){
            cropindex = $(this).closest('.single-container').index();
            var $image = $(this).closest('.photo-pane').find('.pic-original');

            //UPDATE CROPPER TO CROP IMAGE
            $("#maincropper").croppie("bind", {
                url: $image.attr('src')
            });
            $(".cropper-popup").fadeIn(200);
        });

        //CROPPER GET RESULT
        $("#done-crop").click(function(){
            var passcropped = $($('.single-container')[cropindex-1]).find('.pic-used');

            $("#maincropper").croppie('result', {
                type: 'canvas',
                size: 'viewport',
            }).then(function(resp) {
                $(passcropped).attr('src', resp)

                //update files uploaded src after cropping
                filesUploaded[cropindex-1].src = resp;
                $($('.single-container')[cropindex-1]).removeClass('not-cropped');
                    
            });
            $(".cropper-popup").fadeOut(200);

        });

        //HIDE CROPPER
        $("#back-crop").click(function(){
            $(".cropper-popup").fadeOut(200);
        })
        })
        </script>