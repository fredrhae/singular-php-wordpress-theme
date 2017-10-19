<?php $home = get_template_directory_uri();?>
    <div class="bg-secondary footer-menu">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-2 col-xs-1"></div>
                <div class="col-md-2 col-xs-1">
                    <a  style="text-decoration: none" href="<?=home_url()?>">
                        <img src="<?=$home?>/assets/imagens/Singular-logo.png" width="157" height="59" alt="">
                    </a>
                </div>
                <div class="col-md-2 col-xs-1 ml-4">
                    <h4 class="text-white">A Singular</h4>
                    <a class="card-link text-white" href="<?=get_page_link_by_slug('empresa')?>">Sobre nós</a><br/>
                    <a class="card-link text-white" href="<?=get_page_link_by_slug('empresa')?>">Soluções</a><br/>
                    <a class="card-link text-white" href="<?=get_page_link_by_slug('arquitetos')?>">Arquitetos</a><br/>
                </div>
                <div class="col-md-2 col-xs-1">
                    <h4 style="visibility: hidden">A Singular</h4>
                    <a class="card-link text-white" href="<?=get_page_link_by_slug('empresa')?>">Projetos</a><br/>
                    <a class="card-link text-white" href="<?=get_page_link_by_slug('contatos')?>">Contatos</a><br/>
                    <a class="card-link text-white" href="<?=get_page_link_by_slug('blog')?>">Blog</a><br/>
                </div>
                <div class="col-md-1 ml-0">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
                <div class="col-md-1 ml-0">
                </div>
            </div>
        </div>
    </div>
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white" style="font-size: 0.7rem">Rua Otacílio Mota, 109 - Engenheiro Luciano Cavalvante - Fortaleza CE | Fone: +55 (85) 3244-3637 singularautomacoes@gmail.com - Copyright &copy; Singular 2017</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="<?= $home?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $home?>/assets/vendor/popper/popper.min.js"></script>
    <script src="<?= $home?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<?php wp_footer();?>
</body>
</html>