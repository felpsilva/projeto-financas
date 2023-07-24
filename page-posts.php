<?php
    $posts = get_posts();
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

    <main class="content100 sobreFlex">
        <aside>
            <input type="search">
            <div class="ads-vertical">
                ads
            </div>

        </aside>
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