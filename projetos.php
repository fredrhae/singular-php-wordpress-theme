<?php
require_once('header.php');
$home = get_template_directory_uri();

function get_projetos_body_content() { 
	global $home;
	?>
	<!-- Carregamento dos projetos cadastrados -->
	<?php 
	$args = array( 'post_type' => 'projeto', 'order' => 'ASC' );            
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ) { 
		$counter = 0;
		while( $loop->have_posts()) {
		// Flag para indicar se a solucao vai ser exibida na direita ou a esquerda
		$alignRight = $counter%2 != 0;		
		$loop->the_post(); ?>
		<!-- Parte de carregamento dos projetos -->
		<div class="row mx-0 w-100 m-0 py-2 px-0">
			<?php if($alignRight) { ?>
				<div class="col-md-6 pr-2 pb-1 px-0">
					<?php
					$attachments = new Attachments( 'my_attachments' );
					if( $attachments->exist() ) : ?>
						<?php while( $attachments->get() ) : ?>
							<img class="img-fluid py-1" src="<?=$attachments->url()?>" alt="">
						<?php endwhile; ?>
					<?php endif; ?>			
				</div>
				<div class="col-md-6 pl-0 py-1 pr-0">
					<div class="d-flex flex-column align-items-center full-image-background h-100" style="background-image: url(<?=the_post_thumbnail_url()?>)">
						<div class="my-auto pt-5">
							<h2 class="titulo-solucao"><?php the_title();?></h2>
						</div>
						<div class="w-50 texto-solucao block-with-text my-auto">
							<?php the_content();?>
						</div>
					</div>
				</div>
			<?php 
			} else {
			?>
				<div class="col-md-6 pr-2 py-1 px-0">
					<div class="d-flex flex-column align-items-center full-image-background h-100" style="background-image: url(<?=the_post_thumbnail_url()?>)">
						<div class="my-auto pt-5">
							<h2 class="titulo-solucao"><?php the_title();?></h2>
						</div>
						<div class="w-50 texto-solucao block-with-text my-auto">
							<?php the_content();?>
						</div>
					</div>
				</div>
				<div class="col-md-6 pl-0 pr-0">
					<?php
					$attachments = new Attachments( 'my_attachments' );
					if( $attachments->exist() ) : ?>
						<?php while( $attachments->get() ) : ?>
							<img class="img-fluid py-1" src="<?=$attachments->url()?>" alt="">
						<?php endwhile; ?>
					<?php endif; ?>			
				</div>
			<?php 
			}
			?>
		</div>
		<?php
		$counter = $counter + 1;
		} 
	}
	?>
	<!-- Chamada para os clientes -->
	<div class="row mx-0 my-4">
		<div class="col-md-12" align="center">
			<p class="chamada-titulos-cinza"> Nossos clientes, <span class="chamada-titulos-azul">nossa família</span></p>
		</div>
	</div>
    <!-- Slider com clientes satisfeitos -->
	<?php get_template_part('/templates/present-testemunho-clientes');?>
	<!-- Chamada para o showroom -->
	<div class="row mx-0 my-4">
		<div class="col-md-12" align="center">
			<p class="chamada-titulos-cinza"> VISITE <span class="chamada-titulos-azul"> NOSSO SHOWROOM</span></p>
		</div>
	</div>
	<!-- Agendamento de visita e vídeo do showroom -->
	<div class="d-flex justify-content-center flex-wrap mb-4">
		<div class="col-md-4 col-xs-12 mb-5" align="center">
					<form method="post">
						<div class="col-md-12" >
							<div class="form-nome">
								<input id="form-nome" type="text" placeholder="Seu nome" name="form-nome">
							</div>
						</div>
						<div class="col-md-12" >
							<div class="form-email">
								<input id="form-email" type="email" placeholder="Seu email" name="form-email">
							</div>
						</div>
						<div class="col-md-12" >
							<div class="form-data-visita">
								<input id="form-data-visita" type="date" name="form-data-visita">
							</div>
						</div>
						<div class="col-md-12 col-xs-12" >
							<button type="submit" class="btn btn-block btn-primary">Agendar</button>
						</div>
					</form>
			</div>
			<div class="col-md-4 col-xs-12" align="center">
				<div class="container-video">
					<iframe src="//www.youtube.com/embed/yCOY82UdFrw" frameborder="0" allowfullscreen class="video"></iframe>
				</div>
			</div>
	</div>
<?php
}
