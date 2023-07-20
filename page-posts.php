<?php
    $posts = get_posts();
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/wordpress/wp-content/themes/projeto-financas/styles/stylesGlobal.css?versao=<?= rand() ?>">
    <link rel="stylesheet"
        href="/wordpress/wp-content/themes/projeto-financas/styles/artigosStyle.css?versao=<?= rand() ?>">
    <title>InfoGrana | Artigos</title>

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
        </ul>

    </header>

    <main>
        <aside>
            <input type="search">
            <div class="ads-vertical">
                ads
            </div>

        </aside>
        <section>
            <h1>Artigos</h1>

            <?php // for ($i = 0; $i < count($posts); $i ++ ) { ?>
            <?php foreach ($posts as $post) { ?>

                <a href="<?php the_permalink()?>">
                    <article>
                        <div>   
                            <h2>
                                <?php echo $post->post_title ?>
                            </h2>
                            <p> <?php echo $post->post_excerpt?></p>
                        </div>
                    </article>
                </a>

            <?php } ?>

        </section>

    </main>
    <footer>
        <h2>Contatos</h2>
    </footer>

    </body>

</html>