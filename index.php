<?php 	
    $css_escolhido = 'index';
    require_once('header.php');
    $home = get_template_directory_uri(); 
?>
    <!-- Conteudo principal -->
    <div class="home-main pb-5">
        <div class="container vertical-center">
            <div class="row">
                <div class="col-md-12" align="center">
                    <h1 class="home-titulo">SINGULAR AUTOMAÇÕES</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3"></div>
                <div class="col-md-6"  align="center">
                    <p class="mx-auto home-chamada-principal"> Estilo de vida, inspirado por idéias que prometem mais conforto, 
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
    </div>

    <!-- Painel com solucoes cadastradas -->
    <div style="background-color: #ffffff;" class="home-solucoes container-fluid mt-3">
        <div class="row mb-4">
            <div class="col-md-12" align="center">
                <p class="home-chamada-solucoes-produtos-1">NOSSAS <span class="home-chamada-solucoes-produtos-2">SOLUÇÕES</span></p>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6"  align="center">
                <p class="mx-auto home-texto-solucoes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas leo a 
                    lobortis feugiat. Sed aliquam scelerisque sapien molestie cursus. In id malesuada est, eget porta purus.
                    Fusce neque odio, mollis quis dictum eget, ultrices ut nulla. Mauris tellus mauris, lacinia at ultricies eget, congue fermentum diam.</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <!-- Carregamento das soluções cadastradas -->
        <?php 
        $args = array( 'post_type' => 'solucao', 'posts_per_page' => 5 );            
		$loop = new WP_Query( $args );
		if( $loop->have_posts() ) { 
            $counter = 0;
            ?>
		<?php while( $loop->have_posts() ) {
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
                            <a href="<?= the_permalink();?>">
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
                        <p class="home-chamada-solucoes-produtos-1">NOSSOS <span class="home-chamada-solucoes-produtos-2">PRODUTOS</span></p>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6"  align="center">
                        <p class="mx-auto home-texto-solucoes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas leo a 
                            lobortis feugiat. Sed aliquam scelerisque sapien molestie cursus. In id malesuada est, eget porta purus.
                            Fusce neque odio, mollis quis dictum eget, ultrices ut nulla. Mauris tellus mauris, lacinia at ultricies eget, congue fermentum diam.</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <!-- Marketing Icons Section -->
            <div class="container">
                <div class="row" style="min-height: 200px">
                    <div class="col-md-3 col-xs-1 mb-4"></div>
                    <div class="col-md-2 mb-0 p-0">
                            <a href="<?=get_page_link_by_slug('iluminacao')?>">
                                <img src="<?=$home?>/assets/imagens/botao_produto.png" alt="Card image cap">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 mb-0 p-0">
                    </div>
                    <div class="col-md-2 mb-0 p-0">
                    </div>
                    <div class="col-md-3 col-xs-1 mb-4"></div>
                </div>
                <div class="row" style="min-height: 200px">
                    <div class="col-md-3 col-xs-1 mb-4"></div>
                    <div class="col-md-2 mb-4 p-0">
                    </div>
                    <div class="col-md-2 mb-4 p-0">
                    </div>
                    <div class="col-md-2 mb-4 p-0">
                    </div>
                    <div class="col-md-3 col-xs-1 mb-4"></div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <div class="home-blog container">
    </div>
    <footer class="py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white" style="font-size: 0.7rem">Rua Otacílio Mota, 109 - Engenheiro Luciano Cavalvante - Fortaleza CE | Fone: +55 (85) 3244-3637 singularautomacoes@gmail.com - Copyright &copy; Singular 2017</p>
        </div>
    </footer>
    <?php $home = get_template_directory_uri();?>
        <!-- Bootstrap core JavaScript -->
        <script src="<?= $home?>/assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= $home?>/assets/vendor/popper/popper.min.js"></script>
        <script src="<?= $home?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <?php wp_footer();?>
    </body>
</html>