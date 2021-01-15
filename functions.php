// Limit all WooCommerce product titles to max number of words

add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
    if ( ! is_singular( array( 'product' ) ) && get_post_type( $id ) === 'product' ) {
        return wp_trim_words( $title, 4, '...' ); // change last number to the number of words you want
    } else {
        return $title;
    }
}


// Limit all WooCommerce product titles to max number of characters

add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
    if ( ! is_singular( array( 'product' ) ) && get_post_type( $id ) === 'product' ) {
		return substr( $title, 0, 30); // change last number to the number of characters you want
    } else {
        return $title;
    }
}
