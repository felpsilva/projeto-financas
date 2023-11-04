<?php
get_header();
require "views/menu_superior.html";
require get_template_directory() . '/vendor/autoload.php';
use projeto_financas\Controller\Diarios;
$diarios_controller = new Diarios;
echo $diarios_controller->listarDiarios(-1);
get_footer();
?>
