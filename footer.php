<?php $home = get_template_directory_uri();?>
    <div class="bg-secondary">
        <div class="container p-4">
            <table class="table table-borderless auto">
                <thead>
                    <th scope="col" style="border: none;"></th>
                    <th scope="col" 
                        style="font-family: 'Open Sans', sans-serif;
                               font-weight: bolder;
                               font-size: 1.4rem;
                               color: #5F5F5F;
                               border: none;">A Singular</th>
                    <th scope="col" style="border: none;"></th>
                    <th scope="col" style="border: none;"></th>
                <tbody>
                    <tr style="border: none;">
                        <td rowspan="4" style="border: none;">
                        <a  style="text-decoration: none; border: none" href="<?=home_url()?>">
                            <img src="<?=$home?>/assets/imagens/Singular-logo.png" width="157" height="59" alt="">
                         </a>
                        </td>
                    </tr>
                    <tr style="border: none;">
                        <td style="border: none;">
                            <a style="font-family: 'Open Sans', sans-serif;
                                font-weight: bold;
                                font-size: 0.8rem;
                                text-decoration: none;
                                color: #FFFFFF"
                            onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1.0'"       
                            href="<?=get_page_link_by_slug('empresa')?>">Sobre nós</a>
                        </td>
                        <td style="border: none;">
                            <a style="font-family: 'Open Sans', sans-serif;
                            font-weight: bold;
                            font-size: 0.8rem;
                            text-decoration: none;
                            color: #FFFFFF"
                            onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1.0'"
                            href="<?=get_page_link_by_slug('empresa')?>">Projetos</a>
                        </td>
                        <td rowspan="4" style="border: none;">
                            <a href="#">
                                <img src="<?=$home?>/assets/imagens/Facebook.svg" width="51" height="51" alt="">
                            </a>
                        </td>
                        <td rowspan="4" style="border: none;">
                            <a href="#">
                                <img src="<?=$home?>/assets/imagens/Instagram.svg" width="51" height="51" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr style="border: none;">
                        <td style="border: none;">
                            <a style="font-family: 'Open Sans', sans-serif;
                                font-weight: bold;
                                font-size: 0.8rem;
                                text-decoration: none;
                                color: #FFFFFF"
                            onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1.0'"
                            href="<?=get_page_link_by_slug('empresa')?>">Soluções</a>
                        </td>
                        <td style="border: none;">
                            <a style="font-family: 'Open Sans', sans-serif;
                                font-weight: bold;
                                font-size: 0.8rem;
                                text-decoration: none;
                                color: #FFFFFF"
                            onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1.0'"
                            href="<?=get_page_link_by_slug('contatos')?>">Contatos</a>
                        </td>
                    </tr>
                    <tr style="border: none;">
                        <td style="border: none;">
                            <a style="font-family: 'Open Sans', sans-serif;
                                font-weight: bold;
                                font-size: 0.8rem;
                                text-decoration: none;
                                color: #FFFFFF"
                            onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1.0'"
                            href="<?=get_page_link_by_slug('arquitetos')?>">Arquitetos</a>
                        </td>
                        <td style="border: none;">
                            <a style="font-family: 'Open Sans', sans-serif;
                                font-weight: bold;
                                font-size: 0.8rem;
                                text-decoration: none;
                                color: #FFFFFF"
                            onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1.0'"
                            href="<?=get_page_link_by_slug('blog')?>">Blog</a>
                        </td>
                    </tr>
                </tbody>
                </thead>
            </table>
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