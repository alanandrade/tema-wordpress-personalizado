<?php get_header(); ?> <!-- Recupera o header para o Index -->

<main class="home-main">
    <div class="container">
        <h1>Bem vindo a Maluras!</h1>
        <ul class="imoveis-listagem">
            <?php //Inicio do Loop de Posts
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                ?>

                <li class="imoveis-listagem-item">
                    <?php the_post_thumbnail(); ?> <!-- Inclui Imagem Destacada do Post -->
                    <h2><?php the_title(); ?></h2> <!-- Inclui Titulo do Post -->
                    <div><?php the_content(); ?></div> <!-- Inclui Conteúdo do Post -->
                </li>

            <?php
                }
                    }
                //Fim Loop de Posts
            ?>
        </ul>

    </div>
</main>

<?php get_footer(); ?> <!-- Recupera o footer para o Index -->
