<section id="skills" class="skills">
  <div class="section__header">
    <h2 class="section__heading">My Skills</h2>
    <p class="section__heading--sub">
      Brief list of skills & certifications.
    </p>
  </div>

  <div class="container-fluid skills__dmarketing">
    <div class="row">
      <div class="col-12">
      <h4 class="text-center">Digital Marketing</h4>        
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h5 class="text-center my-4">Certifications</h5>      
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
  <div class="row">
    <h4 class="text-center">Example PPC Campaign</h4>

    <?php

// Check rows exists.
if( have_rows('dm_files') ):
  
  // Loop through rows.
  while( have_rows('dm_files') ) : the_row();
  
        // Load sub field value.
        $file = get_sub_field('dm_file');
        $url = $file['url'];
        $title = $file['title'];
        $caption = $file['caption'];
        $icon = $file['icon'];
        $id = $file['id'];
        $mime = $file['mime_type'];
        
        if ($mime === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
          $icon = get_template_directory_uri() . '/assets/images/xlsx.svg';
        }
        // var_dump($file);    
        // Do something...
        ?>

        <div class="skills__dmarketing--ppc d-flex justify-content-center mt-3">
          <a class="d-flex" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
            <img class="pe-2" src="<?php echo esc_attr($icon); ?>" />
            <span><?php echo esc_html($title); ?></span>
          </a>       
        </div>
        
        <hr>

  <?php    
   endwhile;
   endif;
  ?>
    
    </div>
  </div>
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
