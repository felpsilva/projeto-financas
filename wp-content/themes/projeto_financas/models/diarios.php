<?php

namespace projeto_financas\models;

class Diarios_model
{
  
  public function getPosts(int $quantidade){
    $args  = [
      'post_type'     => 'diario',
      'posts_per_page' => $quantidade,
    ];


    $diarios = new \WP_Query($args);
    $postsList = [];

    if($diarios->have_posts()){
      foreach ($diarios->posts as $post) {
        setup_postdata($post);

        $postsList[] = [
        'titulo' => $titulo = get_the_title($post->ID),
        'resumo' => $resumo = get_the_excerpt($post->ID),
        'data'   => $data =  get_the_date('d/m/Y',$post->ID),
        'link'   => $link = get_permalink($post->ID)
        ];


      }
    }
    return $postsList;
  }
}