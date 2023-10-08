<?php

namespace projeto_financas\Controller;

use projeto_financas\Model\PostModel;

class Artigo {
  private $twig;

  public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
      $this->twig = new \Twig\Environment($loader);
  }

  public function exibirPost() {
      global $post; // Obtenha a variável global $post

      if ($post) {
          $postId = $post->ID; // Obtém o ID do post atual

          // Crie uma instância do modelo
          $postModel = new PostModel();

          // Use o modelo para obter os dados do post com base no ID
          $post = $postModel->obterPostPorId($postId);

          // Renderize a visualização (Twig) e passe os dados do post
          return $this->twig->render('single.html', [
              'titulo' => $post->post_title, // Substitua 'titulo' pelo campo real do título
              'resumo' => $post->post_excerpt, // Substitua 'resumo' pelo campo real do resumo
              'autor' => $post->post_author, // Substitua 'autor' pelo campo real do autor
              'data' => $post->post_date, // Substitua 'data' pelo campo real da data
              'conteudo' => $post->post_content, // Substitua 'conteudo' pelo campo real do conteúdo
          ]);
      } else {
          // Lidar com o caso em que $post não está disponível
          echo 'Post não encontrado';
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