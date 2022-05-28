<section id="skills" class="skills">
  <div class="section__header">
    <h2 class="section__heading">My Skills</h2>
    <p class="section__heading--sub">
      Brief list of skills & certifications.
    </p>
  </div>

  <div class="skills__dmarketing">
    <div class="container-fluid skills__dmarketing--heading">
      <div class="row">
        <div class="col-12">
        <h4 class="text-center">Digital Marketing</h4>        
        </div>
      </div>
    </div>

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

    <div class="skills__dmarketing-certs mb-3">
      <div class="skills__dmarketing-certs--icon">
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
</div>
  </div>

<?php
// Check rows exists.
if( have_rows('dm_files') ): ?>

<div class="container skills__dmarketing--examples mt-3">
  <div class="row">
    <h5 class="text-center mb-3">Example Campaign</h5>

<?php  
  // Loop through rows.
  while( have_rows('dm_files') ) : the_row();  
  // Do something...

$link = get_sub_field('dm_file_link');

if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
   
      <a class="d-flex justify-content-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      
<?php endif; ?>

    <!-- <div class="skills__dmarketing--ppc d-flex justify-content-center mt-3">
      <a class="d-flex" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
        <img class="pe-2" src="<?php echo esc_attr($icon); ?>" />
        <span><?php echo esc_html($title); ?></span>
      </a>       
    </div> -->

  <?php    
   endwhile;
   endif;
  ?>
    
    </div>
  </div>

</div> <!--skills__dmarketing -->

  

<div class="container-fluid skills__web mb-3">
    <div class="row">
      <div class="col-12">
      <h4 class="text-center">Web Development</h4>        
      </div>
    </div>
  </div>


<div class="container">      
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
