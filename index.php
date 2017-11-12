<?php 	
    $css_escolhido = 'index';
    require_once('header.php');
    $home = get_template_directory_uri(); 
?>
<!-- Conteudo principal -->
<div class="container-principal pb-5 mb-5" style="background-image: url(<?=$home?>/assets/imagens/background-home.png);">
    <div class="container vertical-center">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1 class="container-principal-titulo">SINGULAR AUTOMAÇÕES</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6"  align="center">
                <p class="mx-auto container-principal-chamada"> Estilo de vida, inspirado por idéias que prometem mais conforto, 
                comodidade, segurança e muito mais felicidade para você e sua família.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row mt-3">
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
    <div class="row mb-4">
        <div class="col-md-12" align="center">
            <p class="chamada-solucoes-produtos-1">NOSSAS <span class="chamada-solucoes-produtos-2">SOLUÇÕES</span></p>
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
    $args = array( 'post_type' => 'solucao', 'posts_per_page' => 3, 'order' => 'ASC' );            
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
    ?>
</div>
<!-- Painel com produtos cadastrados -->
<div style="background-color: #ffffff" class="container-fluid mt-3">
    <div class="container">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12" align="center">
                    <p class="chamada-solucoes-produtos-1">NOSSOS <span class="chamada-solucoes-produtos-2">PRODUTOS</span></p>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6"  align="center">
                    <p class="mx-auto texto-solucoes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas leo a 
                        lobortis feugiat. Sed aliquam scelerisque sapien molestie cursus. In id malesuada est, eget porta purus.
                        Fusce neque odio, mollis quis dictum eget, ultrices ut nulla. Mauris tellus mauris, lacinia at ultricies eget, congue fermentum diam.</p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <!-- Portfólio produtos -->
        <div class="container mb-4">
            <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Projeto Um</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Projeto Dois</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Projeto Três</a>
                        </h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        </div>
    </div>
</div>
<div class="home-blog container">
</div>
<?php get_footer(); ?>