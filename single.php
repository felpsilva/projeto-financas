<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoGrana | Artigo</title>
    <link rel="stylesheet"
        href="/wordpress/wp-content/themes/projeto-financas/styles/stylesGlobal.css?versao=<?= rand() ?>">
    <link rel="stylesheet"
        href="/wordpress/wp-content/themes/projeto-financas/styles/artigoStyle.css?versao=<?= rand() ?>">
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
        <section>
            <article>
                <h1>
                    <?php the_title() ?>
                </h1>
                <p class="resumo">
                    <?php the_excerpt() ?>
                </p>
                <div class="img"></div>
                <div class="ads-horizontal"></div>
                <?php the_content() ?>
            </article>
        </section>
    </main>

</body>

</html>