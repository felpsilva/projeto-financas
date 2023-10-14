<?php
get_header(); 
require 'views/menu_superior.html';
require get_template_directory() . '/vendor/autoload.php';
require 'models/artigo.php';

use projeto_financas\Controller\Artigo;

$artigo_controller = new Artigo;
echo $artigo_controller->exibirPost();

?>
