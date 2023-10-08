<?php  
namespace projeto_financas\Model;

class PostModel {

  private $posts;
  public function obterPostPorId($post_id) 
  {
       return  get_post($post_id);
      
  }
}
?>