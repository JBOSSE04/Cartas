<h2>Cartas de la baraja española</h2>
<div style="display: flex; flex-wrap: wrap;">
    <?php foreach ($cartas as $carta): ?>
        <div style="margin: 10px; text-align: center;">
        <img src="./imagenes/<?php echo $carta['imagen']; ?>" alt="<?php echo $carta['nombre']; ?>" style="width: 100px; height: 150px;">
        </div>
    <?php endforeach; ?>