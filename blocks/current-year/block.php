<?php
// Register Current Year Block with prefix/suffix
function portfolio_register_current_year_block() {
    wp_register_script(
        'portfolio-current-year-block',
        get_template_directory_uri() . '/blocks/current-year/current-year.js',
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-block-editor', 'wp-i18n' ),
        filemtime( get_template_directory() . '/blocks/current-year/current-year.js' )
    );

    register_block_type( 'portfolio/current-year', array(
        'editor_script'   => 'portfolio-current-year-block',
        'render_callback' => 'portfolio_render_current_year',
        'attributes'      => array(
            'align' => array(
                'type'    => 'string',
                'default' => 'left',
            ),
            'prefix' => array(
                'type'    => 'string',
                'default' => '© ',
            ),
            'suffix' => array(
                'type'    => 'string',
                'default' => '',
            ),
        ),
        'supports'        => array(
            'align' => true, // Enables alignment controls
        ),
    ) );
}
add_action( 'init', 'portfolio_register_current_year_block' );

// Server-side render: outputs prefix + year + suffix
function portfolio_render_current_year( $attributes ) {
    $align  = isset( $attributes['align'] ) ? 'text-align:' . esc_attr( $attributes['align'] ) . ';' : '';
    $prefix = isset( $attributes['prefix'] ) ? esc_html( $attributes['prefix'] ) : '';
    $suffix = isset( $attributes['suffix'] ) ? esc_html( $attributes['suffix'] ) : '';

    return '<p style="' . $align . '">' . $prefix . date( 'Y' ) . ( $suffix ? ' ' . $suffix : '' ) . '</p>';
}
