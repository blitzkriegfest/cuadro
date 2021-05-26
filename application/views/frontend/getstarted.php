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

                                <label for="special-someone">For Someone Special</label>

                            </li>

                        </ul>

                        <ul class="navigation">

                            <button type="button" class="next-btn" disabled>NEXT</button>

                        </ul>

                  </div>



                  <form action="<?php echo base_url('getStarted/addOrder'); ?>" method="POST" enctype="multipart/form-data" id="ordetails" autocomplete="off">

                  <div class="step-2 steps" style="display: none">

                        <h5>Step 2: Select your photos (min&nbsp;of&nbsp;3)</h5>

                        <p>Please upload high resolution photos<br/>Suggested size: 499 x 499 pixels</p>

                        <ul class="upload-options">

                            <li>

                                <input type="file" name="order_images[]" id="computer-upload" multiple accept="image/jpeg, image/png">

                                <label for="computer-upload" class="upload-el"><img src="<?php echo base_url('public/frontend/'); ?>images/cam.png" class='logo'/>Upload photos from my phone or computer</label>

                            </li>

                            <li>

                                <!-- <input type="file" name="options" id="computer-upload"> -->

                                <label for="fb-upload" class="upload-el fbook"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png"/ class='logo'>Import from Facebook</label>

                            </li>

                            <li>

                                <!-- <input type="file" name="options" id="computer-upload"> -->

                                <label for="ig-upload" class="upload-el instag"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"/ class='logo'>Import from Instagram</label>

                            </li>

                        </ul>
                        
                        <ul class="files">

                        <!-- <li><a href="#" target="_blank">sample.jpg</a><span class="remove"></span></li> -->

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

                            <span class="check-crop-notif">Please upload minimum of 3.</span>

                            <button type="button" class="reset-selection">BACK</button>

                            <button type="button" id="check-proceed">NEXT</button>

                        </ul>

                  </div>



                  <div class="step-4 steps" style="display: none">

                        <h5>Step 4: Checkout</h5>

                        <div id="special-someone-form" class="forms">

                            

                                <div class="sender">

                                    <h5>Sender Details</h5>

                                    <ul class="form-list">

                                        <li>

                                            <label for="ss-sender-name">Name<span>*</span></label>

                                            <input type="text" name="sender_name" id="ss-sender-name" required="required"  autocomplete="off">

                                        </li>

                                        <li>
                                            <span class="email-notif">Not a valid email.</span>
                                            
                                            <label for="ss-sender-email">Email Address<span>*</span></label>

                                            <input type="text" name="sender_email" id="ss-sender-email" required="required"  autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-sender-number">Contact Number<span>*</span></label>

                                            <input type="number" name="sender_number" id="ss-sender-number" required="required"  autocomplete="off">

                                        </li>

                                    </ul>

                                </div>

                                <div class="recipient">

                                    <h5>Recipient Details</h5>

                                    <ul class="form-list">

                                        <li>

                                            <label for="ss-recipient-name">Name<span>*</span></label>

                                            <input type="text" name="name" id="ss-recipient-name" required="required" autocomplete="off">

                                        </li>

                                        <li>
                                            <span class="email-notif">Not a valid email.</span>

                                            <label for="ss-recipient-email">Email Address<span>*</span></label>

                                            <input type="text" name="email" id="ss-recipient-email" required="required" autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-address-1">Address 1 (House/Unit #, Street Name)<span>*</span></label>

                                            <input type="text" name="address_1" id="ss-recipient-address-1" required="required" autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-address-2">Address 2 (Village or Building Name, Barangay)<span>*</span></label>

                                            <input type="text" name="address_2" id="ss-recipient-address-2" required="required" autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-city">City<span>*</span></label>

                                            <input type="text" name="city" id="ss-recipient-city" required="required" autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-state">State/Province<span>*</span></label>

                                            <input type="text" name="state_province" id="ss-recipient-state" required="required" autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-postal">Postal Code</label>

                                            <input type="text" name="postal_code" id="ss-recipient-postal" autocomplete="off">

                                        </li>

                                        <li>

                                            <label for="ss-recipient-number">Contact Number<span>*</span></label>

                                            <input type="number" name="number" id="ss-recipient-number" required="required" autocomplete="off">

                                        </li>

                                    </ul>

                                </div>

                        </div>

                        <ul class="navigation">
                            <span class="form-notif">Please check required fields(<b>*</b>)</span>

                            <button type="button" class="back-btn">BACK</button>

                            <span class="checkout-btn" style="pointer-events: none;" >CHECKOUT</span>

                        </ul>

                  </div>


                  <div class="step-5 steps" style="display: none">

                      <h5>Step 5: Order Summary</h5>

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
                                    <p id="fs-rstateprovince">State/Province</p>
                                    <p id="fs-rpostalcode">Postal Code</p>

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

                                    <li><label>Set of 3 Frames (<span class="frame-result-name">Best Seller</span>)</label><span class="value">₱ <?php echo number_format($value->base_rate, 2);?></span></li>
                                    <li><label>Shipping Fee</label><span class="value">FREE-OF-CHARGE</span></li>
                                    <input type="hidden" value="<?php echo $value->base_rate;?>" id="base">

                                    <li id="greater3"><label>Additional Frame</label><span class="quantity">x1</span><span class="value adds">₱ <?php echo number_format($value->additional_rate_per_frame, 2);?></span></li>
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

                            <div class="iagree-sec">

                            <div class="iagree-wrap">

                                <input type="checkbox" id="agreespecial"><label for="agreespecial">I agree to the <a href="<?php echo base_url('TermsandConditions'); ?>" target="_blank">terms and conditions</a> of Cuadro.</label>

                            </div>

                            </div>

                            <ul class="navigation">

                                <button type="button" class="checkout-clear">BACK</button>

                                <button  type="button" class="place-order-btn" id="special-placeorder" disabled>PLACE ORDER</button>

                            </ul>

                            <ul class="hidden-inputs">
                            <!--INSERTS HIDDEN INPUT FIELDS HERE-->
                            </ul>

                          </div>

                      </div>

                  </div>

                  <div class="step-6 steps" style="display: none">

                        <h5>Please choose your payment method</h5>

                        <!-- <p>Please choose payment method to use.</p> -->

                        <ul class="payment_options">
                            <li class="item">
                                <input type="radio" name="payment_option" id="banktransfer" value="bank_transfer" class="mops" data-value="Bank Transfer" checked>
                                <label for="banktransfer">
                                    <img src="<?php echo base_url('public/frontend/'); ?>images/bank-transf-logo.png" class='logo'/>
                                    <p>Bank Transfer</p>
                                </label>
                            </li>
                            <li class="item">
                                <input type="radio" name="payment_option" id="gcash" value="gcash_transfer" class="mops" data-value="Gcash">
                                <label for="gcash">
                                    <img src="<?php echo base_url('public/frontend/'); ?>images/gcash-logo.png" class='logo'/>
                                    <p>Gcash</p>
                                </label>
                            </li>
                            <li class="item">
                                <input type="radio" name="payment_option" id="pesopay" value="peso_pay" class="mops" data-value="PesoPay" disabled>
                                <label for="pesopay">
                                    <img src="<?php echo base_url('public/frontend/'); ?>images/logo_pesopay.png" class='logo'/>
                                    <p>PesoPay<br/>(Coming soon)</p>
                                </label>
                            </li>
                        </ul>

                        <p class="note"><span class="imp">* </span>Cuadro will soon be accepting Credit Card payments. Please follow us on our <a href="https://www.facebook.com/cuadroframes" target="_blank">FB Page</a> for more updates.</p>

                        <div class="payment-method-heading">
                            <h4 id="bank-transfer-head" class="active" style="display:block" >Bank Transfer</h4>
                            <h4 id="gcash-head" >Gcash</h4>
                            <h4 id="pesopay-head">PesoPay</h4>
                            <input type="hidden" name="mode_of_payment" id="mop" value="Bank Transfer">
                        </div>
                            <div class="payment_content_wrap">
                                <div class="left">
                                    <div class="payment_content active" id="bank-transfer-content" style="display: block">
                                        <h5>Bank Account Details</h5>
                                        <ul class="details">
                                            <li><label>Amount to Pay: </label><p class="amounts">N/A</p></li>
                                            <li><label>Account Name: </label><p>CESAR III C MELLA</p></li>
                                            <li><label>Account Number: </label><p>002030231653</p></li>
                                            <li><label>Bank Name: </label><p>BDO</p></li>
                                            <li><label>Bank Branch: </label><p>Marcos Highway</p></li>
                                        </ul>
                                    </div>
                                    <div class="payment_content" id="gcash-content">
                                        <h5>Gcash Account Details</h5>
                                        <ul class="details">
                                        <li><label>Amount to Pay: </label><p class="amounts">N/A</p></li>
                                            <li><label>Account Name: </label><p>Katherine Mella</p></li>
                                            <li><label>Account Number: </label><p>09995851756</p></li>
                                        </ul>
                                    </div>
                                    <div class="payment_content" id="peso-pay-content">
                                        <!-- <h5>PesoPay</h5> -->
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="payment_submission">
                                        <div class="proof">
                                            <input type="file" id="payment_proof" name="proof_of_payment" accept="image/*">
                                            <label for="payment_proof">
                                                <img src="<?php echo base_url('public/frontend/'); ?>images/upload-logo.png" alt="upload-logo" class="logo">
                                                <h5>Upload Proof of Payment</h5>
                                                <span class="upload-result">No upload.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navigation">
                                <button type="button" class="back-btn">Back</button>
                                <button type="submit" class="submit-payment" disabled>Submit</button>
                            </div>
                            <div class="loading-wrap" style="display: none;">
                                <h1 id="process-heading">Uploading your Images</h1>
                                <p>Please do not refresh, back or close your browser during upload.</p>
                                <h2 id="upload-progress">0%</h2>
                                <!-- <img class="spinner" src="<?php echo base_url('public/frontend/'); ?>images/Spinner-1s-200px.gif" alt=""> -->
                            </div>
                  </div>

                  <!-- <div class="step-7 steps" style="display: none">
                  </div> -->

                </form>

              </div>

          </div>

      </section>

      <!--HIDDEN INNIT CROPPER-->
      <section class="init-cropper-hidden">
        <div id="init-cropper"></div>
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

      <script src="<?php echo base_url('public/frontend/'); ?>js/jquery.form.min.js"></script>

    <script src="<?php echo base_url('public/frontend/'); ?>js/slick.min.js"></script>  

    <script src="<?php echo base_url('public/frontend/'); ?>js/exif.js"></script>  

      <script src="<?php echo base_url('public/frontend/'); ?>js/croppie.js"></script>

    <script src="<?php echo base_url('public/frontend/'); ?>js/main.js"></script>

    <script src="<?php echo base_url('public/admin/js/custom/'); ?>getstarted_management.js"></script>

        <!--NATH GET STARTED CODE-->
        <script type="text/javascript">

        //GLOBAL VARIABLES
        var filesUploaded = [];
        var frameboundary = $("input[name='order_type']:checked").data('boundary');
        var framepercent = $("input[name='order_type']:checked").data('percent-boundary') + '%';


        $(document).ready(function(){
        //remove footer
        if (window.location.pathname === "/getStarted") {
            $('footer').css('display', 'none');
        }
        if(window.location.pathname.indexOf('get-started') > 0 && $("footer").length) {
            $('footer').css('display', 'none')
        }
        //click step 1
        $('.pick-options li').click(function(){
            if(!$(this).hasClass('active')){
                $('.pick-options li').removeClass('active');
                $(this).addClass('active');
            }
        });
        
        $("input[name='options']").change(function(){
            if($(this).val() === 'for-me') {
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
        var total = $('.photo-pane').length;
        $(".navigation .next-btn").click(function(){
            if(current < steps.length && !stepchange){
                stepchange = true;
                $("html, body").animate({ scrollTop: 0 }, 100);
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
                $("html, body").animate({ scrollTop: 0 }, 100);
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
                //TEMPORARILY DISABLED UNCROPPED SINCE ALL PICS ARE NOW CROPPED INITIALY
                if (filesUploaded.length >= 3) {
                    stepchange = true;
                $("html, body").animate({ scrollTop: 0 }, 100);
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
                $('.email-notif').css('display', 'none');
                $("html, body").animate({ scrollTop: 0 }, 100);
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
                    $(".step-2 ul.files").empty();
                    
                    //clear array
                    filesUploaded = [];
                })
            }
            
        })

        //CHECKOUT BTN
        function validateEmail(email) {
          const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }

        function validate() {
          const email = $("#ss-recipient-email").val();
          if ($('#for-me').is(':checked')){
              if (validateEmail(email)) {
                $('.email-notif').fadeOut(200);
                $( ".checkout-btn").css( {"pointer-events":"all", "opacity" : "1"} );
              } else {
                $('.email-notif').fadeIn(200);
                $( ".checkout-btn").css( {"pointer-events":"none", "opacity" : "0.7"} );
                
              }
          }
          return false;
        }
         $("#ss-recipient-email").on("keyup", validate);

         function validates() {
          const email = $(".recipient #ss-recipient-email").val();
          if ($('#special-someone').is(':checked')){
              if (validateEmail(email)) {
                $(".recipient #ss-recipient-email").closest('li').find('.email-notif').fadeOut(200);
                $( ".checkout-btn").css( {"pointer-events":"all"} );
              } else {
                $(".recipient #ss-recipient-email").closest('li').find('.email-notif').fadeIn(200);
                $( ".checkout-btn").css( {"pointer-events":"none"} );
              }
          }
          return false;
        }
         $(".recipient #ss-recipient-email").on("keyup", validates);

         function validatess() {
          const semail = $("#ss-sender-email").val();
          if ($('#special-someone').is(':checked')){
              if (validateEmail(semail)) {
                $("#ss-sender-email").closest('li').find('.email-notif').fadeOut(200);
                $( ".checkout-btn").css( {"pointer-events":"all"} );
              } else {
                $("#ss-sender-email").closest('li').find('.email-notif').fadeIn(200);
                $( ".checkout-btn").css( {"pointer-events":"none"} );
              }
          }
          return false;
        }
         $("#ss-sender-email").on("keyup", validatess);


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
                    $("html, body").animate({ scrollTop: 0 }, 100);
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

        //enables button
        $('.step-4 .forms ul.form-list li input').change(function(){
            
        })

        $("#ordetails").ajaxForm({
            beforeSend: function() {
                $("html, body").animate({ scrollTop: 0 }, 100);
                $(".loading-wrap").css('display', 'block');
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                if (percentComplete >= 100) {
                    $("#process-heading").html('Please Wait');
                    $("#upload-progress").html(percentVal);
                }else {
                    $("#upload-progress").html(percentVal);
                }
            },
            complete: function(xhr) {
                window.location.replace('thankyou');
            }
        });


        // $("#ordetails").submit(function(e){
        //     // $("html, body").animate({ scrollTop: 0 }, 100);
        //     // $(".loading-wrap").css('display', 'block');
        //     $("html, body").animate({ scrollTop: 0 }, 100);
        //     $(".loading-wrap").css('display', 'block');
        //     var form = this;
        //     e.preventDefault();

            
            // var bar = $('.bar');
            // var percent = $('.percent');
            // var status = $('#status');

            // $("#ordetails").ajaxForm({
            //     beforeSend: function() {
            //         console.log('before send')
            //         status.empty();
            //         var percentVal = '0%';
            //         bar.width(percentVal);
            //         percent.html(percentVal);
            //     },
            //     uploadProgress: function(event, position, total, percentComplete) {
            //         var percentVal = percentComplete + '%';
            //         bar.width(percentVal);
            //         percent.html(percentVal);
            //     },
            //     complete: function(xhr) {
            //         status.html(xhr.responseText);
            //     }
            // });
            
        //     setTimeout(function () {
        //         form.submit();
        //     }, 500); // in milliseconds
        // })

        $(".submit-payment").click(function(){
        });

        //clears images and input hidden in checkout step
        $('.checkout-clear').click(function(){

            if(current > 0 && !stepchange){
                stepchange = true;
                $("html, body").animate({ scrollTop: 0 }, 100);
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
                $("html, body").animate({ scrollTop: 0 }, 100);
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
        var filechanged = 0;

        $("#computer-upload").change(function(){
            var $files = $('#computer-upload')[0];
            //creates file element
            for (var i = 0; i < $files.files.length; i++) {
                // var temp = blob2base(URL.createObjectURL($files.files.item(i)));

                createFileElement($files.files.item(i));
                filesUploaded.push({name: $files.files.item(i).name, src: URL.createObjectURL($files.files.item(i))});
            }

            checkUploads();
        });

        //REMOVE FILE FROM UPLOADS
        $(document).on('click', '.files .remove', function(){
            //removes ui files element
            $(this).closest('li').remove();

            //remove stored file
            for (var i = 0; i <= filesUploaded.length; i++) {
                if (filesUploaded[i].name === $(this).prev().text()) {
                    filesUploaded.splice(i, 1);
                }
            }

            checkUploads();
        });

        //UPLOAD STATUS CHECKER
        function checkUploads () {
            if (filesUploaded.length > 0) {
                $("#initial-images-button").prop('disabled', false);
            }else {
                $("#initial-images-button").prop('disabled', true);
            }
        }

        //CREATE FILE ELEMENT STEP 2
        function createFileElement(file) {
            var toappend = '<li><a href="#" target="_blank">'+ file.name +'</a><span class="remove"></span></li>';
            $(".step-2 .files").append(toappend);
            return;
        }   


        //FRAMES SELECTION
        //boundary
        $('.photo-wrap-big').css('padding', frameboundary);
        $('.photo-wrap-sm').css('padding', framepercent);

        $("input[name='order_type']").change(function(){
            $framesel = $(this);
            //sets name of frame
            $('.frame-result-name').html($(this).val());

            //set frame for big frame
            $('.frames-container .frame-above.active-frame').removeClass('active-frame');
            $('.frames-container .frame-above').each(function(){
                console.log(String($(this).data('frame-name')).toLowerCase());
                if(String($(this).data('frame-name')).toLowerCase() === $framesel.val().toLowerCase() && !$(this).hasClass('active-frame')){
                    $(this).addClass('active-frame');
                }
            });
            //setframe for sm frame
            $('.final-frame').removeClass('active-frame');
            $('.final-frame').each(function(){
                if(String($(this).data('frame-name')).toLowerCase() === $framesel.val().toLowerCase() && !$(this).hasClass('active-frame')){
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
            arrows: true,
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

        //CROPPER STUFF HERE
        //INIT CROPPER
        $("#init-cropper").croppie({
            viewport: {
                width: 240,
                height: 240,
                type: 'square'
            },
            enableOrientation: true,
            // boundary: { width: 300, height: 300},
            enableZoom: false,
            enableExif: true
        });

        //CROPPER INITIALIZE
        $("#maincropper").croppie({
            viewport: {
                width: 240,
                height: 240,
                type: 'square'
            },
            boundary: { width: 300, height: 300},
            enableOrientation: true,
            showZoomer: true,
            enableExif: true
        });

        
        //adjust crop button
        var cropindex = 0;
        $(document).on('click', '.adjust-crop-btn', function(){
            cropindex = $(this).closest('.single-container').index();
            var $image = $(this).closest('.photo-pane').find('.pic-original');

            //UPDATE CROPPER TO CROP IMAGE
            $("#maincropper").croppie("bind", {
                url: $image.attr('src'),
                orientation: '1',
                setZoom: '0'
            });
            $(".cropper-popup").fadeIn(200);
        });

        //CROPPER GET RESULT
        $("#done-crop").click(function(){
            var passcropped = $($('.single-container')[cropindex-1]).find('.pic-used');

            $("#maincropper").croppie('result', {
                type: 'canvas',
                size: {width: 768, height: 768}
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
        });

        //STEP 3 ADDING NEW PANES
        $(document).on('click', ".add-new-single", function(){
            // createPaneElement();
            $(this).addClass('show-uploads');
        });

        var elCounter = 0

        //STEP 2 INITIALIZE CROP
        function initializeCrop (file, updateind) {
            var src = file[0].src;
            $("#init-cropper").croppie("bind", {
                url: src,
                orientation: '1',
                setZoom: '0'
            }).then(function(){
                $("#init-cropper").croppie("result", {
                    type: "canvas",
                    size: {width: 768, height: 768}
                }).then(function(resp){
                    // console.log(resp);
                    //update filesUploaded src to cropped
                    var newfile = {name: file[0].name, src: resp, original: file[0].src}
                    initializeUploads(newfile);
                    filesUploaded[updateind].src = resp;
                })
            })
        }

        //STEP 3 INITIALIZE CROP (file) 
        function initializeCropSingle (file) {
            var src = file.src;
            $("#init-cropper").croppie("bind", {
                url: src,
                orientation: '1',
                setZoom: '0'
            }).then(function(){
                $("#init-cropper").croppie("result", {
                    type: "canvas",
                    size: {width: 768, height: 768}
                }).then(function(resp){
                    var newfile = {name: file.name, src: resp, original: file.src}
                    //push to files uploaded
                    filesUploaded.push({name: file.name, src: resp});
                    singleInitialize(newfile);
                })
            })
        }

        //initialize upload single
        function singleInitialize (file) {
            //crop on initial
            // var usesrc = file[0].src;
            var paneElement = `<li class="single-container result not-cropped">
                <!--IF HAS UPLOADED SHOW THIS-->
                <div class="photo-pane" data-name="`+file.name+`">
                    <div class="result-photo">
                        <!--ORIGINAL UPLOADED PHOTO FOR CROPPER HIDDEN-->
                        <img src="`+file.original+`" alt="orginal photo" class="pic-original">
                        <!--RESULT PHOTO FROM CROP-->
                        <div class="photo-wrap-big" style="padding: `+frameboundary+`px">
                        <img src="`+file.src+`" alt="pic to use" class="pic-used">
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

            //UPDATE FRAME
            $('.frames-container .frame-above.active-frame').removeClass('active-frame');
            $('.frames-container .frame-above').each(function(){
                if(String($(this).data('frame-name')).toLowerCase() === $("input[name='order_type']:checked").val().toLowerCase() && !$(this).hasClass('active-frame')){
                    $(this).addClass('active-frame');
                }
            });

        }

        //STEP 2 INITIALIZE UPLOADED
        function initializeUploads (file) {
            //crop on initial
            // var usesrc = file[0].src;
            var paneElement = `<li class="single-container result not-cropped">
                <!--IF HAS UPLOADED SHOW THIS-->
                <div class="photo-pane" data-name="`+file.name+`">
                    <div class="result-photo">
                        <!--ORIGINAL UPLOADED PHOTO FOR CROPPER HIDDEN-->
                        <img src="`+file.original+`" alt="orginal photo" class="pic-original">
                        <!--RESULT PHOTO FROM CROP-->
                        <div class="photo-wrap-big" style="padding: `+frameboundary+`px">
                        <img src="`+file.src+`" alt="pic to use" class="pic-used">
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

            //UPDATE FRAME
            $('.frames-container .frame-above.active-frame').removeClass('active-frame');
            $('.frames-container .frame-above').each(function(){
                if(String($(this).data('frame-name')).toLowerCase() === $("input[name='order_type']:checked").val().toLowerCase() && !$(this).hasClass('active-frame')){
                    $(this).addClass('active-frame');
                }
            });

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
                            <!--UPLOAD-->
                            <div class="upload-pane">
                                <ul class="inner-upload-options">
                                    <!--INCREMENT COUNTER PER PHOTO SECTION-->
                                    <li><input type="file" accept="image/*" name="order_images[]" multiple id="photo-cp-upload-`+elCounter+`" class="single-input-file">
                                        <label for="photo-cp-upload-`+elCounter+`" class="upload-pc"><img src="<?php echo base_url('public/frontend/'); ?>images/cam.png" class="logo" alt="camera">Upload photos from my phone or computer</label>
                                    </li>
                                    <li><button type="button" class="upload-fb fbstacks"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png" class="logo" alt="camera">Import from Facebook</button></li>
                                    <li><button type="button" class="upload-ig igstacks"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"  class="logo"alt="camera">Import from Instagram</button></li>
                                </ul>
                            </div>
                            <div class="empty-pane">
                                <span class="add-logo"></span>
                                ADD PHOTO
                            </div>
                        </li>`;

        //finalize uploaded step 2
        $("#initial-images-button").click(function(){
            if(current < steps.length && !stepchange){
                //initialize elements
                $(filesUploaded).each(function(index){
                    initializeCrop($(this), index);
                    // initializeUploads($(this));
                });

                $(".step-3 .photos-section .container").slick('slickAdd', addElement, $(".single-container").length);
                // $(".step-3 .photos-section .container").slick('slickRemove', 0);
                ++initIndex;

                stepchange = true;
                $("html, body").animate({ scrollTop: 0 }, 100);
                $(steps[current]).fadeOut(200,function(){
                    $(steps[current]).removeClass('active-step');
                    ++current;
                    $(steps[current]).fadeIn(200);
                    $(steps[current]).addClass('active-step');
                    stepchange = false;
                });
                
                setTimeout(function(){console.log('triggered');
                    $('.photos-section .container').slick('slickGoTo', 1)}, 500);
            }
        });

        //events per pane

        //STEP 3  ADD SINGLE EVENT
        $(document).on('change', ".single-input-file", function(){
            
            var $files = $('.single-input-file')[0];
            //creates file element
            for (var i = 0; i < $files.files.length; i++) {
                // var temp = blob2base(URL.createObjectURL($files.files.item(i)));
                initializeCropSingle({name: $files.files.item(i).name, src: URL.createObjectURL($files.files.item(i))});
            }

            $('.single-input-file').val('');
            $('.add-new-single').removeClass('show-uploads');
            console.log('pass');
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
        });




        //RY CODE
        $('.ord_type').each(function(){
            $(this).click(function(){
                $('#ordertype').val( $(this).val() );
            });
        });

        $('.mops').each(function(){
            $(this).click(function(){
                $('#mop').val( $(this).data('value') );
            });
        });

            // filepicker.setKey('AJgYnKcG3TQv39JCso97wz');

        //STEP 2 FILESTACKS FB (MULTIPLE)
        $('.upload-options .fbook').each(function(){
            $(this).click(function(){
                const client = filestack.init('AJgYnKcG3TQv39JCso97wz');
                const options = {
                    fromSources: ["facebook"],
                    maxFiles: 15,
                    viewType: "grid",
                    onFileUploadFinished: function(response){
                        var jison = JSON.stringify(response);
                            var jsonStringify = '[' + jison + ']';
                            var jsonObj = JSON.parse(jsonStringify);

                            for(var i = 0; i < jsonObj.length; i++)
                            {   
                                var res = jsonObj[i];
                                console.log(res);
                                var tempcreate = {name: res['uploadId'], src: res['url']};
                                createFileElement(tempcreate);
                                filesUploaded.push(tempcreate);
                                checkUploads();
                            }
                        }

                }
                client.picker(options).open();
            });
        });
    
        //STEP 2 FILESTACKS IG (MULTIPLE)
        $('.upload-options .instag').each(function(){
            $(this).click(function(){
                const client = filestack.init('AJgYnKcG3TQv39JCso97wz');
                const options = {
                    fromSources: ["instagram"],
                    maxFiles: 15,
                    viewType: "grid",
                    onFileUploadFinished: function(response){
                        var jison = JSON.stringify(response);
                            var jsonStringify = '[' + jison + ']';
                            var jsonObj = JSON.parse(jsonStringify);

                            for(var i = 0; i < jsonObj.length; i++)
                            {   
                                var res = jsonObj[i];
                                var tempcreate = {name: res['uploadId'], src: res['url']};
                                createFileElement(tempcreate);
                                filesUploaded.push(tempcreate);
                                checkUploads();
                            }
                        }

                }
                client.picker(options).open();
            });
        });

        //STEP 3 FB UPLOAD (MULTIPLE)
        $(document).on('click', '.fbstacks', function(){
            
            const client = filestack.init('AJgYnKcG3TQv39JCso97wz');
            const options = {
                fromSources: ["facebook"],
                maxFiles: 15,
                viewType: "grid",
                onFileUploadFinished: function(response){
                    var jison = JSON.stringify(response);
                    var jsonStringify = '[' + jison + ']';
                    var jsonObj = JSON.parse(jsonStringify);

                    for(var i = 0; i < jsonObj.length; i++)
                    {   
                        var res = jsonObj[i];
                        initializeCropSingle({name: res['uploadId'], src: res['url']});
                    }
                    $('.single-input-file').val('');
                    $('.single-input-file').removeClass('show-uploads');
                }

            }
                client.picker(options).open();
            

        });
        //STEP 3 IG UPLOAD (MULTIPLE)
        $(document).on('click', '.igstacks', function(){
            const client = filestack.init('AJgYnKcG3TQv39JCso97wz');
            const options = {
                fromSources: ["instagram"],
                maxFiles: 15,
                viewType: "grid",
                onFileUploadFinished: function(response){
                    var jison = JSON.stringify(response);
                        var jsonStringify = '[' + jison + ']';
                        var jsonObj = JSON.parse(jsonStringify);

                        for(var i = 0; i < jsonObj.length; i++)
                        {   
                            var res = jsonObj[i];
                            initializeCropSingle({name: res['uploadId'], src: res['url']});
                        }
                $('.single-input-file').val('');
                $('.single-input-file').removeClass('show-uploads');
                }

            }
            client.picker(options).open();
        })

        //checkout
        //
            function numberWithCommas(number) {
                var parts = number.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }

            $('.checkout-btn').click(function(){
            var countimages = $('.photo-pane').length;
            var additionals  = countimages - 3;
            if (countimages > 3){
                $('.quantity').text( "x" + additionals);
                var base = Number($('#base').val());
                var perframe = parseFloat(Number($('#perframe').val())) * additionals;
                $('.adds').text( "₱ " + numberWithCommas(perframe.toFixed(2)));
                var total = base + perframe;
                var format = parseFloat(total);
                console.log(format);
                $('.value-total').text( "₱ " + numberWithCommas(format.toFixed(2)));
                $('.amounts').text("₱ " + numberWithCommas(format.toFixed(2)));
            }else{
                $('#greater3').hide();
                var basetotal = parseFloat($('#base').val());
                console.log(basetotal);
                $('.value-total').text("₱ " + numberWithCommas(basetotal.toFixed(2)));
                $('.amounts').text("₱ " + numberWithCommas(basetotal.toFixed(2)));
            };
            });

        });


        //PAYMENT
        $("#payment_proof").change(function(){
            if ($(this).val() !== '') {
                $(".upload-result").text($(this).val().replace(/C:\\fakepath\\/i, ''));
                $('.submit-payment').prop('disabled', false);
            }
        })

        $('input[name="payment_option"]').change(function(){
            if ($('input[name="payment_option"]:checked').val() === "bank_transfer" && !$("#bank-transfer-content").hasClass('active')) {
                //set heading
                $(".payment-method-heading h4.active").fadeOut(200, function(){
                    $("#bank-transfer-head").fadeIn(200);
                    $(".payment-method-heading h4.active").removeClass('active');
                    $("#bank-transfer-head").addClass('active');
                })
                $(".payment_content.active").fadeOut(200,function(){
                    $("#bank-transfer-content").fadeIn(200);
                    $(".payment_content.active").removeClass('active');
                    $("#bank-transfer-content").addClass('active');


                    //reset upload
                    $("#payment_proof").val('');
                    $(".upload-result").text('No Upload.');
                    $('.submit-payment').prop('disabled', true);
                })
            }
            else if ($('input[name="payment_option"]:checked').val() === "gcash_transfer" && !$("#gcash-content").hasClass('active')) {
                //set heading
                $(".payment-method-heading h4.active").fadeOut(200, function(){
                    $("#gcash-head").fadeIn(200);
                    $(".payment-method-heading h4.active").removeClass('active');
                    $("#gcash-head").addClass('active');
                })
                $(".payment_content.active").fadeOut(200,function(){
                    $("#gcash-content").fadeIn(200);
                    $(".payment_content.active").removeClass('active');
                    $("#gcash-content").addClass('active');

                    //reset upload
                    $("#payment_proof").val('');
                    $(".upload-result").text('No Upload.');
                $('.submit-payment').prop('disabled', true);
                })
            }
            else if ($('input[name="payment_option"]:checked').val() === "peso_pay" && !$("#peso-pay-content").hasClass('active')) {//set heading
                $(".payment-method-heading h4.active").fadeOut(200, function(){
                    $("#pesopay-head").fadeIn(200);
                    $(".payment-method-heading h4.active").removeClass('active');
                    $("#pesopay-head").addClass('active');
                })
                $(".payment_content.active").fadeOut(200,function(){
                    $("#peso-pay-content").fadeIn(200);
                    $(".payment_content.active").removeClass('active');
                    $("#peso-pay-content").addClass('active');

                    //reset upload
                    $("#payment_proof").val('');
                    $(".upload-result").text('No Upload.');
                $('.submit-payment').prop('disabled', true);
                })
                
            }
        });
        </script>