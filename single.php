<?php 	
    $css_escolhido = 'single';
    require_once('header.php');
?>

<?php 
    if( have_posts() ) 
    {
        while( have_posts() ) 
        {
            the_post(); 
            $imagem_destacada = wp_get_attachment_url( get_post_thumbnail_id($post->ID));                
            ?>
            <div class="container-principal pb-5">
                <div class="wrapper col-md-12 px-0 mb-3">
                    <img class="img-responsive" src="<?=$imagem_destacada?>" >
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <section class="chamada-principal">
                            <h1><?php the_title(); ?></h1>
                        </section>
                        <section class="single-solucao-geral">
                            <div class="single-solucao-descricao">
                                <?php the_content(); ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    <?php 
        }
    } 
    ?>
<?php get_footer()?>