<?php $home = get_template_directory_uri();?>
    <div class="footer-bs bg-secondary">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
                <a  style="text-decoration: none; border: none" href="<?=home_url()?>">
                    <img src="<?=$home?>/assets/imagens/Singular-logo.png" width="157" height="59" alt="">
                </a>
            </div>
        	<div class="col-md-6 footer-nav animated fadeInUp">
                <h4>Menu —</h4>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="pages">
                            <li><a href="<?=get_page_link_by_slug('empresa')?>">A Singular</a></li>
                            <li><a href="<?=get_page_link_by_slug('empresa')?>">Soluções</a></li>
                            <li><a href="<?=get_page_link_by_slug('arquitetos')?>">Arquitetos</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="pages">
                        <li><a href="<?=get_page_link_by_slug('empresa')?>">Projetos</a></li>
                        <li><a href="<?=get_page_link_by_slug('contatos')?>">Contatos</a></li>
                        <li><a href="<?=get_page_link_by_slug('blog')?>">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="pages">
                            <li><a href="<?=get_page_link_by_slug('empresa')?>">Sobre nós</a></li>
                            <li><a href="<?=get_page_link_by_slug('empresa')?>">Visão e valores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        	<div class="col-md-3 footer-social animated fadeInDown">
            	<h4>Siga-nos</h4>
               	<div class="row">
                    <div class="col-md-1">
                        <a href="#">
                            <img src="<?=$home?>/assets/imagens/Facebook.svg" width="30" height="30" alt="">
                        </a>
                    </div>
                    <div class="col-md-1 pl-4">
                        <a href="#">
                            <img src="<?=$home?>/assets/imagens/Instagram.svg" width="30" height="30" alt="">
                        </a>
                    </div>
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