<section class="contact-info-main">

        <div class="pagewrapper3">

            <div class="wrap">
                <aside class="gmaps">
                <?php $i = 1; foreach ($resources as $key => $value): ?>
                <?php $new = str_replace(' ', '%20', $value->location_embed);?>
                <?php $last = str_replace('&', '%26', $new);?>

                <iframe src="<?php echo $last;?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <?php endforeach;?>
                </aside>
                <article>

                    <h2>Contact Us</h2>

                    <div class="contact-det">

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