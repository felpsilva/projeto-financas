<?php
namespace projeto_financas\Controller;

use projeto_financas\models\diario_model;
use projeto_financas\Controller\Twig;

class Diario
{
  public function exibirDiario(){
    $twigController = new Twig;
    global $post;
    $post_thumbnail_id = get_post_thumbnail_id();

    $post_id = get_the_ID();
    $diarioModel = new diario_model;
    $resumo_diario = $diarioModel->obterDiario($post_id);
    $imagemDestacadaUrl = $diarioModel->obterIdImagemDestacada($post_thumbnail_id);
    $imagemDestacadaTitle = $diarioModel->obterTituloImagemDestacada($post_thumbnail_id);
    $nomeAutor = $diarioModel->obterNomeDoAutor($post->post_author);

    
    return $twigController->twig->render('diario.html', [
      'titulo'       => $resumo_diario->post_title,
      'resumo'       => $resumo_diario->post_excerpt, 
      'autor'        => $nomeAutor, 
      'data'         => $resumo_diario->post_date, 
      'conteudo'     => $resumo_diario->post_content,
      'imagem_url'   => $imagemDestacadaUrl,
      'imagem_title' => $imagemDestacadaTitle,

    ]);

  }
}

?>