<?php 
/*
 * Template Name: Website Project Page
 * Description: Custom pages for Website Projects 
 * Template Post Type: page, website 
*/

get_header(); ?>

<section class="project-hero container-fluid">
  <div class="container">
    <div class="row">      
      <div class="col">
        <div class="project-hero__content">
          <h1><?php the_field('website_name'); ?></h1>
          <div class="project-details__link">
            <?php display_project_link(); ?>
          </div>          
        </div>    
      </div>
    </div>
  </div>
</section>

<section class="project-details">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="project-details__image">
          <?php 
          $image = get_field('website_mockup_image');
          if (!empty($image)) { ?>
            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php } ?>
        </div>
      </div>      
    </div>
    
    <div class="row">
      <div class="col">
        <div class="project-details__overview">
          <h2>Project Overview</h2>
          <?php the_field('website_overview_text'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="project-details__tools-used">
          <h3>Skills</h3>
          <?php if (have_rows('website_tools')) { ?>
            <div class="about__skills">
              <?php while (have_rows('website_tools')) { the_row(); ?>
                <div class="about__skills-skill"><?php echo esc_html(get_sub_field('website_tool')); ?></div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="row">  
      <div class="col">
        <div class="project-details__link">
          <h3>Project Link</h3>
          <?php display_project_link(); ?>
        </div>
      </div>
    </div>    
  </div>
</section>

<?php get_footer(); ?>

<?php
function display_project_link() {
    $link = get_field('website_link');
    if ($link) { ?>
        <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noreferrer">Visit Project</a>
    <?php } else { 
        $postid_str = strval(get_the_ID()); ?>
        <!-- Button trigger for modal -->
        <a href="#" data-bs-toggle="modal" data-bs-target="<?php echo '#modal-id-' . esc_attr($postid_str); ?>">Visit Project</a>
        <?php include get_template_directory() . '/partials/home/modal.php'; ?>
    <?php }
}
?>
