<?php
    $queryTaxonomy = array_key_exists('taxonomy', $_GET);
    if( $queryTaxonomy && $_GET['taxonomy'] === '' ){
        wp_redirect( home_url() );
    }
    $css_especifico = 'index';
    require_once('header.php');  //Recupera o header para o Index
?>

<main class="home-main">
    <div class="container">

        <?php $taxonomias = get_terms('localizacao'); ?>

        <form class="busca-localizacao-form" method="GET" action="<?= bloginfo('url'); ?>">
            <div class="taxonomy-select-wrapper">
                <select name="taxonomy">
                    <option value="">Todos os imóveis</option>
                    <?php foreach($taxonomias as $taxonomia){ ?>
                    <option value="<?= $taxonomia->slug; ?>"><?= $taxonomia->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit">Filtrar</button>
        </form>    
        
        <?php
            if($queryTaxonomy){ //Se Existir a Busca, faça o code abaixo
            $taxQuery = array(
                    array(
                        'taxonomy' => 'localizacao',
                        'field' => 'slug',
                        'terms' => $_GET['taxonomy']
                    )
                );
            }

            $args = array( 
                'post_type' => 'imovel',
                'tax_query' => $taxQuery
            
            );
            
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


