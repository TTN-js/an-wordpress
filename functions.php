<?php
//import parent styles
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


//eyebrow menu fuctiontion
function register_my_menu() {
  register_nav_menu('eyebrow-menu',__( 'Eyebrow Menu' ));
}
add_action( 'init', 'register_my_menu' );

wp_nav_menu( array( 'theme_location' => 'eyebrow-menu', 'container_class' => 'site-header2' ) ); 

?>