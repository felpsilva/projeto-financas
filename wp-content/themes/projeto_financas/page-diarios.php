<?php get_header();
$diarios = get_posts([
    'post_type'     => 'diario',
    'post_per_page' => -1,
    'offset'        => 0
]);

require "views/menu_superior.html";
require get_template_directory() . '/vendor/autoload.php';
require "models/diarios.php";

use projeto_financas\Controller\Diarios;
$diarios_controller = new Diarios;
echo $diarios_controller->listarDiarios(-1);
get_footer();
?>

<body>



</body>

</html>