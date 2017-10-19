<?php 	
$css_escolhido = 'page';
require_once('header.php');
?>

<main class="pagina-main">
	<article class="pagina">
		<h1 class="pagina-titulo">
			<?php the_title(); ?>
        </h1>

		<?php if( have_posts() ) {
			while( have_posts() ) {
				the_post(); ?>

			<div class="pagina-conteudo">
			 <?php the_content(); ?>
			</div>

		<?php	}
		} 
        ?>
    </article>
</main>

<?php get_footer();?>