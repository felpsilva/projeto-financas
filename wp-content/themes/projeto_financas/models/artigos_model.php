<?php

namespace projeto_financas\models;

class Artigos_model
{
  
  public function getPosts(){
    $args  = [
      'post_type'     => 'post',
      'post_per_page' => -1
    ];


    $artigos = new \WP_Query($args);
    $posts = [];

    if($artigos->have_posts()){
      foreach ($artigos->posts as $post) {
        setup_postdata($post);

        $posts[] = [
        'titulo' => $titulo = get_the_title($post->ID),
        'resumo' => $resumo = get_the_excerpt($post->ID),
        'data'   => $data =  get_the_date($post->ID),
        'link'   => $link = get_permalink($post->ID)
        ];


      }

    }
    return $posts;
  }
}