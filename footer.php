<!-- Footer -->

<footer class="footer">
      <div class="container">
      <div class="footer__social">
          <!-- Uncomment if needed
          <a href="https://github.com/john-prowell" target="_blank">
            <svg><use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sprite.svg#github-logo"></use></svg>
          </a>
          -->
          <a href="https://www.linkedin.com/in/john-prowell/" target="_blank" aria-label="LinkedIn">
            <svg><use xlink:href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sprite.svg#linkedin-logo"></use></svg>
          </a>
        </div>
        <div class="footer__links">          
          <a href="<?php echo esc_url(get_site_url()); ?>/#" class="footer__link" aria-label="Home">Home </a><span>|</span>
          <a href="<?php echo esc_url(get_site_url()); ?>/#about" class="footer__link" aria-label="About">About </a><span>|</span>
          <a href="<?php echo esc_url(get_site_url()); ?>/#portfolio" class="footer__link" aria-label="Portfolio">Portfolio </a><span>|</span>
          <a href="<?php echo esc_url(get_site_url()); ?>/#contact" class="footer__link" aria-label="Contact">Contact</a>
        </div>        
        
        <div class="footer__copyright">© <?php echo date("Y"); ?> John Prowell</div>
      </div>
      <!-- Uncomment if needed
      <a id="backToTop" title="Back to top" href="#">&#10148;</a>
      -->
    </footer>
    
<?php wp_footer(); ?>
</body>
</html>