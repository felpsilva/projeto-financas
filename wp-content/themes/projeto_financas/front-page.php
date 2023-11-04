<?php
get_header();
require "controller/Diarios.php";
require get_template_directory() . '/vendor/autoload.php';
use projeto_financas\Controller\Home;
use projeto_financas\Controller\Diarios;
$home = new Home;
$diarios = new Diarios;
echo $home->exibeDestaque();
echo $diarios->listarDiarios(2);
get_footer();

