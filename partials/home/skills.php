<section id="skills" class="skills">
  <div class="section__header" data-aos="fade-left" data-aos-duration="1000">
    <h2 class="section__heading">My Skills</h2>
    <p class="section__heading--sub">
      Brief list of skills and software.
    </p>
  </div>
  <!-- Experience List -->
  <div class="container my-4 skills__experience-list" data-aos="fade-up" data-aos-duration="1000">
    <div class="row">
      <div class="col-12">
        <h5 class="text-center mb-3">Experience</h5>
        <?php 
          // Check rows exists.
          if( have_rows('experience_list') ): ?>
        <ul>
          <?php
            // Loop through rows.
            while( have_rows('experience_list') ) : the_row();  
              // Load sub field value.
              $experienceItem = get_sub_field('experience_item');
              // Do something...
              ?>        
          <li><?php echo $experienceItem ?></li>
          <?php    
            endwhile;?>                
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="container">
  <hr>
  </div>
  <!-- Skills Lists with Icons -->
  <div class="container my-4">    
    <div class="row skills__list">
      <h5 class="text-center mb-3">Skills</h5>
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
      <div class="col-6 col-md-4 col-lg-3 skills__item" data-aos="fade-down-right" data-aos-duration="1000">
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
  <div class="container"><hr></div>
  <!-- Certifications -->
  <div class="container my-4">
    <div class="row">
      <h5 class="text-center mb-3">Certifications</h5>
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
        <div class="skills__certifications mb-3">
          <div class="skills__certifications--icon" data-aos="fade-up-left" data-aos-duration="1000">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#<?php echo $certIcon ?>"></use>
            </svg>
            <a class="skills__certifications--name" href="<?php echo esc_url($certLink) ?>" target="_blank">
            <?php echo $certName ?>
            </a>
          </div>
        </div>
        <?php    
          endwhile;
          endif;
          ?>
      </div>
    </div>
  </div>
</section>