<?php 
function mis_less() {
wp_register_style( 'mi-less', get_stylesheet_directory_uri() . '/assets/less/style.less' );

// Indicamos a WordPress que añada la hoja de estilos que hemos registrado a la página

wp_enqueue_style('mi-less');
    
}

add_action('wp_enqueue_scripts', 'mis_less');

?>
