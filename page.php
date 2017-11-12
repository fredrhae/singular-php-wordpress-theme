<?php 	
$css_escolhido = 'page';
require_once('header.php');
$home = get_template_directory_uri(); 
?>

<?php
$post_slug = get_post_field( 'post_name', get_post() );
switch ($post_slug) {
	case 'solucoes':
			$titulo_container_principal = "SOLUÇÕES INTELIGENTES";
		break;
	case 'empresa':
			$titulo_container_principal = "SOBRE A EMPRESA";
		break;
	case 'arquitetos':
		$titulo_container_principal = "ARQUITETOS";
	break;
}

if( have_posts() ) 
	{
		while( have_posts() ) 
		{
			the_post(); 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				$imagem_destacada = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			} else {
				$imagem_destacada = $home . '/assets/imagens/background-home.png';
			}
			?>
			<!-- Conteudo principal -->
			<div class="container-principal" style="background-image: url(<?=$imagem_destacada?>);">
				<div class="container vertical-center">
					<div class="row">
						<div class="col-md-12" align="center">
							<h1 class="container-principal-titulo"><?=$titulo_container_principal?></h1>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-3"></div>
						<div class="col-md-6"  align="center">
							<p class="mx-auto container-principal-chamada"><?=get_the_content()?></p>
						</div>
						<div class="col-md-3"></div>
					</div>
					<?php 
					if( is_page('arquitetos') ) 
					{
					?>
					<div class="row mt-3">
						<div class="col-md-4 col-xs-2"></div>
						<div class="col-md-2 col-xs-4" align="center">
							<button type="button" class="btn btn-outline-secondary btn-block">Torne-se um</button>
						</div>
						<div class="col-md-2 col-xs-4" align="center">
							<button type="button" class="btn btn-outline-secondary btn-block">Assista o Vídeo</button>
						</div>
						<div class="col-md-4 col-xs-2"></div>
					</div>
					<?php 
					}
					?>
				</div>
			</div>
			<!-- Painel com background branco -->
			<div style="background-color: #ffffff;" class="container">
				<?php 
				if( is_page('arquitetos') ) {
				?>
				<!-- Titulo arquitetos -->
				<div class="row mb-4">
					<div class="col-md-12" align="center">
						<p class="chamada-solucoes-produtos-1">Nossos <span class="chamada-solucoes-produtos-2">arquitetos parceiros</span></p>
					</div>
				</div>
				<!-- Slider dos arquitetos -->
				<div class="row mb-4">
					<div class="col-md-12">
						<div id="myCarousel" class="carousel slide multi-item-carousel" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="w-100" src="http://placehold.it/300/f44336/000000" alt="First slide" style="height: 300px; width: 300px">
									<div class="carousel-caption d-none d-md-block">
										<h3>Ricardo Teixeira</h3>
										<p>Arquiteto designer de interiores</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="w-100" src="http://placehold.it/300/e91e63/000000" alt="Second slide" style="height: 300px; width: 300px">
									<div class="carousel-caption d-none d-md-block">
										<h3>Hidelbrando Silva</h3>
										<p>Arquiteto designer de interiores</p>
									</div>
								</div>
								<div class="carousel-item">
									<img class="w-100" src="http://placehold.it/300/9c27b0/000000" alt="Third slide" style="height: 300px; width: 300px">
									<div class="carousel-caption d-none d-md-block">
										<h3>Lorem Ipsum</h3>
										<p>Arquiteto designer de interiores</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<!-- Vantagens arquitetos -->
				<div class="row mb-4">
					<div class="col-md-12" align="center">
						<p class="chamada-solucoes-produtos-1">Vantagens e benefícios de <span class="chamada-solucoes-produtos-2">ser um associado</span></p>
					</div>
				</div>
				<?php 
				} 
				?>
				<?php 
				if( is_page('solucoes') ) {
				?>
					<div class="row my-4">
						<div class="col-md-12" align="center">
							<p class="chamada-solucoes-produtos-1">CONHEÇA TODAS AS <span class="chamada-solucoes-produtos-2">NOSSAS SOLUÇÕES</span></p>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-6"  align="center">
							<p class="mx-auto texto-solucoes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas leo a 
								lobortis feugiat. Sed aliquam scelerisque sapien molestie cursus. In id malesuada est, eget porta purus.
								Fusce neque odio, mollis quis dictum eget, ultrices ut nulla. Mauris tellus mauris, lacinia at ultricies eget, congue fermentum diam.</p>
						</div>
						<div class="col-md-3"></div>
					</div>
					<!-- Carregamento das soluções cadastradas -->
					<?php 
					$args = array( 'post_type' => 'solucao', 'order' => 'ASC' );            
					$loop = new WP_Query( $args );
					if( $loop->have_posts() ) { 
						$counter = 0;
						?>
					<?php while( $loop->have_posts()) {
						// Flag para indicar se a solucao vai ser exibida na direita ou a esquerda
						$alignRight = $counter%2 != 0;
						$loop->the_post(); ?>
						<div class="full-image-background" style="background-image: url(<?=the_post_thumbnail_url()?>)">
							<div class="container vertical-center">
								<div class="row">
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
								<div class="row">
									<?php if($alignRight) { ?>
										<div class="col-md-8 col-xs-8"></div>
									<?php
									}
									?>
									<div class="col-md-4 col-xs-8 texto-solucao block-with-text mb-4">
										<?php the_content();?>
									</div>
								</div>
								<div class="row">
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
				} ?>
			</div>
<?php	}
	}
?>
<?php get_footer();?>