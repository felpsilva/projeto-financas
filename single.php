<?php get_header(); ?>
<?php
$img_id = get_post_thumbnail_id();
$img_title = get_post_meta($img_id, '_wp_attachment_image_alt', true)
?>

<body>
<?php while (have_posts()) : the_post(); ?>
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
    <main class="contentArtigo">
        <section  class="contentGeral">
            <article>
                <h1>
                    <?php the_title() ?>
                </h1>
                <p class="resumo">
                    <?php the_excerpt() ?>
                </p>
                <p class="autor">Por: <?php the_author(); ?></p>
                <p class="data">Data de publicação: <?php the_time('d/m/Y - H:i'); ?></p>    
                <div class="imgPost"><img src="<?php the_post_thumbnail_url()?>" alt="<?= $img_title?>"></div>
                <div class="ads-horizontal"></div>
                <?php the_content() ?>
            </article>
            <aside><div class ="ads-vertical">ads</div></aside>
        </section>
    </main>
    <?php endwhile; ?>
    <footer>
        <h2>Contatos</h2>
    </footer>
</body>

</html>