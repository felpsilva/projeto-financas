<?php

namespace projeto_financas\Controller;

use projeto_financas\models\Artigos_model;

class Artigos
{

  public function listarArtigos() {
    $model = new \projeto_financas\models\Artigos_model();
    $artigos = $model->getPosts();

    $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
    $twig = new \Twig\Environment($loader);
    $artigos = new Artigos_model;
    echo $twig->render('artigos.html',['artigos' => $artigos->getPosts()]);

  }


}
