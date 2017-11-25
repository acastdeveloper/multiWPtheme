<?php 
function mis_estilos() {
wp_register_style( 'mi-estilo', get_stylesheet_directory_uri() . '/assets/css/estilo.css' );

// Indicamos a WordPress que añada la hoja de estilos que hemos registrado a la página

wp_enqueue_style('mi-estilo');
    
}

add_action('wp_enqueue_scripts', 'mis_estilos');

?>
