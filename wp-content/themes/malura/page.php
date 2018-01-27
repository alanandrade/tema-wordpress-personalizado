<?php get_header(); ?>

<main class="pagina-main">
    <article class="pagina">
        <h1 class="pagina-titulo">
            <?php the_title(); ?>
        </h1>

        <?php
            if( have_posts() ){
                while( have_posts() ){
                    the_post();
        ?>

        <div class="pagina-conteudo">
            <?php the_content(); ?>
        </div>

        <?php
                }
            }
        ?>

        <?php if(is_page('contato')) { ?>

        <form>
            <div class="form-name">
                <label for=="form-nome">Nome:</label>
                <input type="text" id="form-nome" placeholder="Seu nome aqui" name="form-nome">
            </div>

            <div class="form-email">
                <labek for="form-email">Email:</label>
                <input type="email" id="form-email" placeholder="email@exemplo.com.br" name="form-email">
            </div>

            <div class="form-mensagem">
                <labek for="form-mensagem">Email:</label>
                <textarea id="form-mensagem" name="form-email"></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
        
        <?php } ?>

    </article>
    <?php get_footer(); ?>
</main>