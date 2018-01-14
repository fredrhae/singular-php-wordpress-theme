<?php
require_once('header.php');
$home = get_template_directory_uri();

function get_architects_body_content() {
	global $home;
	?>
	<!-- Painel com background branco -->
	<div class="container mt-5" style="background-color: #ffffff;">
		<!-- Titulo arquitetos -->
		<div class="row mx-0">
			<div class="col-md-12" align="center">
				<p class="chamada-titulos-cinza">Nossos <span class="chamada-titulos-azul">arquitetos parceiros</span></p>
			</div>
		</div>
		<!-- Slider dos arquitetos -->
		<?php get_template_part('/templates/present-arquitetos-parceiros');?>
		<!-- Vantagens arquitetos -->
		<div class="row mx-0 mb-4">
			<div class="col-md-12" align="left">
				<p class="chamada-titulos-cinza">VANTAGENS E BENEFÍCIOS DE <span class="chamada-titulos-azul">SER UM ASSOCIADO</span></p>
			</div>
        </div>
        
        <div class="row mx-0 mb-4">
			<div class="col-lg-4 col-sm-6 portfolio-item mt-3">
				<div class="card h-100 border-1">
					<a href="#"><img class="img-responsive ml-3 mt-3" src="<?=$home?>/assets/imagens/pages/arquitetos/medalha_1_beneficio.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">Benefício 1</a>
						</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 portfolio-item mt-3">
				<div class="card h-100 border-1">
					<a href="#"><img class="img-responsive ml-3 mt-3" src="<?=$home?>/assets/imagens/pages/arquitetos/trofeu_beneficio.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">Benefício 2</a>
						</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 portfolio-item mt-3">
				<div class="card h-100 border-1">
					<a href="#"><img class="img-responsive ml-3 mt-3" src="<?=$home?>/assets/imagens/pages/arquitetos/premio_beneficio.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">Benefício 3</a>
						</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 portfolio-item mt-3">
				<div class="card h-100 border-1">
					<a href="#"><img class="img-responsive ml-3 mt-3" src="<?=$home?>/assets/imagens/pages/arquitetos/medalha_2_beneficio.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">Benefício 4</a>
						</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 portfolio-item mt-3 mt-3">
				<div class="card h-100 border-1">
					<a href="#"><img class="img-responsive ml-3 mt-3" src="<?=$home?>/assets/imagens/pages/arquitetos/premiacoes_beneficio.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">Benefício 5</a>
						</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 portfolio-item mt-3 mt-3">
				<div class="card h-100 border-1">
					<a href="#"><img class="img-responsive ml-3" src="<?=$home?>/assets/imagens/pages/arquitetos/medalhas_beneficio.png" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#">Benefício 6</a>
						</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Torne-se um arquiteto associado -->
		<div class="row mx-0 mb-4">
			<div class="col-md-12" align="left">
				<p class="chamada-titulos-cinza">TORNE-SE UM <span class="chamada-titulos-azul">PARCEIRO</span></p>
			</div>
		</div>
		<div class="row mx-0 mb-4">
			<div class="col-md-12">
			<?php
			if($formularioEnviado) {
				$enviou = enviar_e_checar_email($nome, $email, $mensagem);
				if($enviou) { ?>
					<span class="email-sucesso">Seu e-mail foi enviado com sucesso!</span>
				<?php } else { ?>
					<span class="email-fracasso">Desculpe, ocorreu um erro, seu e-mail não foi enviado!</span>
				<?php } 
			}
			?>
			</div>
			<div class="col-md-12">
				<form method="post">
					<div class="col-md-12" >
						<div class="form-nome">
							<input id="form-nome" type="text" placeholder="Seu nome" name="form-nome">
						</div>
					</div>
					<div class="col-md-12" >
						<div class="form-email">
							<input id="form-email" type="email" placeholder="Seu email" name="form-email">
						</div>
					</div>
					<div class="col-md-12" >
						<div class="form-telefone">
							<input id="form-telefone" type="text" placeholder="Seu telefone" name="form-telefone">
						</div>
					</div>
					<div class="col-md-4 col-xs-12" >
						<button type="submit" class="btn btn-block btn-primary">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
}

function get_architects_buttons_chamada_principal() { ?>
	<div class="row mx-0 mt-3">
	<div class="col-md-4 col-xs-2"></div>
	<div class="col-md-2 col-xs-4" align="center">
		<button type="button" class="btn btn-outline-secondary btn-block">Torne-se um</button>
	</div>
	<div class="col-md-2 col-xs-4" align="center">
		<button type="button" class="btn btn-outline-secondary btn-block">Assista o Vídeo</button>
	</div>
	<div class="col-md-4 col-xs-2"></div>
</div>
<?php
}
