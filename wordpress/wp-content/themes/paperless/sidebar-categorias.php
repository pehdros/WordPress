<!-- O Administrador poderá incluir informações em home.php -->
<div class="categorias">
    <?php
    if (is_active_sidebar('categorias')) {
        dynamic_sidebar('categorias');
    }
    ?>
</div>