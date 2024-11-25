<h1>Cartas Barajadas</h1>
<div>
    <?php foreach ($cartas as $carta): ?>
        <img src="<?= $carta->getImagen() ?>" alt="<?= $carta->getPalo() ?> <?= $carta->getValor() ?>" />
    <?php endforeach; ?>
</div>
