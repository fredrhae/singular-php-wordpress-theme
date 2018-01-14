<?php 	
$css_escolhido = 'page';
require_once('header.php');
require_once('arquitetos.php');
require_once('empresa.php');
require_once('solucoes.php');
require_once('projetos.php');
$home = get_template_directory_uri();

$nome = $_POST['form-nome'];
$email = $_POST['form-email'];
$telefone = $_POST['form-telefone'];

$formularioEnviado = isset($nome) && isset($email) && isset($telefone);

if($formularioEnviado) {
	$enviou = enviar_e_checar_email($nome, $email, $telefone);

	if($enviou) { ?>
		<span class="email-sucesso">Seu e-mail foi enviado com sucesso!</span>
	<?php } else { ?>
		<span class="email-fracasso">Desculpe, ocorreu um erro, seu e-mail não foi enviado!</span>
	<?php } 
}
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
					<div class="row mx-0 mt-3">
						<div class="col-md-2"></div>
						<div class="col-md-8 col-xs-12"  align="start">
							<p class="mx-auto container-principal-chamada"><?=get_the_content()?></p>
						</div>
						<div class="col-md-2"></div>
					</div>
					<?php 
					if( is_page('arquitetos') ) 
					{
						get_architects_buttons_chamada_principal();
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
			?>
<?php	}
	}
?>
<?php get_footer();