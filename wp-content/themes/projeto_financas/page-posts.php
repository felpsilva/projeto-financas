<?php
    $posts = get_posts();
?>

<?php get_header(); ?>

<body>
<?php  
require "views/menu_superior.html";
require get_template_directory() . '/vendor/autoload.php';
require "models/artigos_model.php";

use projeto_financas\Controller\Artigos;
$artigos_controller = new Artigos;
echo $artigos_controller->listarArtigos();

?>
<footer>
    <h2>Contatos</h2>
</footer>

</body>

</html>