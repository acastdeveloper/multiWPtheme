<?php 
/* OPTIONTREE 2.6.0 ------------------------------ */

/**
Required: set ‘ot_theme_mode’ filter to true.
*/
add_filter('ot_theme_mode', '__return_true' );
/**

Required: include OptionTree.
*/
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php');

//OCULTAR PAGINA DE DOCUMENTACIO(poner en false)
add_filter('ot_show_pages','__return_true'); 
add_filter( 'ot_show_new_layout', '__return_true' );

/* END OPTIONTREE 2.6.0 --------------------------- */
?>
