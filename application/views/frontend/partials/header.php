<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

            <title>Cuadro | <?php if (!empty($page_title)) echo $page_title;?></title>

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Place CSS links here -->
            <link rel="icon" href="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg">

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/slick.css"/>

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/slick-theme.css"/>

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/croppie.css"/>
            <!-- Place CSS links here -->

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/main.css">

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/responsive.css">
            <!-- for single -->
            <!-- <script type="text/javascript" src="https://api.filestackapi.com/filestack.js"></script> -->
            <!-- undefined -->
            <!-- <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script> -->
            <!-- for v3 -->
            <script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>

            <?php $i = 1; foreach ($seo as $key => $value): ?>
            <meta name="<?php echo $value->tags;?>" content="<?php echo $value->value;?>">
            <?php endforeach;?>

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198032754-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-198032754-1');
            </script>

    </head>

    <body>

      <header class="header">

        <div class="pagewrapper">

          <aside><a href="<?php echo base_url();?>"><img src="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg" alt="Cuadro Frames"></a></aside>

          <h1 class="header-wai5m">Wall Art in <span>5 Minutes</span></h1>


          <nav class="mainnav">

            <ul>

              <li><a href="<?php echo base_url();?>">Home</a></li>

              <li class="faq-desk"><a href="#faq">FAQs</a></li>

              <li><a href="<?php echo base_url('products');?>">Hot New Items</a></li>

              <li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>

              <li><a href="<?php echo base_url('getStarted'); ?>">LET'S DO IT!</a></li>

            </ul>

          </nav>

        </div>



        <!-- Mobile -->

        <button id="mobnav"><span class="burg"><i></i><i></i><i></i></span><span class="text">MENU</span></button>

        <div class="mob-dropdown">

          <div class="menu">

            <div class="top">

              <aside><a href="<?php echo base_url();?>"><img src="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg" alt="Cuadro Frames"></a></aside>

              <button id="close-nav"><span></span></button>

            </div>

            <nav>

              <ul>

                <li class="hom"><a href="<?php echo base_url();?>">Home</a></li>

                <li class="faq">FAQs</li>

                <li class="hni"><a href="<?php echo base_url('products');?>">Hot New Items</a></li>

                <li class="cus"><a href="<?php echo base_url('contact');?>">Contact Us</a></li>

                <!-- <li class="cwu"><a href="#">Chat with Us</a></li> -->

              </ul>

            </nav>

            <div class="lets-do-it">

              <a href="<?php echo base_url('getStarted'); ?>" >LET'S DO IT!</a>

            </div>

            <div class="bottom">  

              <ul class="privacy-terms">

                <li><a href="<?php echo base_url('TermsandConditions');?>">Cuadro Terms & Conditions</a></li>

              </ul>

              <ul class="socials">

                <li><a href="https://www.facebook.com/cuadroframes" class="fb" target="_blank"></a></li>

                <li><a href="https://www.instagram.com/cuadroframes/?fbclid=IwAR05xqPWCLKRWOEHzeRBoEsIqje8q4cRrot7tmPz3wDMXy65lz6QnpEVm_w" class="ig" target="_blank"></a></li>

                <li><a href="https://www.youtube.com/channel/UC7LRMSfUFEWhu58UF5xk8fw" class="yt" target="_blank"></a></li>

              </ul>

            </div>

          </div>

          <div class="faqs">

            <div class="top">

              <aside><img src="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg" alt="Cuadro Frames"></aside>

              <button id="close-faq"><span></span></button>

            </div>

            <h3>FAQs</h3>

            <ul class="faq-list">

              <?php if (count($faq) > 0 ): ?>

                <?php $i = 1; foreach ($faq as $key => $value): ?>

                  <li>

                    <div class="faq-top"><p><?php echo $value->faq_question ;?></p></div>

                    <div class="faq-content"><p><?php echo $value->faq_answer ;?></p></div>

                  </li> 

                <?php endforeach; ?>

              <?php endif; ?>

            </ul>

          </div>



        </div>

      </header>

      

      <!--FAQ DESKTOP-->

      <div class="faq-desktop">

        <div class="faq-lbox-cont">

          <div class="faq-lbox">

            <h3>FAQs</h3>

            <span class="clsbtn"></span>

            <div class="scrollwrap">

              <ul class="faq-list">

                <?php if (count($faq) > 0 ): ?>

                <?php $i = 1; foreach ($faq as $key => $value): ?>

                  <li>

                    <div class="faq-top"><p><?php echo $value->faq_question ;?></p></div>

                    <div class="faq-content"><p><?php echo $value->faq_answer ;?></p></div>

                  </li> 

                <?php endforeach; ?>

              <?php endif; ?>

              </ul>



            </div>

          </div>

        </div>

      </div>