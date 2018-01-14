<?php $home = get_template_directory_uri();?>
    <div class="footer-bs bg-secondary">
        <div class="d-flex justify-content-center flex-row flex-wrap">
                <div class="col-md-3 col-xs-12 footer-brand animated fadeInLeft">
                    <a  style="text-decoration: none; border: none" href="<?=home_url()?>">
                        <img src="<?=$home?>/assets/imagens/Singular-logo.png" width="157" height="59" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-xs-12 footer-nav animated fadeInUp">
                    <a href="#" style="text-decoration: none; color:"><h4>Ir para o topo —</h4></a>
                    <div class="row mx-0">
                            <ul class="pages">
                                <li><a href="<?=get_page_link_by_slug('solucoes')?>">Soluções</a></li>
                                <li><a href="<?=get_page_link_by_slug('arquitetos')?>">Arquitetos</a></li>
                                <li><a href="<?=get_page_link_by_slug('projetos')?>">Projetos</a></li>
                                <li><a href="<?=get_page_link_by_slug('empresa')?>">A Singular</a></li>
                                <li><a href="<?=get_page_link_by_slug('contato')?>">Contato</a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 footer-social animated fadeInDown">
                    <div class="d-flex justify-content-center flex-column" align="start">
                        <h4>Siga-nos</h4>
                        <div class="d-flex justify-content-start flex-row mt-2">
                            <a class="pl-2" href="https://www.facebook.com/Singular-Automa%C3%A7%C3%B5es-323391861008683/?pnref=lhc">
                                <img class="img-responsive" src="<?=$home?>/assets/imagens/Facebook.svg" width="30" height="30" alt="">
                            </a>
                            <a class="px-2" href="https://vibbi.com/singularautomacoes">
                                <img class="img-responsive" src="<?=$home?>/assets/imagens/Instagram.svg" width="30" height="30" alt="">
                            </a><!--
                            <a class="px-2" href="#">
                                <img src="<?=$home?>/assets/imagens/Instagram.svg" width="30" height="30" alt="">
                            </a>
                            <a class="px-2" href="#">
                                <img src="<?=$home?>/assets/imagens/Instagram.svg" width="30" height="30" alt="">
                            </a>-->
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
    <script type="text/javascript" src="<?= $home?>/assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= $home?>/assets/vendor/popper/popper.min.js"></script>
    <script type="text/javascript" src="<?= $home?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<?php wp_footer();?>
</body>
</html>