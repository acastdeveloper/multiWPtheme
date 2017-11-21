<?php 
function wptuts_scripts_basic()
{
    // Register the script like this for a plugin:
    //wp_register_script( 'custom-script', plugins_url( '/js/custom-script.js', __FILE__ ) );
    // or
    // Register the script like this for a theme:
    wp_register_script('h1', get_template_directory_uri().'/assets/js/h1.js');
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script('h1');
}
add_action('wp_enqueue_scripts', 'wptuts_scripts_basic');
?>
