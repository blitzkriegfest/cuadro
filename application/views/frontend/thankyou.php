<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

            <title>Cuadro | Thank you!</title>

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Place CSS links here -->

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/slick.css"/>

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/slick-theme.css"/>

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/croppie.css"/>

            <!-- Place CSS links here -->

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/main.css">

            <link rel="stylesheet" href="<?php echo base_url('public/frontend/'); ?>css/responsive.css">

    </head>





    <body>



      <section class="get-started">

          <div class="pagewrapper8">

              <div class="wrap">



                  <div class="thank-you steps" style="display: block;">

                        <h1>Thank you very much for choosing&nbsp;Cuadro!</h1>

                        <h2>FRAME YOUR TREASURES<br/>TREASURE YOUR FRAMES</h2>

                        <a href="<?php echo base_url(); ?>" class="return-home-btn">RETURN</a>

                        <p><b>Note:</b> kindly check your email for your sales order update/s.</p>

                  </div>

              </div>

          </div>

      </section>

      

      

<!-- SCRIPTS -->

  <script src="<?php echo base_url('public/frontend/'); ?>/js/jquery-3.6.0.min.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>/js/slick.min.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>/js/pagination.min.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>/js/croppie.js"></script>

  <script src="<?php echo base_url('public/frontend/'); ?>/js/main.js"></script>

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

      

      

    </body>



</html>

