 <!-- Messenger Chat Plugin Code -->
          <div id="fb-root"></div>
            <script>
              window.fbAsyncInit = function() {
                FB.init({
                  xfbml            : true,
                  version          : 'v10.0'
                });
              };

              (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
            </script>

            <!-- Your Chat Plugin code -->
            <div class="fb-customerchat"
              attribution="biz_inbox"
              page_id="102555568620612">
            </div>

            
            <footer>

        <div class="main-footer">

          <div class="pagewrapper">

            <ul class="footer">

              <li class="contact-info">

                <ul class="cinfo">

                  <li class="footerlogo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg"></a></li>

                  <li class="contactdet">

                    <h4>CUADRO CORPORATION</h4>

                    <ul class="office">

                      <?php $i = 1; foreach ($contact as $key => $value): ?>

                        <li>

                            <h5><?php echo $value->contact_name;?>:</h5>

                            <p><?php echo $value->contact_address;?></p>

                            <p>Contact #:<br>
                            <?php 
                            $variable = $value->contact_number;
                           $array = explode(', ',$variable);
                           foreach($array as $row)
                            {?>
                                <a href="tel:+<?php echo $row;?>">+<?php echo $row;?> </a> 
                            <?php }?>
                            
                            
                            </p>
                            

                        </li>


                    <?php endforeach;?>


                    </ul>

                  </li>

                </ul>

              </li>

              <li class="footermenu">

                <h4>MENU</h4>

                <ul class="menulist">

                  <li>

                    <a href="<?php echo base_url();?>">Home</a><br>

                    <a href="#faq" class="faq-footer">FAQs</a><br>

                    <a href="<?php echo base_url('products');?>" class="color-r">Hot New Items</a><br>

                    <a href="<?php echo base_url('contact');?>">Contact Us</a>

                  </li>

                  <li>

                    <a href="<?php echo base_url('getStarted'); ?>">Get Started</a><br>

                    <a href="<?php echo base_url('TermsandConditions');?>">Cuadro Terms & Conditions</a><br>

                  </li>

                </ul>

              </li>

              <li class="social-links">

                <h4>Follow us on</h4>

                <ul class="socials">

                  <li><a href="https://www.facebook.com/cuadroframes" class="fb" target="_blank"></a></li>

                  <li><a href="https://www.instagram.com/cuadroframes/?fbclid=IwAR05xqPWCLKRWOEHzeRBoEsIqje8q4cRrot7tmPz3wDMXy65lz6QnpEVm_w" class="ig" target="_blank"></a></li>

                  <li><a href="https://www.youtube.com/channel/UC7LRMSfUFEWhu58UF5xk8fw" class="yt" target="_blank"></a></li>

                </ul>

              </li>

            </ul>

            <div class="mobile-footer">

              <ul class="mobile-footer-links">

                <li><a href="#">Chat with Us</a></li>

                <li class="faq-footer">FAQs</li>

                <li><a href="<?php echo base_url('TermsandConditions');?>">Cuadro Terms & Conditions</a></li>

              </ul>

              <p class="mob-copyright">Copyright 2021. Cuadro Corporation.</p>

            </div>

          </div>

        </div>

        <p class="copyright">

          Copyright 2021. Cuadro Corporation.

        </p>

        <div class="lets-do-it"><a href="<?php echo base_url('getStarted');?>">LET'S DO IT!</a></div>

      </footer>


<!-- SCRIPTS -->

  <script src="<?php echo base_url('public/frontend/'); ?>js/jquery-3.6.0.min.js"></script>

  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>js/slick.min.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>js/pagination.min.js"></script>
  
  <script src="<?php echo base_url('public/frontend/'); ?>js/croppie.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>js/main.js"></script>

  <script src="<?php echo base_url('public/admin/js/custom/'); ?>getstarted_management.js"></script>

    </body>



</html>

