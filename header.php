<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YZ1TJC5J4H"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YZ1TJC5J4H');
    </script>

    <title><?php echo get_bloginfo( 'name' );?> </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php //wp_body_open(); ?>

    <!-- Header -->

    <header id="header" <?php if(!is_front_page()) {?>class="page-nav" <?php } ?> data-scroll-header>
      <div class="container">
        <div class="row">
          <div class="col-12">
      <?php if(is_front_page()) {      
        get_template_part('partials/front-page-nav'); 
          } else {
          get_template_part('partials/page-nav');
        } ?>
            
          </div>
        </div>
      </div>
    </header>