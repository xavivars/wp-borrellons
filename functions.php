<?php
add_action( 'wp_enqueue_scripts', 'borrellons_estils' );
function borrellons_estils() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
?>
