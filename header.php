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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php //wp_body_open(); ?>

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
          <span class="header__logo-sub">John Prowell</span>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="<?php site_url(); ?>" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="#about" class="header__link">About </a>
            </li>
            <li class="header__link-wrapper">
              <a href="#portfolio" class="header__link">
                Porfolio
              </a>
            </li>
            <li class="header__link-wrapper">
              <a href="#contact" class="header__link"> Contact </a>
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
              <a href="<?php site_url(); ?>"> Home </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="#about"> About </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="#portfolio"> Porfolio </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="#contact"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>