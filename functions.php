<?php 
add_filter('show_admin_bar', '__return_false');

// WooCommerceサポート宣言
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}