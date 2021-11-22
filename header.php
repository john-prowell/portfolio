<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway:700" rel="stylesheet" />

    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->

    <header id="header" data-scroll-header>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- <svg class="logo">
        <use xlink:href="img/sprite.svg#logo"></use>
      </svg> -->

            <nav id="nav" class="nav">
              <!-- <a href="#home" class="nav__link">
          <svg class="nav__icon logo">
            <use xlink:href="img/sprite.svg#logo"></use>
          </svg>
        </a> -->        

              <a href="#about" class="nav__link">
                <svg class="nav__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#avatar-solid"></use>
                </svg>
                <span>about</span>
              </a>

              <a href="#skills" class="nav__link">
                <svg class="nav__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#skills"></use>
                </svg>
                <span>skills</span>
              </a>

              <a href="#portfolio" class="nav__link">
                <svg class="nav__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#folder"></use>
                </svg>
                <span>portfolio</span>
              </a>

              <a href="#contact" class="nav__link">
                <svg class="nav__icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#email"></use>
                </svg>
                <span>contact</span>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>
