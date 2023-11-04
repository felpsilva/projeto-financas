<?php  
namespace projeto_financas\models;

class Post_model {

  public function obterPost($post_id){
       return  get_post($post_id);  
  }

  public function obterIdImagemDestacada($post_thumbnail_id){
    $imgDestaque = wp_get_attachment_image_src($post_thumbnail_id, 'full');
    return $imgDestaque[0];
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
?>