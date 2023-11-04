<?php

namespace projeto_financas\Controller;

class Twig{
  public $twig;

  public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader('wp-content/themes/projeto_financas/views');
      $this->twig = new \Twig\Environment($loader);
  }
}

?>