<?php
/*
WJCT Child functions
*/ 


/* 
Enqueue style & Googgle fonts
*/ 
add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'twentytwentyfive-child-style33', get_stylesheet_directory_uri() . '/style.css' );
  wp_enqueue_style( 'palette-mosiac', 'https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap' );
  wp_enqueue_style( 'oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap' );
});


function wcjt_append_footer_text( $block_content, $block ) {
    
    $footerOnly = false;
    $text_to_append = '';

    if ( $block['blockName'] === 'core/site-title') 
    {
        //lets target footer only (level 2) so it doesn't affect header
        if (isset($block['attrs']['level']) && $block['attrs']['level'] == 2)
        {
            $footerOnly = true;
        }    
        if ( $footerOnly ) {
            $text_to_append = '<p class="custom-footer-text">Built for WJCT skills test</p>';
        } 
        return $block_content . $text_to_append;
    }
    
    return $block_content;
}
add_filter( 'render_block', 'wcjt_append_footer_text', 10, 2 );
