<?php

namespace projeto_financas\Controller;

use projeto_financas\models\Post_model;
use projeto_financas\Controller\Twig;
class Artigo {

  public function exibirPost() {
      global $post;
      $twigController = new Twig;

      if ($post) {
        $postId = $post->ID;
        $post_thumbnail_id = get_post_thumbnail_id();

        $postModel = new Post_model();

        $post = $postModel->obterPost($postId);
        $imagemDestacadaUrl = $postModel->obterIdImagemDestacada($post_thumbnail_id);
        $imagemDestacadaTitle = $postModel->obterTituloImagemDestacada($post_thumbnail_id);
        $nomeAutor = $postModel->obterNomeDoAutor($post->post_author);
        
        return $twigController->twig->render('single.html', [
            'titulo' => $post->post_title,
            'resumo' => $post->post_excerpt, 
            'autor' => $nomeAutor, 
            'data' => $post->post_date, 
            'conteudo' => $post->post_content, 
            'imagem_url'   => $imagemDestacadaUrl,
            'imagem_title' => $imagemDestacadaTitle,
        ]);
      } else {
          echo 'Artigo não encontrado';
      }
  }
}





















// class Artigo{
//     /**
//      * Método que retorna o conteúdo do artigo
//      */
//   public static function getPosts() {
    // $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
    
    // $twig = new \Twig\Environment($loader);

    // $template = $twig->load('single.html');
    // $dados = new PostModel;
    // $teste = $dados->getAllPosts();
    // $teste = $dados->getPotsId();
    // echo $twig->display($template, [
    // 'titulo'    => 'Título',
    // 'resumo'    => 'resumo',
    // 'autor'     => 'autor',
    // 'data'      => 'data',
    // 'conteudo'  => 'conteudo',
    // 'teste'     => var_dump($teste),
// ]);

//   }
// }




//  $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto-financas/views');
//  $twig   = new \Twig\Environment($loader, [
//   'cache' => 'wp-content/themes/projeto-financas/views/cache',
//   'cache' => false,
//  ]);

//  $template = $twig->load('menu-superior.html');

//  $dados = array(
//   "nome"  =>  "Felipe",
//   "idade"  =>  22,
//  );

//  echo $template->render($dados);