<?php
/*
Nome do modelo: Arquivos
*/
get_header(); ?>

<div id="container">
	<div id="conteúdo" papel="principal">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title('artigos'); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Arquivos por mês:</h2>
		<ul>
			<?php wp_get_archives('tipo=mensalmente'); ?>
		</ul>
		
		<h2>Arquivos por assunto:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #conteúdo -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
