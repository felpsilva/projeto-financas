<?php
    $posts = get_posts();
?>

<?php get_header(); ?>

<body>
<?php  include  "views/menu-superior.php"?>

    <main class="content100 sobreFlex">
    <?php include "views/ads/ads-vertical.php"?>
        <section class="content">
            <h1>Artigos</h1>

            <?php // for ($i = 0; $i < count($posts); $i ++ ) { ?>
            <?php foreach ($posts as $post) { ?>

                <a href="<?php the_permalink()?>">
                    <article>
                        <div class="postList">   
                            <h2>
                                <?php echo $post->post_title ?>
                            </h2>
                            <p> <?php echo $post->post_excerpt?></p>
                            <p class="data"><?php the_time('d/m/Y'); ?></p>    

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