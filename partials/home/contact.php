<!-- Contact -->

<section id="contact" class="contact">
  <div class="section__header">
    <h2 class="section__heading">Contact</h2>
    <div class="section__heading--sub">
    To get in touch regarding a project or full-time employment, please fill out the awesome form below.
    </div>
  </div>

  <div class="container contact__container">
    <div class="row">
      <div class="col-md-8 offset-md-2 contact__form">
        <?php $code = get_field('contact_code');
        echo do_shortcode($code);
        ?>
      </div>
    </div>
  </div>
</section>  
