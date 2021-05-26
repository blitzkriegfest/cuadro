      <section class="featured">

        <h1>Wall Art in <span>5 Minutes</span></h1>

        <img src="<?php echo base_url('public/frontend/'); ?>images/IMG_6150.jpg" alt="Wall Art in 5 Minutes">

      </section>

      

      <section class="why-us">

        <div class="pagewrapper">

          <ul>

            <li>

              <aside><img src="<?php echo base_url('public/frontend/'); ?>images/no-nail.png" alt="No more banging on walls"></aside>

              <h4>No more banging on your walls</h4>

              <p>Our frames use a special tape adhesive</p>

            </li>

            <li>

              <aside><img src="<?php echo base_url('public/frontend/'); ?>images/stick.png" alt="Frame Stick and Unstick"></aside>

              <h4>Frames stick and unstick from your wall without any damage</h4>

              <p>Our frames stick to any FLAT surface </p>

            </li>

            <li>

              <aside><img src="<?php echo base_url('public/frontend/'); ?>images/free-delivery.png" alt="Free Delivery"></aside>

              <h4>Conveniently delivered to your doorstep</h4>

              <p><span>FREE DELIVERY</span> nationwide within 7-14 days </p>

            </li>

          </ul>

        </div>

      </section>  



      <section class="projects">

        <div class="pagewrapper2">

          <ul class="project-list">

            <?php if (count($project) > 0 ): ?>

              <?php $i = 1; foreach ($project as $key => $value): ?>

                <li>

                <a href="<?php echo $value->project_image_f;?>" target="_blank">

                  <div class="proj">

                    <img src="<?php echo $value->project_image_f;?>" alt="<?php echo $value->project_name;?>">

                    <div class="overlay">

                      <h4><span><?php echo $value->project_name;?></span></h4>

                    </div>

                  </div>

                </a>

                </li>             

              <?php endforeach; ?>

            <?php endif; ?>

          </ul>

        </div>

      </section>   

      

      <section class="video">

        <div class="pagewrapper2">

          <article>

            <h2>FRAME YOUR TREASURES<br>

            TREASURE YOUR FRAMES</h2>

            <p>Turn your walls into galleries of your most special moments or favorite decor</p>

            <h6><a href="<?php echo base_url('getStarted');?>">LET'S DO IT!</a></h6>

          </article>

          <aside>

            <div class="video-container">

              <iframe width="560" height="315" src="https://www.youtube.com/embed/oE1HxR0DG8I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>

          </aside>

        </div>

      </section>  

      <script src="text/javascript">
        var elem = document.getElementsByClassName("featured").firstElementChild;
        console.log(elem);
          

      </script>