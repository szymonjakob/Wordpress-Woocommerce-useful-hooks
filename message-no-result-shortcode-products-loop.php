<?php
//You can use html inside 'YOUR_MESSAGE_HERE'
add_action( 'woocommerce_shortcode_products_loop_no_results', 'woocommerce_shortcode_products_loop_no_results', 10, 1 );
function woocommerce_shortcode_products_loop_no_results( $attributes ) {
    echo __( 'YOUR_MESSAGE_HERE', 'woocommerce' );
}
