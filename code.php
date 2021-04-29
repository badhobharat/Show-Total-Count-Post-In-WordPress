// Add Shortcode Post
function postcode() {
	$current_user = wp_get_current_user();
	if ( 0 == $current_user->ID ) {
	    // Not logged in.
	} else {
	    echo count_user_posts( $current_user->ID , $post_type = 'post' );
	}
}
add_shortcode( 'codepost', 'postcode' );
