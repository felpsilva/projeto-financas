<?php
namespace projeto_financas\models;

class diarioModel
{
  public static function obterDiario($post_id){
    $diario = get_post($post_id);
    return $diario;
  }
  public function obterIdImagemDestacada($post_thumbnail_id){
    $imgDestaque = wp_get_attachment_image_src($post_thumbnail_id, 'full');
    if(isset($imgDestaque[0])){
      return $imgDestaque[0];
    }
  }

  public function obterTituloImagemDestacada($post_thumbnail_id){
    $tituloImgDestaque = get_the_title($post_thumbnail_id);
    return $tituloImgDestaque;
  }

  public function obterNomeDoAutor($autor_id){
    $nomeDoAutor = get_the_author_meta('display_name',$autor_id);
    return $nomeDoAutor;
  }


}