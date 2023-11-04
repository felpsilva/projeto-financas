<?php 
get_header(); 
require "views/menu_superior.html";
require get_template_directory() . '/vendor/autoload.php';
use projeto_financas\Controller\Artigos;
$artigos_controller = new Artigos;
echo $artigos_controller->listarArtigos();
get_footer();
?>