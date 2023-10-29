<?php

namespace projeto_financas\models;

class Artigos_model
{

  public $args  = [
    'post_type'     => 'post',
    'post_per_page' => -1
  ];
  public $img;

  public function getPosts(){


    $artigos = new \WP_Query($this->args);
    $posts = [];

    if($artigos->have_posts()){
      foreach ($artigos->posts as $post) {
        setup_postdata($post);
        $tamanho = [300, 200];
        $thumbnail_id = get_post_thumbnail_id($post);
        $thumbnail = wp_get_attachment_image($thumbnail_id, $tamanho);

        $posts[] = [
        'titulo' => $titulo = get_the_title($post->ID),
        'resumo' => $resumo = get_the_excerpt($post->ID),
        'data'   => $data =  get_the_date('d/m/Y', $post->ID),
        'link'   => $link = get_permalink($post->ID),
        'imgUrl' => $thumbnail
        ];


      }

    }
    return $posts;
  }
}