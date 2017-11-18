<!DOCTYPE html>
<html>
<head>
    <?php $home = get_template_directory_uri();?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Singular Automacoes">
    <meta name="author" content="Frederico Rhae">
    <title>
        <?php get_titulo(); ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?= $home?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $home?>/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?= $home?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?= $home?>/assets/css/comum.css">
    <link rel="stylesheet" type="text/css" href="<?= $home;?>/assets/css/<?= $css_escolhido; ?>.css">
    <?php wp_head();?>
</head>

<body>
<header>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?=home_url()?>">
                <img src="<?=$home?>/assets/imagens/Singular-logo.png" width="197" height="74" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=get_page_link_by_slug('empresa')?>">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=get_page_link_by_slug('contatos')?>">Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=get_page_link_by_slug('solucoes')?>">Soluções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=get_page_link_by_slug('arquitetos')?>">Arquitetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=get_page_link_by_slug('projetos')?>">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=get_page_link_by_slug('blog')?>">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>