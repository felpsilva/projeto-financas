<?php

namespace projeto_financas\models;

class HomeModel
{
  public $posts;
  public $linkPost;
  public $imgDestaque;
  public $titulo;
  public $recentes;

  public function getPosts($ultimoArtigo){
    $this->posts = get_posts($ultimoArtigo);
    return $this->posts;
  }

  public function getLink($destaque){
    $this->linkPost = get_permalink($destaque);
    return $this->linkPost;
  }

  public function getImgDestaqueUrl($destaque){
    $this->imgDestaque = get_the_post_thumbnail_url($destaque->posts[0]);
    return $this->imgDestaque;
  }

  public function getTitulo(){
    $this->titulo = $this->posts[0]->post_title;
    return $this->titulo;
  }

  public function exibeRecentes(){
    $artigosRecentes = array(
      'post_type'     => 'post',
      'posts_per_page' => 2,
      'offset'        => 1
  );
  $artigosMaisRecentes = [];

  $artigosRecentesArray = get_posts($artigosRecentes);
  foreach($artigosRecentesArray as $artigoRecente){
    $artigosMaisRecentes[] = [
      'titulo_post'   => $artigoRecente->post_title,
      'resumo'        => $artigoRecente->post_excerpt,
      'data'          => $artigoRecente->post_date,
      'post_url'      => get_permalink($artigoRecente),
  
    ];

  }
  return $artigosMaisRecentes;
}

}