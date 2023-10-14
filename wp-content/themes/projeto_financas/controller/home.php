<?php

namespace projeto_financas\Controller;
use projeto_financas\models\HomeModel;

class Home
{
  public $destaque;
  public $twig;
  public $recentes;

  public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
      $this->twig = new \Twig\Environment($loader);
  }
  public function exibeDestaque(){
    $ultimoArtigo = array(
      'post_type'     => 'post',
      'posts_per_page' => 1,
      'offset'        => 0
  );
    $this->destaque = new HomeModel;
    $this->destaque->getPosts($ultimoArtigo);

    $linkPost = $this->destaque->getLink($this->destaque->posts[0]);
    $urlImagemDestaque = $this->destaque->getImgDestaqueUrl($this->destaque);
    $tituloDestaque = $this->destaque->getTitulo();
    $this->recentes = new HomeModel;

    return $this->twig->render('home.html', [
      'link_post'   => $linkPost,
      'url_imagem'  => $urlImagemDestaque,
      'titulo_post' => $tituloDestaque,
      'artigos_mais_recentes' => $this->recentes->exibeRecentes()
    ]);
  }


}