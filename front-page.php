<?php
$posts = get_posts();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoGrana</title>
    <link rel="stylesheet"
        href="/wordpress/wp-content/themes/projeto-financas/styles/stylesGlobal.css?versao=<?= rand() ?>">
    <link rel="stylesheet"
        href="/wordpress/wp-content/themes/projeto-financas/styles/homeStyle.css?versao=<?= rand() ?>" />
</head>

<body>
    <header>
        <div>
            <div>
                Logo
            </div>
        </div>

        <ul>
            <li><a href="http://localhost/wordpress/">HOME</a></li>
            <li><a href="http://localhost/wordpress/posts">ARTIGOS</a></li>
            <li><a href="http://localhost/wordpress/diario/">RESUMO DIÁRIO</a></li>
            <li><a href="http://localhost/wordpress/sobre"> QUEM SOMOS</a></li>
            <li><a href="">CONTATO</a></li>
        </ul>
    </header>
    <main>
        <h1>InfoGrana te informa</h1>
        <h2>Seção de destaque</h2>
        <section class="secaoDestaque">
            <?php for ($i = 0; $i < 2; $i++) { ?>
                <?php $post = $posts[$i]; ?>
                <article>
                    <!-- lembra de mudar a unidade de medida para a div quando utilizar a tag img de fato  -->
                    <div class='img'></div>
                    <div class='informacaoArtigo'>
                        <a href='<?php the_permalink()?>'>
                            <h3>
                                <?php echo $post->post_title ?>
                            </h3>
                            <p>
                                <?php echo $post->post_excerpt ?>
                            </p>
                        </a>
                    </div>

                </article>
            <?php } ?>

        </section>
        <h2>Artigos recentes</h2>
        <section class="artigosRecentes">
            <?php for ($i = 0; $i < 2; $i++) { ?>
                <?php $post = $posts[$i]; ?>
                <article class='conteiner'>
                    <div class='img2'></div>
                    <a href='<?php the_permalink()?>'>
                        <h3>
                            <?php echo $post->post_title ?>
                        </h3>
                        <p>
                            <?php echo $post->post_excerpt ?>
                        </p>
                    </a>
                </article></a>
            <?php };
             ?>

        </section>
        <h2>Resumo diário</h2>
        <section>
            <article class="resumoDiario">
                <h3>titulo de resumo diário</h3>
                <p>corpo de resumo diário</p>
            </article>
        </section>
    </main>
</body>

</html>