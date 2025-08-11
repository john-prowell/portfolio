<?php get_header(); ?>

 <!-- Content -->
<div class="content">

<?php 
get_template_part('partials/home/hero');
get_template_part('partials/home/about');
get_template_part('partials/home/portfolio');
get_template_part('partials/home/contact');
?>

</div><!-- /Content -->

<?php
// Load footer.html instead of footer.php
$footer_path = get_theme_file_path( 'parts/footer.html' );
if ( file_exists( $footer_path ) ) {
    echo do_blocks( file_get_contents( $footer_path ) );
    wp_footer();
} else {
    get_footer();
}
?>