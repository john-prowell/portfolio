<!-- Footer -->

<footer class="footer">
      <div class="container">
      <div class="footer__social">
          <!-- <a href="https://github.com/john-prowell" target="_blank"
            ><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#github-logo"></use></svg
          ></a> -->
          <a href="https://www.linkedin.com/in/john-prowell/">
            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#linkedin-logo"></use></svg
          ></a>
        </div>
        <div class="footer__links">          
          <a href="#about" class="footer__link">About </a><span>|</span>
          <a href="#skills" class="footer__link">Skills </a><span>|</span>
          <a href="#portfolio" class="footer__link">Portfolio </a><span>|</span>
          <a href="#contact" class="footer__link">Contact</a>
        </div>        
        
        <div class="footer__copyright">© <?php echo date("Y"); ?> John Prowell</div>
      </div>
      <a id="backToTop" title="Back to top" href="#">&#10148;</a>
    </footer>
    
<?php wp_footer(); ?>
</body>
</html>