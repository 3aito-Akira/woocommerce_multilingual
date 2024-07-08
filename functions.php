<?php 

add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}


add_filter( 'template_include', function( $template ) {
    $default_file = WC_Template_Loader::get_default_file();
    
    if ( is_null( $default_file ) ) {
        echo "<p>\$default_file is null</p>";
    } elseif ( $default_file === '' ) {
        echo "<p>\$default_file is an empty string</p>";
    } else {
        echo "<p>default_file: $default_file</p>";
    }

    return $template;
});








