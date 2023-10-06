<?php  
namespace projeto_financas\Model;
class PostModel {
  public static function getAllPosts() {
      $posts = get_posts(array(
          'post_type' => 'post', // Tipo de post (pode ser personalizado)
          'numberposts' => -1,   // Obtenha todos os posts
      ));
      
      return $posts;
  }
}
?>