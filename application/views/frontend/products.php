<section class="short-banner">
        <div class="pagewrapper">
            <div class="wrap">
                <aside class="banner-image"><img src="echo base_url('public/frontend/'); ?>images/hot-new-items-banner.png" alt=""></aside>
                <article>
                    <h2>Hot New Items</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        ut labore.</p>
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
                      <h5><?php echo $value->product_name;?></h5>
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