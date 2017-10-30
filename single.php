<?php 	
    $css_escolhido = 'page';
    require_once('header.php');
?>

<?php 
    if( have_posts() ) 
    {
        while( have_posts() ) 
        {
            the_post(); ?>
            <div class="container-principal pb-5">
                <div class="single-solucao-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="container">
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
    <?php 
        }
    } 
    ?>
<?php get_footer()?>