<?php get_header(); 
       include "models/home.php";
       require "controller/Diarios.php";
       require "models/diarios.php";
       require get_template_directory() . '/vendor/autoload.php';
       use projeto_financas\Controller\Home;
       $home = new Home;
       echo $home->exibeDestaque();
       use projeto_financas\Controller\Diarios;
       $diarios = new Diarios;
       echo $diarios->listarDiarios(2);
       get_footer();

