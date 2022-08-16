<!-- Portfolio -->
<section id="portfolio" class="portfolio">
  <div class="section__header">
    <h2 class="section__heading">Portfolio</h2>
    <div class="section__heading--sub">
      My web development projects & graphic design.
    </div>
  </div>
  <?php
    $args = array(
        'post_type' => 'website',
        'posts_per_page' => -1,
        'order' => 'ASC',
        // 'category_name' => 'marvel'
    );
    $the_query = new WP_Query( $args ); ?>
  <?php if ( $the_query->have_posts() ) : ?>
  <div class="container portfolio__container">
    <div class="row">
      <h3 class="text-center my-3">Web Development</h3>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-12 col-md-6 col-lg-4 my-3">
        <?php 
          $link = get_field('website_link');
          if( $link ) { ?>  
        <a href="<?php echo esc_url( $link ); ?>" target="_blank">
          <?php } else { ?>
          <?php $postid = get_the_ID();
            $postid_str = strval($postid);
            ?>
          <!-- Button trigger for modal -->
        <a href="#" data-bs-toggle="modal" data-bs-target="<?php echo '#modal-id-' . $postid_str ?>">
          <?php include 'modal.php'; ?>               
          <?php } ?>
          <div class="card mx-auto h-100" data-aos="zoom-in">
            <?php 
              $image = get_field('website_image');
              if( !empty( $image ) ): ?>
            <img class="card-img-top img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="card-body">
              <h5 class="text-center"><?php the_field('website_name') ?></h5>
              <p class="card-text text-center">
                <?php the_field('website_description'); ?>
              </p>
            </div>
            <!-- Card Body -->              
          </div>
          <!-- Card -->
        </a>
        <!-- link -->
      </div>
      <!-- Column -->
      <?php endwhile; ?>
    </div>
    <!-- row  -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <!-- Graphics -->
    <?php
      $args = array(
          'post_type' => 'graphic',
          'posts_per_page' => -1,
          'order' => 'ASC',
          // 'category_name' => 'marvel'
      );
      $graphic_query = new WP_Query( $args ); ?>
    <?php if ( $graphic_query->have_posts() ) : ?>  
    <div class="row">
      <h3 class="text-center my-3">Graphic Recreations & Design</h3>
      <?php while ( $graphic_query->have_posts() ) : $graphic_query->the_post(); ?>
      <div class="col-12 col-md-6 col-lg-3 my-3">
        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
          <div class="twentytwenty-container card-img-top">
            <!-- The before image is first -->
            <img src="<?php the_field('before_image') ?>" />
            <!-- The after image is last -->
            <img src="<?php the_field('after_image') ?>" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Raster Recreation to Vector</h5>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</section>

