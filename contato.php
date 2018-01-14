<?php
require_once('header.php');
$home = get_template_directory_uri();

function get_contatos_body_content() {
?>
<div class="d-flex justify-content-center flex-column mt-5" align="center">
    <p class="mx-auto chamada-titulos-cinza">Envie<span class="chamada-titulos-azul"> sua mensagem</span></p>
</div>
<div class="d-flex justify-content-center flex-column" align="center">
        <?php
            if($formularioEnviado) {
                $enviou = enviar_e_checar_sugestao($nome, $email, $sugestao);
                if($enviou) { ?>
                    <span class="email-sucesso">Sua intenção de reserva foi registrada com sucesso!
                        Em breve entraremos em contato.
                    </span>
                <?php 
                } else {
                ?>
                    <span class="email-fracasso">Desculpe, ocorreu um erro, sua intenção de reserva não foi feita!</span>
                <?php 
                }
            }
        ?>
        <div class="col-md-4" align="center">
            <form method="post">
                <div class="form-nome">
                    <input id="form-nome" type="nome" placeholder="Seu nome" name="form-nome">
                </div>
                <div class="form-email">
                    <input id="form-email" type="email" placeholder="Seu email" name="form-email">
                </div>
                <div class="form-telefone">
                    <input id="form-telefone" type="telefone" placeholder="Seu telefone" name="form-telefone">
                </div>
                <div class="form-assunto">
                    <input id="form-assunto" type="assunto" placeholder="Seu assunto" name="form-email">
                </div>
                <div class="form-mensagem">
                    <textarea id="form-mensagem" type="text" style="overflow:hidden"
                     placeholder="Sua mensagem" name="form-mensagem" class="input w-100" rows="10"></textarea>
                </div>             
                <button type="submit" class="btn btn-primary btn-block">Enviar mensagem</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center flex-column mt-5" align="center">
		<div class="col-md-6" align="center">
            <p class="mx-auto chamada-titulos-cinza">Venha nos<span class="chamada-titulos-azul"> visitar</span></p>
		</div>
		<div class="col-md-12">
            <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.163561782555!2d-38.48499198562055!3d-3.7745665444650283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c745f8e45b2dc3%3A0xeb03795f21122743!2sR.+Otac%C3%ADlio+Mota%2C+109+-+Eng.+Luciano+Cavalcante%2C+Fortaleza+-+CE%2C+60811-060!5e0!3m2!1spt-BR!2sbr!4v1515903537102"
                                 width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<?
}