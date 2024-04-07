<!-- About Section -->
<section data-aos="fade-right" data-aos-duration="1000" id="about" class="about" data-bs-dismiss="offcanvas" data-bs-target>
  <div class="section__header">
    <h2 class="section__heading">About Me</h2>
    <p class="section__heading--sub">
      Always excited to learn, design and build new things.
    </p>
  </div>
  <div class="container">
    <div class="row">
      <!-- About Text -->
      <div class="col-md-6">
        <h3 class="mb-3">A brief intro...</h3>
        <div class="about__text"><?php the_field('about_section') ?></div>
      </div>
      <!-- Skills List -->
      <?php $skills = get_field('skill_list'); ?>
      <div class="col-md-6">
        <?php if ($skills) { ?>
          <h3 class="mb-4">My Skills</h3>
          <div class="about__skills">
            <?php foreach ($skills as $skill) { ?>
              <div class="about__skills-skill"><?php echo $skill['skill_name'] ?></div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>