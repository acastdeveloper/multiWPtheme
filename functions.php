<?php
/* INTEGRAR OPTION TREE AL TEMA */

 /* Theme options */
require_once(get_template_directory().'/option-tree/ot-loader.php');

//INTEGRATE OPTION TREE
add_filter('ot_theme_mode','__return_true');

//OCULTAR PAGINA DE DOCUMENTACIO
add_filter('ot_show_pages','__return_true');
add_filter( 'ot_show_new_layout', '__return_true' );
 

 
 

/* MENUS */
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




/* WIDGETS */
/*
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>'
   ) 
);    
    
  register_sidebar(
   array(
       'name'          => __( 'Topbar' ),
       'id'            => 'topbar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>'
   ) 
);    
    
    
}

//INICIAR mis_widgets();
add_action('init','mis_widgets');
