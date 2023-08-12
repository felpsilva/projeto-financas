<?php get_header(); ?>
<?php
$img_id = get_post_thumbnail_id();
$img_title = get_post_meta($img_id, '_wp_attachment_image_alt', true)
?>

<body>
<?php while (have_posts()) : the_post(); ?>
    <?php  include  "views/menu-superior.php"?>
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
            <?php include "views/ads/ads-vertical.php"?>
        </section>
    </main>
    <?php endwhile; ?>
    <footer>
        <h2>Contatos</h2>
    </footer>
</body>

</html>