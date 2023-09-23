<?php  

abstract class ConteudoAbstrato{
  private $posts;

  public static function getPosts(){
    echo "retornando posts";
  }


};

ConteudoAbstrato::getPosts();

class Conteudo extends ConteudoAbstrato{
  public function getPosts(){
    echo "posts";
  }
}

?>