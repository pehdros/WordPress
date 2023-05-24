<!-- O Administrador poderá incluir informações em home.php -->
<div class="categorias">
    <div class="container">
        <h5 class="text-primary">Navegue por Categorias:</h5>
    </div>
    <?php
    if (is_active_sidebar('categorias')) {
        dynamic_sidebar('categorias');
    }
    ?>
</div>