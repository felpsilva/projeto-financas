<?php
namespace projeto_financas\Controller;

use projeto_financas\models\diarioModel;

class Diario
{
  public $twig;
  public function __construct() {
    $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
    $this->twig = new \Twig\Environment($loader);
}

  public function exibirDiario(){
    global $post;
    $post_thumbnail_id = get_post_thumbnail_id();

    $post_id = get_the_ID();
    $diarioModel = new diarioModel;
    $resumo_diario = $diarioModel->obterDiario($post_id);
    $imagemDestacadaUrl = $diarioModel->obterIdImagemDestacada($post_thumbnail_id);
    $imagemDestacadaTitle = $diarioModel->obterTituloImagemDestacada($post_thumbnail_id);
    $nomeAutor = $diarioModel->obterNomeDoAutor($post->post_author);

    
    return $this->twig->render('diario.html', [
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