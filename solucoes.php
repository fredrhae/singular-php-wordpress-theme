<?php
require_once('header.php');
$home = get_template_directory_uri();

function get_solucoes_body_content() { 
	global $home;
	?>
	<div class="row mx-0 my-4">
		<div class="col-md-12" align="center">
			<p class="chamada-titulos-cinza">CONHEÇA TODAS AS <span class="chamada-titulos-azul">NOSSAS SOLUÇÕES</span></p>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6"  align="center">
			<p class="mx-auto texto-conteudo-cinza">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas leo a 
				lobortis feugiat. Sed aliquam scelerisque sapien molestie cursus. In id malesuada est, eget porta purus.
				Fusce neque odio, mollis quis dictum eget, ultrices ut nulla. Mauris tellus mauris, lacinia at ultricies eget, congue fermentum diam.</p>
		</div>
		<div class="col-md-3"></div>
	</div>
	<!-- Carregamento das soluções cadastradas -->
	<?php get_solucoes(-1);
}

function get_solucoes($posts_per_page) {
	$args = array( 'post_type' => 'solucao', 'posts_per_page' => $posts_per_page, 'order' => 'ASC' );            
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ) { 
		$counter = 0;
		while( $loop->have_posts()) {
		// Flag para indicar se a solucao vai ser exibida na direita ou a esquerda
		$alignRight = $counter%2 != 0;
		$loop->the_post(); ?>
		<div class="full-image-background" style="background-image: url(<?=the_post_thumbnail_url()?>)">
			<div class="container vertical-center">
				<div class="row mx-0">
					<?php if($alignRight) {
						$style_title = "right";
						?>
						<div class="col-md-6 col-xs-4"></div>
					<?php
					} else {
						$style_title = "left";
					}
					?>
					<div class="col-md-6 col-xs-8" align="<?=$style_title?>" >
						<h2 class="titulo-solucao mb-4"><?php the_title();?></h2>
					</div>
				</div>
				<div class="row mx-0">
					<?php if($alignRight) { ?>
						<div class="col-md-8 col-xs-8"></div>
					<?php
					}
					?>
					<div class="col-md-4 col-xs-8 texto-solucao block-with-text mb-4">
						<?php the_content();?>
					</div>
				</div>
				<div class="row mx-0">
					<?php if($alignRight) { ?>
						<div class="col-md-10 col-xs-8"></div>
					<?php
					}
					?>
					<div class="col-md-2 col-xs-4" align="center">
						<a href="<?= the_permalink();?>" style="text-decoration: none">
							<button type="button" class="btn btn-outline-secondary btn-block">Saiba mais</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php
		$counter = $counter + 1;
		} 
	}
}
