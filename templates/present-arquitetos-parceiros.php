<?php
?>
<div class="d-flex justify-content-center mb-4">
	<div class="col-md-6">
		<div id="myCarousel" class="carousel slide multi-item-carousel" data-ride="carousel">
			<ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php 
                $count_programacao = wp_count_posts('arquiteto');
                for($i = 1; $i < $count_programacao; $i++) {?>
                    <li data-target="#myCarousel" data-slide-to="<?=$i?>"></li>
                <?php
                }?>
			</ol>
			<div class="carousel-inner">
				<!-- Carregamento dos arquitetos cadastradas -->
				<?php 
				$args = array( 'post_type' => 'arquiteto', 'order' => 'ASC' );            
				$loop = new WP_Query( $args );
				$firstItem = true;
				if( $loop->have_posts() ) { 
					?>
				<?php while( $loop->have_posts()) {
					$loop->the_post();
					$programacao_meta_data = get_post_meta(  get_the_ID() );						
					$carousel_class = '';
					if($firstItem){
						$carousel_class = "carousel-item active";
						$firstItem = false;
					} else {
						$carousel_class = "carousel-item";                         
					}
					?>
					<div class="<?=$carousel_class?>">
                       <div class="row py-4">
                            <div class="col-sm-4 text-center">
                                <img class="img-circle" src="<?=the_post_thumbnail_url()?>" style="width: 150px;height:150px;">
                            </div>
                            <div class="col-sm-8">
                                <p class="mx-auto chamada-texto-cinza"><?=the_content();?></p>
                                <small><?=the_title();?></small>
                            </div>
                        </div>
					</div>
					<?php
					} 
				} ?>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="transform: translate(-58%,0%);">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="transform: translate(68%,0%);">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>