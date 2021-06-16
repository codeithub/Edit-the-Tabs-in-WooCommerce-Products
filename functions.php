//Rename WooCommerce Tabs - this code renames tabs - just include the tab line you want renamed and change the name in paranthesis, ie 'More Information' etc

add_filter( 'woocommerce_product_tabs', 'codeithub_woo_rename_tabs', 98 );

function codeithub_woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'More Information' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
	$tabs['additional_information']['title'] = __( 'Product Description' );	// Rename the additional information tab

	return $tabs;

}
