<?php 	
$css_escolhido = 'single';
require_once('header.php');
$home = get_template_directory_uri();    

?>

<?php 
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
        if ( get_post_type( get_the_ID() ) == 'solucao' ) : ?>
            <!-- Conteudo principal da solucao-->
            <div class="container-principal full-image-background-principal-home" style="background-image: url(<?=$imagem_destacada?>);">
                <div class="d-flex justify-content-center flex-colum flex-wrap my-5">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="col-md-12" align="center">
                            <h1 class="container-principal-titulo"><?=the_title();?></h1>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center mt-5">
                    <div class="col-md-8"  align="left">
                        <p class="mx-auto container-principal-chamada"><?=get_the_content();?></p>
                    </div>
                    </div>
                </div>
            </div>
            <?php 
            $attachments = new Attachments( 'my_attachments' );
            if( $attachments->exist() ) {
                $attachment = $attachments->get_single(0)
                ?>
                <!-- Chamada para os clientes -->
                <div class="d-flex justify-content-center flex-column flex-wrap my-4">
                    <div class="col-md-12" align="center">
                        <img class="img-responsive my-4" align="center" style="width: 80px; height: 80px" src="<?=$attachments->url(0)?>" alt="">
                    </div>
                    <div class="col-md-12" align="center">
                        <?php 
                        $chamada_solucao = $attachments->field('title', 0);
                        $chamada_solucao_dividida = explode(" ", $chamada_solucao);
                        $total_palavras = count($chamada_solucao_dividida);
                        $index_parada_dividir_palavras = round($total_palavras/2);
                        $parte_azul_chamada = "";
                        $parte_cinza_chamada = "";               
                        for ($i = 0; $i <= $total_palavras; $i++) {
                            if($i < $index_parada_dividir_palavras) {
                                $parte_azul_chamada = $parte_azul_chamada . " " . $chamada_solucao_dividida[$i];
                            } else {
                                    $parte_cinza_chamada = $parte_cinza_chamada . " " . $chamada_solucao_dividida[$i];
                            }
                        }
                        ?>
                        <p class="chamada-titulos-cinza"><?php echo $parte_azul_chamada?> <span class="chamada-titulos-azul"><?=$parte_cinza_chamada?></span></p>
                        <div class="col-md-6"  align="center">
                                <p class="mx-auto texto-conteudo-cinza"><?=$attachments->field('caption', 0);?></p>
                        </div>
                    </div>
                </div>
                <!-- Carregamento das imagens da solução selecionada -->
                <?php 
                $counter = 0;
                $total_attachments = $attachments->total();
                for ($i = 1; $i <= $total_attachments; $i++) {
                    if( $attachment = $attachments->get_single( $i ) ) :
                        // Flag para indicar se a solucao vai ser exibida na direita ou a esquerda
                        $alignRight = $counter%2 != 0;?>
                        <div class="full-image-background" style="background-image: url(<?=$attachments->url($i)?>)">
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
                                        <h2 class="titulo-solucao mb-4"><?=$attachments->field('title', $i);?></h2>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <?php if($alignRight) { ?>
                                        <div class="col-md-8 col-xs-8"></div>
                                    <?php
                                    }
                                    ?>
                                    <div class="col-md-4 col-xs-8 texto-solucao block-with-text mb-4">
                                        <?=$attachments->field('caption', $i);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $counter = $counter + 1;
                    endif;
                }
            }
            // Slider com clientes satisfeitos
            get_template_part('/templates/present-testemunho-clientes');
            // Chamada para o showroom
            get_template_part('/templates/present-showroom-form');
        endif;
        ?>
    <?php 
    }
} 
get_footer()?>