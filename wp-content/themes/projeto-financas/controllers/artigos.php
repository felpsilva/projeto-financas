<?php
 require './vendor/autoload.php';

 $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto-financas/views');
 $twig   = new \Twig\Environment($loader, [
  'cache' => 'wp-content/themes/projeto-financas/views/cache',
  'cache' => false,
 ]);

 $template = $twig->load('menu-superior.html');

 $dados = array(
  "nome"  =>  "Felipe",
  "idade"  =>  22,
 );

 echo $template->render($dados);