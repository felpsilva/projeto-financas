<?php

namespace projeto_financas\Controller;

use projeto_financas\models\Artigos_model;
use projeto_financas\Controller\Twig;

class Artigos
{

  public function listarArtigos(){
    $twigController = new Twig;
    $artigos = new Artigos_model;
    echo $twigController->twig->render('artigos.html',['artigos' => $artigos->getPosts()]);

  }


}
