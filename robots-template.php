<?php
function ikva_remove_robots_meta() {
	return null;
}

add_filter('wpseo_robots', 'ikva_remove_robots_meta');
add_filter('wpseo_googlebot', 'ikva_remove_robots_meta');
add_filter('wpseo_bingbot', 'ikva_remove_robots_meta');
add_filter( 'wpseo_canonical', '__return_false' );
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
