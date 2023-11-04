<?php

namespace projeto_financas\Controller;

use projeto_financas\models\Diarios_model;
use projeto_financas\Controller\Twig;

class Diarios
{
  public function listarDiarios(int $quantidade) {
    $twigController = new Twig;
    $diarios = new Diarios_model;
    echo $twigController->twig->render('diarios.html',['diarios' => $diarios->getPosts($quantidade)]);
  }

}