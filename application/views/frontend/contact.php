<section class="contact-info-main">

        <div class="pagewrapper3">

            <div class="wrap">

                <aside class="gmaps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.6601308884756!2d121.1109655148404!3d14.618426889791124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b844bc35a8a7%3A0xa9ad4469f680bf9f!2sTown%20%26%20Country%20Executive%20Village!5e0!3m2!1sen!2sph!4v1619431541464!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy"></iframe></aside>

                <article>

                    <h2>Contact Us</h2>

                    <div class="contact-det">

                        <h4>CUADRO CORPORATION</h4>

                        <ul class="office">

                        <li>

                            <h5>Operations:</h5>

                            <p>3 Kaimito St. Town & Country<br/>

                            Executive Village, Antipolo City </p>

                            <p>Contact #:<br>

                            <a href="tel:+63286453578">+(632) 8645-3578</a>, <a href="tel:+639995851756">0999-5851756</a></p>

                        </li>

                        <li>

                            <h5>Sales & Marketing:</h5>

                            <p>43 Caballero St. Town & Country<br/> Executive Village, Antipolo City </p>

                            <p>Contact #:<br>

                            <a href="tel:+63284778644">+(632) 8477-8644</a>, <a href="tel:+63284778644">0999-5851753</a></p>

                        </li>

                        </ul>

                    </div>

                </article>

            </div>

        </div>

      </section>



      <section class="contact-form">

          <div class="pagewrapper3">

              <div class="wrap">  

                <h4>We look forward to hearing from you.</h4>

                <form action="<?php echo base_url('contact/send_inquiry');?>" method="POST">

                <ul>

                    <li>    

                        <label for="name">Name<span>*</span></label>

                        <input type="text" id="name" name="name" required="required" />

                    </li>

                    <li>    

                        <label for="email-add">Email Address<span>*</span></label>

                        <input type="email" id="email-add" name="email" required="required"/>

                    </li>

                    <li>    

                        <label for="contact-num">Contact Number<span>*</span></label>

                        <input type="text" id="contact-num" name="mobile" required="required"/>

                    </li>

                    <li>    

                        <label for="subject">Subject<span>*</span></label>

                        <input type="text" id="subject" name="subject" required="required"/>

                    </li>

                    <li>    

                        <label for="message">Message<span>*</span></label>

                        <textarea name="message" id="message" required="required"></textarea>

                    </li>

                    <div class="iagree-sec">

                        <input type="checkbox" id="iagree" name="agree" required="required">

                        <label for="iagree">I agree to the <a href="<?php echo base_url('TermsandConditions');?>" target="_blank">terms and conditions</a> of Cuadro.</label>

                    </div>

                    <input type="submit" value="SEND INQUIRY" class="submit-btn">

                </ul>

                </form>

              </div>

          </div>

      </section>