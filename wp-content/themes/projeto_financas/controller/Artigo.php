<?php

namespace projeto_financas\Controller;

class Artigo{
    /**
     * Método que retorna o conteúdo do artigo
     */
  public static function getPosts() {
    $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
    
    $twig = new \Twig\Environment($loader);

    $template = $twig->load('single.html');
    
    echo $twig->display($template, [
    'titulo'    => 'Título',
    'resumo'    => 'resumo',
    'autor'     => 'autor',
    'data'      => 'data',
    'conteudo'  => 'conteudo' 
]);

  }
}




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