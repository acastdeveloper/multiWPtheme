<?php 

function my_customize_register( $wp_customize ) {
  $wp_customize->add_panel( 'my_custom_options', array(
    'title' => __( 'Mis Opciones', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options',
  ));
 
  // Section para Google Analytics
  $wp_customize->add_section( 'google_analytics_section' , array(
    'title' => __( 'Google Analytics', 'textdomain' ),
    'panel' => 'my_custom_options',
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));
 
  // Section para Redes Sociales
  $wp_customize->add_section( 'social_section' , array(
    'title' => __( 'Redes Sociales', 'textdomain' ),
    'panel' => 'my_custom_options',
    'priority' => 2,
    'capability' => 'edit_theme_options',
  ));
 
  //Google Analytics
  $wp_customize->add_setting( 'my_google_analytics', array(
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_google_analytics', array(
    'label' => __( 'Código de Google Analytics', 'textdomain' ),
    'section' => 'google_analytics_section',
    'priority' => 1,
    'type' => 'textarea',
  ));
 
  //Redes Sociales: Facebook
  $wp_customize->add_setting( 'my_facebook_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_facebook_url', array(
    'label' => __( 'Facebook URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 1,
    'type' => 'text',
  ));
 
  //Redes Sociales: Twitter
  $wp_customize->add_setting( 'my_twitter_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_twitter_url', array(
    'label' => __( 'Twitter URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 2,
    'type' => 'text',
  ));
 
  //Redes Sociales: Google Plus
  $wp_customize->add_setting( 'my_googleplus_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_googleplus_url', array(
    'label' => __( 'Google Plus URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 3,
    'type' => 'text',
  ));
    
    
    $wp_customize->add_panel( 'Colores', array(
    'title' => __( 'Colores', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options',
  ));
 
  // Section para Google Analytics
  $wp_customize->add_section( 'google_analytics_section' , array(
    'title' => __( 'Google Analytics', 'textdomain' ),
    'panel' => 'Colores',
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));
    
    
    
    
}
add_action( 'customize_register', 'my_customize_register' );



?>
