<section class="short-banner">

        <div class="pagewrapper">

            <div class="wrap">

                <aside class="banner-image"><img src="<?php echo base_url('public/frontend/'); ?>images/IMG_6150.jpg" alt=""></aside>

                <article>

                    <h2>Hot New Items</h2>

                    <p>We'll keep you posted with our exciting new offers! 😊</p>

                </article>

            </div>

        </div>

      </section>



      <section class="products">

          <div class="pagewrapper">

              <ul class="product-list">

                <?php if (count($prods) > 0 ): ?>

                  <?php $i = 1; foreach ($prods as $key => $value): ?>

                    <li>

                      <aside><img src="<?php echo $value->product_image_f;?>" alt=""></aside>

                      <article>

                        <div class="logo-wrap"><img src="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg" alt="Cuadro Frames Logo" class="logo"></div>

                        <h5><?php echo $value->product_name;?></h5>
                        
                      </article>

                    </li>

                  <?php endforeach; ?>

                <?php endif; ?>

              </ul>

              <ul class="pagination">

                  <li class="active"><a href="?1">1</a></li>

                  <li><a href="?2">2</a></li>

                  <li><a href="?3">3</a></li>

              </ul>

          </div>

      </section>