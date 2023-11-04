<?php get_header(); 
       include "models/home.php";
       require "controller/Diarios.php";
       require "models/diarios.php";
       require get_template_directory() . '/vendor/autoload.php';
       use projeto_financas\Controller\Home;
       use projeto_financas\Controller\Diarios;
       $home = new Home;
       $diarios = new Diarios;
       echo $home->exibeDestaque();
       echo $diarios->listarDiarios(2);
       get_footer();

