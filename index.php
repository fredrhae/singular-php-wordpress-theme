<?php 	
    $css_escolhido = 'index';
    require_once('header.php');
    require_once('solucoes.php');
    $home = get_template_directory_uri(); 
?>
<!-- Conteudo principal -->
<div class="container-principal pb-5 mb-5" style="background-image: url(<?=$home?>/assets/imagens/background-home.png);">
    <div class="container vertical-center">
        <div class="row mx-0">
            <div class="col-md-12" align="center">
                <h1 class="container-principal-titulo">SINGULAR AUTOMAÇÕES</h1>
            </div>
        </div>
        <div class="row mx-0 mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6"  align="center">
                <p class="mx-auto container-principal-chamada"> Estilo de vida, inspirado por idéias que prometem mais conforto, 
                comodidade, segurança e muito mais felicidade para você e sua família.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
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
    </div>
</div>
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
</div>
<div class="home-blog container">
</div>
<?php get_footer(); ?>