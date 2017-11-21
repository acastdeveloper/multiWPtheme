<?php 

/* WIDGETS ------------------------------------------- */
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


?>
