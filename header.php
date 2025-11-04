<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9JC38V');</script>
<!-- End Google Tag Manager -->

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php //wp_body_open(); ?>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9JC38V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Header -->
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg"
              alt="John Prowell logo image"
              class="header__logo-img"
            />
          </div>          
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-sub">John Prowell</a>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="<?php echo esc_url(home_url('/')); ?>#about" class="header__link">About </a>
            </li>
            <li class="header__link-wrapper">
              <a href="<?php echo esc_url(home_url('/')); ?>#portfolio" class="header__link">
                Portfolio
              </a>
            </li>
            <li class="header__link-wrapper">
              <a href="<?php echo home_url(); ?>#contact" class="header__link"> Contact </a>
            </li>
          </ul>
          <div class="header__main-ham-menu-cont">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/ham-menu.svg"
              alt="hamburger menu"
              class="header__main-ham-menu"
            />
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/ham-menu-close.svg"
              alt="hamburger menu close"
              class="header__main-ham-menu-close d-none"
            />
          </div>
        </div>
      </div>
      <div class="header__sm-menu">
        <div class="header__sm-menu-content">
          <ul class="header__sm-menu-links">
            <li class="header__sm-menu-link">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            </li>

            <li class="header__sm-menu-link">
            <a href="<?php echo esc_url(home_url('/#about')); ?>">About</a>
            </li>

            <li class="header__sm-menu-link">
            <a href="<?php echo esc_url(home_url('/#portfolio')); ?>">Portfolio</a>
            </li>

            <li class="header__sm-menu-link">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </header>