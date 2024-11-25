<h1>Reparto de Cartas</h1>
<?php foreach ($reparto as $jugador => $cartas): ?>
    <h2>Jugador <?= $jugador + 1 ?></h2>
    <div>
        <?php foreach ($cartas as $carta): ?>
            <img src="<?= $carta->getImagen() ?>" alt="<?= $carta->getPalo() ?> <?= $carta->getValor() ?>" />
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
