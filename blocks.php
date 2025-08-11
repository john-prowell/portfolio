<?php
// Register Current Year Block in theme
function portfolio_register_current_year_block() {
    wp_register_script(
        'portfolio-current-year-block',
        get_template_directory_uri() . '/blocks/current-year/current-year.js',
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-i18n' ),
        filemtime( get_template_directory() . '/blocks/current-year/current-year.js' )
    );

    register_block_type( 'portfolio/current-year', array(
    'editor_script'   => 'portfolio-current-year-block',
    'render_callback' => 'portfolio_render_current_year',
    'supports'        => array(
        'align' => true, // Enables alignment controls
    ),
) );

}
add_action( 'init', 'portfolio_register_current_year_block' );

// Server-side render: outputs the actual current year
function portfolio_render_current_year() {
    return date( 'Y' );
}
