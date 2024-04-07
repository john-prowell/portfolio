<!-- Hero Section -->
<section id="hero" class="hero">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-3 col-xl-5 order-first order-md-last d-flex align-items-center justify-content-center">
        <div class="hero__photo">        
          <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/photo.jpg' ); ?>" alt="<?php esc_attr('John Prowell'); ?>"  data-aos="zoom-in-right" data-aos-duration="1000">            
        </div>       
      </div>

      <div class="col-12 col-md-9 col-xl-7 d-flex justify-content-center">
        <div class="hero__content">
          <span class="intro-text"><?php esc_html_e('Welcome to my world', 'text-domain'); ?></span>
          <h1 data-aos="zoom-in-left" data-aos-duration="1000">Hi, I’m John Prowell,<br> <span class="title"><?php echo esc_html( get_field('hero_h3') ? get_field('hero_h3') : 'WordPress Developer' ); ?></span></h1>
          <a href="#contact" class="cta" data-aos="zoom-in-up" data-aos-duration="1500"><i class="fa-regular fa-envelope fa-lg"></i> <?php esc_html_e("Let's Talk", 'text-domain'); ?></a>
        </div>        
      </div>
    </div>
  </div>
</section>