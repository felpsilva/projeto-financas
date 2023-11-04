<?php
get_header(); 
require 'views/menu_superior.html';
require get_template_directory() . '/vendor/autoload.php';

use projeto_financas\Controller\Diario;

$resumo_diario = new Diario;

echo $resumo_diario->exibirDiario();

?>