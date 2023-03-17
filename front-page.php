<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoGrana</title>
    <link rel="stylesheet" href="/wordpress/wp-content/themes/projeto-financas/styles/stylesGlobal.css?versao=<?= rand() ?>">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/projeto-financas/styles/homeStyle.css?versao=<?= rand() ?>" />
</head>

<body>
    <header>
        <div>
            <div>
                Logo
            </div>
        </div>

        <ul>
            <li><a href="/wordpress/wp-content/themes/projeto-financas/front-page.php">HOME</a></li>
            <li><a href="/wordpress/wp-content/themes/projeto-financas/page-posts.php">ARTIGOS</a></li>
            <li><a href="./atualizacoes.html">RESUMO DIÁRIO</a></li>
            <li><a href="/wordpress/wp-content/themes/projeto-financas/page-sobre.php"> QUEM SOMOS</a></li>
            <li><a href="">CONTATO</a></li>
        </ul>
    </header>
    <main>
        <h1>InfoGrana te informa</h1>
        <h2>Seção de destaque</h2>
        <section class="secaoDestaque">
            <?php for($i = 0; $i < 2; $i++){
                echo "<article>
                        <!-- lembra de mudar a unidade de medida para a div quando utilizar a tag img de fato  -->
                        <div class='img'></div>
                        <div class='informacaoArtigo'>
                        <a href='/wordpress/wp-content/themes/projeto-financas/single.php'><h3>Lorem ipsum</h3>
                            <p>dolor sit amet consectetur adipisicing elit. Asperiores quos delectus quam harum aut numquam
                                dicta, aspernatur eligendi id enim. Sit at maiores nobis magnam delectus harum animi
                                laudantium quod?
                            </p></a>  
                        </div>
 
                        </article>";
            };
            ?>
        </section>
        <h2>Artigos recentes</h2>
        <section class="artigosRecentes">
        <?php for($i = 0; $i < 2; $i++){
                echo "<article class='conteiner'>
                        <div class='img2'></div>

                        <a href='/wordpress/wp-content/themes/projeto-financas/single.php'><h3>Lorem ipsum</h3>
                        <p>dolor sit amet consectetur adipisicing elit. Asperiores quos delectus quam harum aut numquam
                            dicta, aspernatur eligendi id enim. Sit at maiores nobis magnam delectus harum animi
                            laudantium quod?
                        </p></a>
                    </article>
                    </a>";
                }

        ?>

        </section>
    </main>
</body>

</html>