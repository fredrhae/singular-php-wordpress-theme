<?php
require_once('header.php');
$home = get_template_directory_uri();

function get_empresa_body_content() { 
global $home;
$text_about_quem_somos = '';
$text_about_missao = '';
$text_about_visao = '';
$text_about_valores = '';
$attachments = new Attachments( 'my_attachments' );
if( $attachments->exist() ) :
    $my_index = 0; // index of text about schedule
    if( $attachment = $attachments->get_single( $my_index ) ) :
        if( $attachments->type($my_index) == 'text') :
            $text_about_quem_somos = read_content_from_text_file($attachments->url( $my_index ));
        endif;									
    endif;

    $my_index = 1; // index of text about schedule
    if( $attachment = $attachments->get_single( $my_index ) ) :
        if( $attachments->type($my_index) == 'text') :
            $text_about_missao = read_content_from_text_file($attachments->url( $my_index ));
        endif;									
    endif;
    
    $my_index = 2; // index of text about schedule
    if( $attachment = $attachments->get_single( $my_index ) ) :
        if( $attachments->type($my_index) == 'text') :
            $text_about_visao = read_content_from_text_file($attachments->url( $my_index ));
        endif;									
    endif;

    $my_index = 3; // index of picture schedule
    if( $attachment = $attachments->get_single( $my_index ) ) :
        if( $attachments->type($my_index) == 'text') :
            $text_about_valores = read_content_from_text_file($attachments->url( $my_index ));
        endif;									
    endif;
endif;	
?>    
<!-- Painel com background branco -->
<div style="background-color: #ffffff;" class="container">
	<!-- Titulo quem somos -->
	<div class="row mx-0 mb-4">
		<div class="col-md-6">
			<img class="img-fluid" src="<?=$home?>/assets/imagens/pages/empresa/logo_grande.png" alt="">					
		</div>
		<div class="col-md-6 mt-4">
			<h2 class="chamada-titulo-empresa">Quem somos nós</h2>
			<div class="row mx-0">
				<div class="col-md-4 px-0">
					<hr style="border-top: 3px solid #13AFE6;"/>
				</div>
				<div class="col-md-8 px-0">
					<hr style="border-top: 3px solid #D1C8C9;"/>
				</div>
			</div>
			<p class="chamada-descricao-empresa"><?=$text_about_quem_somos?></p>
		</div>
	</div>
	<div class="d-flex flex-row justify-content-center mb-4">
		<div class="row mx-0">
			<div class="col-md-4 col-xs-12 portfolio-item">
				<div class="card h-100 p-4">
					<a href="#" align="center"><img class="card-img-top my-4" align="center" style="width: 100px; height: 100px" src="<?=$home?>/assets/imagens/pages/empresa/missao.png" alt=""></a>
					<div class="card-block">
						<h4 class="card-title chamada-titulos-azul" align="center">Missão</h4>
						<p class="card-text my-4"><?=$text_about_missao?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 portfolio-item">
				<div class="card h-100 p-4">
					<a href="#" align="center"><img class="card-img-top my-4" align="center" style="width: 143px; height: 100px" src="<?=$home?>/assets/imagens/pages/empresa/visao.png" alt=""></a>
					<div class="card-block">
						<h4 class="card-title chamada-titulos-azul" align="center">Visão</h4>
						<p class="card-text my-4"><?=$text_about_visao?></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 portfolio-item">
				<div class="card h-100 p-4">
					<a href="#" align="center"><img class="card-img-top my-4" align="center" style="width: 88px; height: 100px" src="<?=$home?>/assets/imagens/pages/empresa/valores.png" alt=""></a>
					<div class="card-block">
						<h4 class="card-title chamada-titulos-azul" align="center">Valores</h4>
						<p class="card-text my-4"><?=$text_about_valores?></p>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="row mx-0 mb-4">
	<div class="col-md-12" align="center">
		<p class="chamada-titulos-cinza">Conheça a <span class="chamada-titulos-azul">Singular Automações</span></p>
	</div>
</div>
<div class="container-video">
	<iframe src="//www.youtube.com/embed/yCOY82UdFrw" frameborder="0" allowfullscreen class="video"></iframe>
</div>
<?php 
}
