<h1>Cartas Barajadas</h1>
<div>
    <?php foreach ($cartas as $carta): ?>
        <img src="./imagenes/<?php echo $carta['imagen']; ?>" alt="<?php echo $carta['nombre']; ?>" style="width: 100px; height: 150px;">
        <?php endforeach; ?>
</div>
