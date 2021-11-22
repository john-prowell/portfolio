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
      <h3 class="text-center my-3">Web Design & Development</h3>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-12 col-md-6 col-lg-4 my-3">      
            <div class="card mx-auto h-100">
                <?php 
                $image = get_field('website_image');
                if( !empty( $image ) ): ?>
                  <img class="card-img-top img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <div class="card-body">

                <?php 
                $link = get_field('website_link');
                if( $link ){ ?>
                    <a class="d-block mb-2" href="<?php echo esc_url( $link ); ?>" target="_blank"><h5 class="text-center"><?php the_field('website_name') ?></h5></a>
                <?php } else { ?>

                  <?php $postid = get_the_ID();
                  $postid_str = strval($postid);
                  ?>

                  <!-- Button trigger modal -->
                  <a class="d-flex justify-content-center mb-2" href="#" type="button" data-bs-toggle="modal" data-bs-target="<?php echo '#modal-id-' . $postid_str ?>">
                  <h5><?php the_field('website_name') ?></h5>
                  </a>

                  <!-- Modal -->
                  <div class="modal fade modal-fullscreen" id="<?php echo 'modal-id-' . $postid_str ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel"><?php the_field('website_name') ?></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col">

                            <?php if( get_field('website_image_large') ): ?>
                            <img class="img-fluid d-block mx-auto" src="<?php the_field('website_image_large'); ?>" />
                            <?php endif; ?>                           
                              
                            </div>
                            
                          </div>                          
                        </div>
                      </div>                      
                      </div>
                    </div>
                  </div>
                  
                <?php } ?>                 

                  <p class="card-text text-center">
                  <?php the_field('website_description'); ?>
                  </p>

                <!-- <div class="portfolio__card-links">

                <?php 
                $repository = get_field('website_repository');
                if( $repository ): ?>
                    <a class="button" href="<?php echo esc_url( $repository ); ?>" target="_blank"><svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#github-logo"></use></svg
                  ></a>
                <?php endif; ?>
                <?php 
                $link = get_field('website_link');
                if( $link ): ?>
                    <a class="button" href="<?php //echo esc_url( $link ); ?>" target="_blank"><svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#external-link-symbol"></use></svg
                  ></a>
                <?php endif; ?>                  
                </div> -->
              </div>               
            </div>
          </div>  
        <?php endwhile; ?>
       </div><!-- row  -->
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
          <div class="card">
            <div class="twentytwenty-container card-img-top">
              <!-- The before image is first -->
              <img src="<?php the_field('before_image') ?>" />
              <!-- The after image is last -->
              <img src="<?php the_field('after_image') ?>" />
            </div>						
            <div class="card-body">
            <h5 class="card-title text-center">Recreation to Vector</h5>
          </div>
        </div>
       </div>
        <?php endwhile; ?>
    </div>
</div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

</section>
