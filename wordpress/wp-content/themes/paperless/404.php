<?php get_header(); ?>

<div class="container">
    <div class="row">
        <header>
            <h1>Página não encontrada</h1>
            <p>Erro, a página que você procura não existe neste site!</p>
        </header>
        <div>
            <p>Que tal fazer uma pesquisa?</p>
            <?php get_search_form();?>
            <?php 
            the_widget('WP_Widget_Recent_Posts', ['title' => 'Ultimos Posts', 'number' => 3]);
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>