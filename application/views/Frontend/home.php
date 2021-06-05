      <section class="featured">

        <h1>Wall Art in <span>5 Minutes</span></h1>
        <?php $i = 1; foreach ($resources as $key => $value): ?>

        <img src="<?php echo $value->homepage_image_f?>" alt="Wall Art in 5 Minutes">
      <?php endforeach;?>

      </section>

      

      <section class="why-us">

        <div class="pagewrapper">

          <ul>

            <?php $i = 1; foreach ($feature as $key => $value): ?>

            <li>

              <aside><img src="<?php echo $value->feature_image_f;?>"></aside>

              <h4><?php echo $value->feature_title;?></h4>

              <p><?php echo $value->feature_description;?></p>

            </li>
          <?php endforeach;?>
            

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

      
      <?php $i = 1; foreach ($resources as $key => $value): ?>
      <section class="video">

        <div class="pagewrapper2">

          <article>

            <h2><?php echo $value->yiframe_title?></h2>

            <p><?php echo $value->yiframe_desc?></p>

            <h6><a href="<?php echo base_url('getStarted');?>">LET'S DO IT!</a></h6>

          </article>

          <aside>

            <div class="video-container">

              <?php echo htmlspecialchars_decode($value->yiframe_embed);?>

            </div>

          </aside>

        </div>

      </section>  
    <?php endforeach;?>

      <script src="text/javascript">
        var elem = document.getElementsByClassName("featured").firstElementChild;
        console.log(elem);
          

      </script>