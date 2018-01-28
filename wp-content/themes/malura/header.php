<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php $caminho_home = get_template_directory_uri(); ?>
    <!-- Esta function traz da raiz do wordpress até a pasta de nosso tema -->
    <!-- A abertura do PHP abaixo (?=) Imprimir o resultado da function como string, no caso desta, o caminho -->
    <link rel="stylesheet" type="text/css" href="<?= $caminho_home; ?>/reset.css"> 
    <link rel="stylesheet" type="text/css" href="<?= $caminho_home; ?>/style.css"> 

    <link rel="stylesheet" type="text/css" href="<?= $caminho_home; ?>/assets/css/comum.css"> 
    <link rel="stylesheet" type="text/css" href="<?= $caminho_home; ?>/assets/css/header.css"> 

    <link rel="stylesheet" type="text/css" href="<?= $caminho_home; ?>/assets/css/<?= $css_especifico; ?>.css"> 

    <!-- Pegar o Title do Site -->
    <title>
        <?php geraTitle(); ?>
    </title> <!-- Se NAO(!) for page Home, adiciona o echo. Se for home nao adiciona o echo.-->

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <?php
                $args = array (
                    'theme_location' => 'header-menu'
                );
                wp_nav_menu( $args );
            ?>
        </div>
    </header>