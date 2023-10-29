<?php

namespace projeto_financas\Controller;

use projeto_financas\models\Diarios_model;

class Diarios
{

  public function listarDiarios(int $quantidade) {
    $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
    $twig = new \Twig\Environment($loader);
    $diarios = new Diarios_model;
    echo $twig->render('diarios.html',['diarios' => $diarios->getPosts($quantidade)]);

  }


}