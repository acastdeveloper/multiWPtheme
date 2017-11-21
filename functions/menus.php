<?php 

/* M E N U S --------------------------------------- */
//Este archivo nos permitirá crear zonas de menú y de widgets, así como personalizar algunos parámetros que WordPress trae por defecto.


/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}

//INICIAR mis_menus();
add_action( 'init', 'mis_menus' );

/* END MENUS ---------------------------------------- */


?>
