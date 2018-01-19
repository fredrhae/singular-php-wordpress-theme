<?php 	
$css_escolhido = 'page';
require_once('header.php');
require_once('arquitetos.php');
require_once('empresa.php');
require_once('solucoes.php');
require_once('projetos.php');
require_once('home.php');
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
	case 'projetos':
		$titulo_container_principal = "PROJETOS REALIZADOS";
		break;
	case 'contatos':
		$titulo_container_principal = "ENTRE EM CONTATO";
		break;
	case 'home':
		$titulo_container_principal = "SINGULAR AUTOMAÇÕES";
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
			<div class="container-principal full-image-background-principal-home" style="background-image: url(<?=$imagem_destacada?>);">
				<div class="d-flex justify-content-center flex-column py-5" align="center">
					<div class="row mx-0">
						<div class="col-md-12 mt-5" align="center">
							<h1 class="container-principal-titulo"><?=$titulo_container_principal?></h1>
						</div>
					</div>
					<?php if(is_page('contatos') == false) {?>
					<div class="row mx-0 mt-3">
						<div class="col-md-2"></div>
						<div class="col-md-8 col-xs-12 container-principal-chamada mx-auto"  align="start">
							<?the_content();?>
						</div>
						<div class="col-md-2"></div>
					</div>
					<?php
					}
					if( is_page('arquitetos') ) 
					{
						get_architects_buttons_chamada_principal();
					}
					if( is_page('home')) {
						get_buttons_home_chamada_principal();
					}
					?>
				</div>
			</div>
			<?php 
			if( is_page('arquitetos') ) {
				get_architects_body_content();
			} 
			if( is_page('empresa') ) {
				get_empresa_body_content();
			}
			if( is_page('solucoes') ) {
				get_solucoes_body_content();
			} 
			if( is_page('projetos') ) {
				get_projetos_body_content();
			}
			if( is_page('contatos') ) {?>
				<div class="d-flex justify-content-center flex-column mt-5" align="center">
					<p class="mx-auto chamada-titulos-cinza">Envie<span class="chamada-titulos-azul"> sua mensagem</span></p>
					<?php
					if(isset( $_POST["button_pressed"])) {
						// Formulario contato
						$nome = sanitize_text_field( $_POST['form-nome']);
						$email = sanitize_email( $_POST['form-email']);
						$telefone = sanitize_text_field( $_POST['form-telefone']);
						$assunto = sanitize_text_field( $_POST['form-assunto']);
						$mensagem = sanitize_textarea_field( $_POST['form-mensagem']);
						$enviou = enviar_e_checar_email($nome, $email, $telefone, $assunto, $mensagem);
						if($enviou) { ?>
							<span class="email-sucesso">Sua intenção de contato foi registrada com sucesso.</span>
						<?php 
						} else {
						?>
							<span class="email-fracasso">Desculpe, ocorreu um erro, sua intenção de contato não foi feita!</span>
						<?php 
						}
					}
					?>
				</div>
				<div class="d-flex justify-content-center flex-column" align="center">
						<div class="col-md-4" align="center">
							<form method="post">
								<div class="form-nome">
									<input id="form-nome" type="text" placeholder="Seu nome" name="form-nome">
								</div>
								<div class="form-email">
									<input id="form-email" type="email" placeholder="Seu email" name="form-email">
								</div>
								<div class="form-telefone">
									<input id="form-telefone" type="number" placeholder="Seu telefone" name="form-telefone">
								</div>
								<div class="form-assunto">
									<input id="form-assunto" type="text" placeholder="Seu assunto" name="form-assunto">
								</div>
								<div class="form-mensagem">
									<textarea id="form-mensagem" type="text" style="overflow:hidden"
									placeholder="Sua mensagem" name="form-mensagem" class="input w-100" rows="10"></textarea>
								</div>             
								<button type="submit" class="btn btn-primary btn-block">Enviar mensagem</button>
								<input type="hidden" name="button_pressed" value="1" />
							</form>
						</div>
					<div class="d-flex justify-content-center flex-column mt-5" align="center">
						<div class="col-md-6" align="center">
							<p class="mx-auto chamada-titulos-cinza">Venha nos<span class="chamada-titulos-azul"> visitar</span></p>
						</div>
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.163561782555!2d-38.48499198562055!3d-3.7745665444650283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c745f8e45b2dc3%3A0xeb03795f21122743!2sR.+Otac%C3%ADlio+Mota%2C+109+-+Eng.+Luciano+Cavalcante%2C+Fortaleza+-+CE%2C+60811-060!5e0!3m2!1spt-BR!2sbr!4v1515903537102"
												width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			<?php
			}
			if( is_page('home') ) {
				get_home_content_body();
			}
			?>
<?php	}
	}
?>
<?php get_footer();


function get_contatos_body_content() {
	?>
	
	<?
	}