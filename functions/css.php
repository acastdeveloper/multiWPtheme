<?php 
add_action( 'wp_enqueue_scripts', 'agregar_hoja_estilos' );

function agregar_hoja_estilos() {
    wp_enqueue_style( 'prefix-style', plugins_url('assets/css/estilos.css', __FILE__) );
} 

?>
