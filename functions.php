<?php
/**
 * Neubau child theme functions and definitions
 */

/*-----------------------------------------------------------------------------------*/
/* Include the parent theme style.css
/*-----------------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function diningtales_wrap_in_li($n)
{
    return('<li itemprop="ingredients recipeIngredient">'.$n.'</li>');
}

function neubau_shortcode_diningtales_ingredients($atts, $content = null) {
    $content = explode("\n", $content);
    $content = array_map("diningtales_wrap_in_li", $content);
    $content = implode("\n", $content);
    $content = str_replace('<br />', '', $content);
    $content = str_replace('<li itemprop="ingredients recipeIngredient"></li>', '', $content);
   return '<ul class="ingredients">' . do_shortcode( neubau_remove_wpautop($content) ) . '</ul>';
}
add_shortcode( 'ingredients', 'neubau_shortcode_diningtales_ingredients' );