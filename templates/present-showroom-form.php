<?php
require_once(get_template_directory() . '/header.php');
?>
<div class="row mx-0 my-4">
    <div class="col-md-12" align="center">
        <p class="chamada-titulos-cinza"> VISITE <span class="chamada-titulos-azul"> NOSSO SHOWROOM</span></p>
    </div>
</div>
<!-- Agendamento de visita e vídeo do showroom -->
<div class="d-flex justify-content-center mb-4">
    <div class="col-md-4" align="center">
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
                <div class="form-data-visita">
                    <input id="form-data-visita" type="date" name="form-data-visita">
                </div>
            </div>
            <div class="col-md-12 col-xs-12" >
                <button type="submit" class="btn btn-block btn-primary">Agendar</button>
            </div>
        </form>
    </div>
    <div class="col-md-4" align="center">
        <div class="container-video">
            <iframe src="//www.youtube.com/embed/yCOY82UdFrw" frameborder="0" allowfullscreen class="video"></iframe>
        </div>
    </div>
</div>