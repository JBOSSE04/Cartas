<h1>Reparto de Cartas</h1>
<?php foreach ($reparto as $jugador => $cartas): ?>
    <h2>Jugador <?= $jugador + 1 ?></h2>
    <div>
        <?php foreach ($cartas as $carta): ?>
            <img src="./imagenes/<?php echo $carta['imagen']; ?>" alt="<?php echo $carta['nombre']; ?>" style="width: 100px; height: 150px;">
            <?php endforeach; ?>
    </div>
<?php endforeach; ?>
