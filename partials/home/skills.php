<section id="skills" class="skills">
  <div class="section__header">
    <h2 class="section__heading">My Skills</h2>
    <p class="section__heading--sub">
      Brief list of skills & certifications.
    </p>
  </div>


<div class="container">
  <h4 class="text-center my-4">Certifications</h4>
    <div class="d-flex justify-content-between flex-wrap">

  <?php

// Check rows exists.
if( have_rows('certifications') ):
  
  // Loop through rows.
  while( have_rows('certifications') ) : the_row();

        // Load sub field value.
        $certName = get_sub_field('cert_name');
        $certIcon = get_sub_field('cert_icon');
        $certLink =  get_sub_field('cert_link');
        // Do something...
        ?>

        <div class="skills__certs mb-3">
          <div class="skills__certs--icon">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#<?php echo $certIcon ?>"></use>
            </svg>
            <a class="skills__certs--name" href="<?php echo esc_url($certLink) ?>" target="_blank">
              <?php echo $certName ?>
            </a>
          </div>
        </div>        
        
        <?php    
    endwhile;
    endif;
    ?>
  </div>
  <hr>
</div>


<div class="container">    
  <h4 class="text-center">Skills</h4>
    <div class="row skills__list">

<?php
// Check rows exists.
if( have_rows('skill_list') ):
  
  // Loop through rows.
  while( have_rows('skill_list') ) : the_row();

        // Load sub field value.
        $skillName = get_sub_field('skill_name');
        $skillIcon = get_sub_field('skill_icon');  
        // Do something...
        ?>

      <div class="col-6 col-md-4 col-lg-3 skills__item">
        <div class="skills__icon">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#<?php echo $skillIcon ?>"></use>
          </svg>
        </div>
        <p class="skills__name"><?php echo $skillName ?></p>
      </div>

      <?php    
    endwhile;
    endif;
    ?>
    </div>
</div>  
</section>
