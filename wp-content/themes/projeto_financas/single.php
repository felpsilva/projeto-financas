<!-- < ?php get_header(); ?> -->
<?php
// $img_id = get_post_thumbnail_id();
// $img_title = get_post_meta($img_id, '_wp_attachment_image_alt', true);
require get_template_directory() . '/vendor/autoload.php';

use projeto_financas\Controller\Artigo;

Artigo::getPosts();

?>
