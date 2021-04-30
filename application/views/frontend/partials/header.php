<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>Cuadro | Homepage</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Place CSS links here -->
            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/slick.css"/>
            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/slick-theme.css"/>
            <!-- Place CSS links here -->
            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/main.css">
            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/responsive.css">
    </head>
    <body>
      <header class="header">
        <div class="pagewrapper">
          <aside><img src="<?php echo base_url('public/frontend/'); ?>images/cuadro-frames-logo.jpg" alt="Cuadro Frames"></aside>

          <nav class="mainnav">
            <ul>
              <li><a href="./">Home</a></li>
              <li class="faq-desk"><a href="#faq">FAQs</a></li>
              <li><a href="./hot-items.html">Hot New Items</a></li>
              <li><a href="./contact-us.html">Contact Us</a></li>
              <li><a href="./get-started.html">LET'S DO IT!</a></li>
            </ul>
          </nav>
        </div>

        <!-- Mobile -->
        <button id="mobnav"><span class="burg"><i></i><i></i><i></i></span><span class="text">MENU</span></button>
        <div class="mob-dropdown">
          <div class="menu">
            <div class="top">
              <aside><img src="images/cuadro-frames-logo.jpg" alt="Cuadro Frames"></aside>
              <button id="close-nav"><span></span></button>
            </div>
            <nav>
              <ul>
                <li class="hom"><a href="./index.html">Home</a></li>
                <li class="faq">FAQs</li>
                <li class="hni"><a href="./hot-items.html">Hot New Items</a></li>
                <li class="cus"><a href="./contact-us.html">Contact Us</a></li>
                <li class="cwu"><a href="#">Chat with Us</a></li>
              </ul>
            </nav>
            <div class="lets-do-it">
              <a href="./get-started.html" >LET'S DO IT!</a>
            </div>
            <div class="bottom">  
              <ul class="privacy-terms">
                <li><a href="./privacy-policy.html">Privacy Policy</a></li>
                <li><a href="./privacy-policy.html">Terms of Us</a></li>
              </ul>
              <ul class="socials">
                <li><a href="#" class="fb"></a></li>
                <li><a href="#" class="ig"></a></li>
                <li><a href="#" class="yt"></a></li>
              </ul>
            </div>
          </div>
          <div class="faqs">
            <div class="top">
              <aside><img src="images/cuadro-frames-logo.jpg" alt="Cuadro Frames"></aside>
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