<?php

namespace projeto_financas\Controller;
use projeto_financas\models\Home_model;
use projeto_financas\controller\Diarios;
use projeto_financas\Controller\Twig;

class Home extends Diarios
{
  public $destaque;
  public $recentes;

  public function exibeDestaque(){
    $twigController = new Twig;

    $ultimoArtigo = array(
      'post_type'     => 'post',
      'posts_per_page' => 1,
      'offset'        => 0
  );
    $this->destaque = new Home_model;
    $this->destaque->getPosts($ultimoArtigo);

    $linkPost = $this->destaque->getLink($this->destaque->posts[0]);
    $urlImagemDestaque = $this->destaque->getImgDestaqueUrl($this->destaque);
    $tituloDestaque = $this->destaque->getTitulo();

    return $twigController->twig->render('home.html', [
      'link_post'   => $linkPost,
      'url_imagem'  => $urlImagemDestaque,
      'titulo_post' => $tituloDestaque,
      'artigos_mais_recentes' => $this->destaque->exibeRecentes()
    ]);
  }


}