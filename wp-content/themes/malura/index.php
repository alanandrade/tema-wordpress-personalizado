<?php
    $css_especifico = 'index';
    require_once('header.php');  //Recupera o header para o Index
?>

<main class="home-main">
    <div class="container">
        <h1>Bem vindo a Maluras!</h1>
    
        <?php
            $args = array( 'post_type' => 'imovel' );
            $loop = new WP_Query( $args );
            if( $loop->have_posts() ) { 
        ?>

        <ul class="imoveis-listagem">
            <?php while( $loop->have_posts() ) {
                $loop->the_post();
            ?>

                <li class="imoveis-listagem-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?> <!-- Inclui Imagem Destacada do Post -->
                        <h2><?php the_title(); ?></h2> <!-- Inclui Titulo do Post -->
                        <div><?php the_content(); ?></div> <!-- Inclui Conteúdo do Post -->
                    </a>
                </li>

            <?php
                }
                    }
            //Fim Loop de Posts
            ?>
        </ul>

    </div>
    <?php get_footer(); ?> <!-- Recupera o footer para o Index -->
</main>


