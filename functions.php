<?php
add_theme_support('post-thumbnails');//add cadastro de imagens destacadas 

function theme_scripts() {
  wp_enqueue_style('stylesGlobal', get_template_directory_uri() .'/styles/stylesGlobal.css', [], '1.0.15');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function remove_admin_bar_styles() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('wp_enqueue_scripts', 'remove_admin_bar_styles');
?>
