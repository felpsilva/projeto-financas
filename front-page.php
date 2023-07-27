<?php
$posts = get_posts();
$imgSrc = wp_get_attachment_image_src(get_post_thumbnail_id(12), 'teste');
?>
<?php get_header(); ?>
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
    <main class="content">
        <h1 class="center">InfoGrana te informa</h1>
        <h2>Seção de destaque</h2>
        <section class="secaoDestaque">
                <?php $post = $posts[0]; ?>
                <article>
                    <a href='<?php the_permalink() ?>'>
                        <div class="containDestaque">
                            <div class='img'>
                                <figure class="destaqueHome"style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                                    <div class='informacaoArtigo'>
                                        <h3>
                                            <?= $post->post_title ?>
                                        </h3>
                                    </div>
                                    <div class="destaqueSombra"></div>
                                </figure>
                            </div>
                        </div>
                    </a>
                </article>
        </section>
        <h2>Artigos recentes</h2>
        <section class="artigosRecentes">
            <?php for ($i = 0; $i < 2; $i++) { ?>
                <?php $post = $posts[$i]; ?>
                <a href='<?php the_permalink() ?>'>
                    <article class='conteiner'>
                        <div class='img2'></div>
                        <h3>
                            <?php echo $post->post_title ?>
                        </h3>
                        <p>
                            <?php echo $post->post_excerpt ?>
                        </p>
                    </article>
                </a>
            <?php }
            ;
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
    <footer>
        <h2>Contatos</h2>
    </footer>
</body>

</html>