<?php
get_header(); 
require 'views/menu_superior.html';
require get_template_directory() . '/vendor/autoload.php';
use projeto_financas\Controller\Artigo;
$artigo_controller = new Artigo;
echo $artigo_controller->exibirPost();
get_footer();

?>
