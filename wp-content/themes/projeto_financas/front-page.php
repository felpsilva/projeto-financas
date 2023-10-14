<?php get_header(); ?>
<body>
<?php  include "models/home.php";
       require get_template_directory() . '/vendor/autoload.php';
       use projeto_financas\Controller\Home;
       $home = new Home;
       echo $home->exibeDestaque();
?>
</body>
