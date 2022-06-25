<?php 
/*
 * Template Name: Contact Form Thank You
 * Description: Page redirected to after successful contact form submission.
*/ 
get_header(); ?>

 <!-- Content -->
 <div class="content">   
   <section class="thank-you hero">
     <div class="container">
       <div class="row">
         <div class="col-12">
         <div class="hero__content">                
          <h1 class="hero__heading">John Prowell</h1>
          <h3 class="hero__heading--sub">
          <?php the_field('hero_h3')?>
          </h3>          
        </div>
      </div>
     </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="thanks-message">
           <h2 class="text-center">Thank you!</h2>
           <p class="text-center">I've received your message and will respond shortly.</p>
          </div>
        </div>
      </div>
    </div>
</section>

</div><!-- /Content -->



<?php get_footer();
?>