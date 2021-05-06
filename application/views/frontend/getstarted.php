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
                            <button class="next-btn" disabled>NEXT</button>
                        </ul>
                  </div>

                  <form action="getstarted/addOrder" method="POST" enctype="multipart/form-data" id="ordetails">
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
                                <label for="fb-upload" class="upload-el"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png"/ class='logo'>Import from Facebook</label>
                            </li>
                            <li>
                                <!-- <input type="file" name="options" id="computer-upload"> -->
                                <label for="ig-upload" class="upload-el"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"/ class='logo'>Import from Instagram</label>
                            </li>
                        </ul>
                        <ul class="navigation">
                            <button class="back-btn">BACK</button>
                            <button class="next-btn" disabled>NEXT</button>
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
                                            <input type="radio" name="order_type" id="frame-option<?php echo $c++?>" data-boundary="42" data-percent-boundary="18" value="<?php echo $value->frame_type;?>" class="frame" checked>
                                            <label for="frame-option<?php echo $ctwo++;?>"><img src="<?php echo $value->frame_image_f;?>" alt="frame-small"></label>
                                        </li>      
                                        <?php } else { ?>
                                        <li>
                                            <input type="radio" name="order_type" id="frame-option<?php echo $c++?>" data-boundary="42" data-percent-boundary="18" value="<?php echo $value->frame_type;?>" class="frame">
                                            <label for="frame-option<?php echo $ctwo++;?>"><img src="<?php echo $value->frame_image_f;?>" alt="frame-small"></label>
                                        </li>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                            <div class="frame-result-name">Bestseller</div>
                        </div>
                        <!--EOF FRAME SELECTION-->

                        <!--PHOTOS SECTION-->
                        <div class="photos-section">
                            <ul class="container">
                                
                                <!--SINGLE PHOTO CONTAINER-->
                                <li class="single-container result">
                                    <!--UPLOAD-->
                                    <div class="upload-pane">
                                      <ul class="inner-upload-options">
                                          <!--INCREMENT COUNTER PER PHOTO SECTION-->
                                          <li><input type="file" name="order_images[]" accept="image/*" id="photo-cp-upload-1" class="single-input-file">
                                              <label for="photo-cp-upload-1" class="upload-pc"><img src="<?php echo base_url('public/frontend/'); ?>images/cam.png" class="logo" alt="camera">Upload photos from my phone or computer</label>
                                          </li>
                                          <li><button class="upload-fb"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png" class="logo" alt="camera">Import from Facebook</button></li>
                                          <li><button class="upload-ig"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"  class="logo"alt="camera">Import from Instagram</button></li>
                                      </ul>
                                      <ul class="photo-options">
                                          <li><button class="remove-photo-btn">Remove</button></li>
                                      </ul>
                                    </div>
                                    <!--IF HAS UPLOADED SHOW THIS-->
                                    <div class="photo-pane">
                                        <div class="result-photo">
                                            <!--ORIGINAL UPLOADED PHOTO FOR CROPPER HIDDEN-->
                                            <img src="<?php echo base_url('public/frontend/'); ?>/images/sample.jpg" alt="orginal photo" class="pic-original">
                                            <!--RESULT PHOTO FROM CROP-->
                                            <div class="photo-wrap-big">
                                              <img src="<?php echo base_url('public/frontend/'); ?>/images/sample.jpg" alt="pic to use" class="pic-used">
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
                                            <li><button class="adjust-crop-btn">Adjust Crop</button></li>
                                            <li><button class="remove-photo-btn">Remove</button></li>
                                        </ul>
                                    </div>
                                </li>

                                <!--SINGLE PHOTO CONTAINER-->
                                <li class="single-container">
                                    <!--UPLOAD-->
                                    <div class="upload-pane">
                                        <ul class="inner-upload-options">
                                            <!--INCREMENT COUNTER PER PHOTO SECTION-->
                                            <li><input type="file" name="order_images[]" accept="image/*" id="photo-cp-upload-2" class="single-input-file">
                                                <label for="photo-cp-upload-2" class="upload-pc"><img src="<?php echo base_url('public/frontend/'); ?>images/cam.png" class="logo" alt="camera">Upload photos from my phone or computer</label>
                                            </li>
                                            <li><button class="upload-fb"><img src="<?php echo base_url('public/frontend/'); ?>images/fb.png" class="logo" alt="camera">Import from Facebook</button></li>
                                            <li><button class="upload-ig"><img src="<?php echo base_url('public/frontend/'); ?>images/ig.png"  class="logo"alt="camera">Import from Instagram</button></li>
                                        </ul>
                                        <ul class="photo-options">
                                            <li><button class="remove-photo-btn">Remove</button></li>
                                        </ul>
                                    </div>
                                    <!--IF HAS UPLOADED SHOW THIS-->
                                    <div class="photo-pane">
                                        <div class="result-photo">
                                            <!--ORIGINAL UPLOADED PHOTO FOR CROPPER HIDDEN-->
                                            <img src="./images/sample.jpg" alt="orginal photo" class="pic-original">
                                            <!--RESULT PHOTO FROM CROP-->
                                            <div class="photo-wrap-big">
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
                                            <li><button class="adjust-crop-btn">Adjust Crop</button></li>
                                            <li><button class="remove-photo-btn">Remove</button></li>
                                        </ul>
                                    </div>
                                </li>

                                <!--ADD NEW UPLOAD-->
                                <li class="add-new-single">
                                    <div class="empty-pane">
                                        <span class="add-logo"></span>
                                        ADD PHOTO
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        <!--EOF PHOTO SECTION-->

                        <ul class="navigation">
                            <button class="back-btn">BACK</button>
                            <button class="next-btn">NEXT</button>
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
                            <button class="back-btn">BACK</button>
                            <button class="checkout-btn">CHECKOUT</button>
                        </ul>
                  </div>
                  </form>
                  <div class="step-5 steps" style="display: none">
                      <h5>Step 5: Order Summary</h5>
                      <div id="for-me-checkout" class="checkouts">
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
                                        <!--place frame options here-->
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
                                        <!--place frame options here-->
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
                                        <!--place frame options here-->
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
                                        <!--place frame options here-->
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
                      </div>
                      <div id="special-someone-checkout" class="checkouts">
                        <div class="container">
                            <div class="left">
                                <div class="sender">
                                    <h5>Sender:</h5>
                                    <p id="fs-name">Andrew Manalo</p>
                                    <p id="fs-email">amanalo@gmail.com</p>
                                    <p id="fs-contact">09173253345</p>
                                </div>
                                <div class="recipient">
                                    <h5>Recipient:</h5>
                                    <p id="fs-rname">Amara Chloe Sandoval</p>
                                    <p id="fs-remail">achloesand@gmail.com</p>
                                    <p id="fs-raddress">Address 1, Address 2</p>
                                    <p id="fs-rcity">City</p>
                                    <p id="fs-rcontact">09172167246</p>
                                </div>
                            </div>
                            <div class="right">
                              <div class="top">
                                <ul class="photos-list-final">
                                    <li>
                                      <div class="photo-wrap-sm">
                                        <div class="frames">
                                          <!--place frame options here-->
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
                                          <!--place frame options here-->
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
                                          <!--place frame options here-->
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
                                          <!--place frame options here-->
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
                                    <input type="checkbox" name="agree-place-order" id="agreespecial"><label for="agreespecial">I agree to the <a href="#">terms and conditions</a> by Cuadro Corporation.</label>
                                  </div>
                                </div>
                                <button class="back-btn">BACK</button>
                                <button class="place-order-btn" id="special-placeorder" disabled>PLACE ORDER</button>
                            </ul>
                          </div>
                      </div>
                  </div>
                  <div class="step-6 steps" style="display: none">
                        <h1>Thank You!</h1>
                        <p>We've now recieved your order, please wait as we process it.</p>
                        <a href="./index.html" class="return-home-btn">RETURN</a>
                  </div>
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