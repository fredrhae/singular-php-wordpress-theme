<?php 	
    require_once('header.php');
    require_once('solucoes.php');
    $home = get_template_directory_uri(); 

function get_home_content_body() {
    global $home;
?>
<!-- Painel com solucoes cadastradas -->
<div style="background-color: #ffffff;" class="container-fluid">
    <div class="row mx-0 mb-4">
        <div class="col-md-12" align="center">
            <p class="chamada-titulos-cinza">NOSSAS <span class="chamada-titulos-azul">SOLUÇÕES</span></p>
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
    <?php get_solucoes(3);?>

    <div class="d-flex justify-content-center flex-row flex-wrap my-4">
        <div class="col-md-6" align="center">
            <img class="img-fluid p-4 w-100 h-100 m-0 p-0" src="<?=$home?>/assets/imagens/pages/home/celular.png" style="max-height: 500px;">
        </div>
		<div class="col-md-6" align="start">
			<h2 class="col-md-6 chamada-descricao-empresa mt-4" style="font-weight: bold;">SEU AMBIENTE SOB CONTROLE COM FACILIDADE</h2>
            <div class="col-md-8 mt-4 ">
                <p class="mx-auto texto-conteudo-cinza">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas leo a 
                lobortis feugiat. Sed aliquam scelerisque sapien molestie cursus.</p>
            </div>
            <div class="col-md-8 d-flex justify-content-center flex-row">
                <div class="col-md-6 col-xs-4" align="center">
                    <button type="button" class="btn btn-secondary btn-block">Saiba mais</button>
                </div>
            </div>
		</div>
	</div>
</div>
<?php 
}

function get_buttons_home_chamada_principal(){
    global $home;
    ?>
    <div class="row mx-0 mt-3">
        <div class="col-md-4 col-xs-2"></div>
        <div class="col-md-2 col-xs-4" align="center">
            <button type="button" class="btn btn-outline-secondary btn-block">Saiba mais</button>
        </div>
        <div class="col-md-2 col-xs-4" align="center">
            <button type="button" class="btn btn-outline-secondary btn-block">Assista o Vídeo</button>
        </div>
        <div class="col-md-4 col-xs-2"></div>
    </div>
<?php
}
?>