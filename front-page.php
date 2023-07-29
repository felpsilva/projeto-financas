<?php
$posts = get_posts();
$imgSrc = wp_get_attachment_image_src(get_post_thumbnail_id(12), 'teste');
$args = array(
    'post_type'     => 'post',
    'posts_per_page' => 2,
    'offset'        => 1
);
$artigos_recentes = new WP_Query($args);
global $artigos_recentes
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

        <?php if ($artigos_recentes->have_posts()) :
        while ($artigos_recentes->have_posts()) : $artigos_recentes->the_post(); ?>
        <a href='<?php the_permalink() ?>'>
        <article class='conteiner'>
        <div class='img2'></div>
            <?php the_title('<h3>', '</h3>'); ?>
            <?php the_excerpt(); ?>
        </article>
        </a>
        <?php endwhile;
        endif;?>

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