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
        <section>
            <article>
                <h1>
                    <?php the_title() ?>
                </h1>
                <p class="resumo">
                    <?php the_excerpt() ?>
                </p>
                <div class="imgPost"><figure style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
                <div class="ads-horizontal"></div>
                <?php the_content() ?>
            </article>
        </section>
    </main>
    <footer>
        <h2>Contatos</h2>
    </footer>

</body>

</html>