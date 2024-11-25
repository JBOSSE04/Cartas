<ul>
    <li><a href="?controller=Baraja&action=mostrarCartas">Mostrar las cartas de la baraja española</a></li>
    <li><a href="?controller=Baraja&action=mostrarUnaCarta">Mostrar una carta</a></li>
    <li><a href="?controller=Baraja&action=barajarYMostrar">Barajar y mostrar el resultado</a></li>
    <li><a href="?controller=Baraja&action=repartirCartas&jugadores=3">Repartir cartas a varios jugadores</a></li>
</ul>
<h2>Cartas de la baraja española</h2>
<div style="display: flex; flex-wrap: wrap;">
    <?php foreach ($baraja as $carta): ?>
        <div style="margin: 10px; text-align: center;">
            <img src="/DEWS/Unidad8/cartas/imagenes/<?php echo $carta['imagen']; ?>" style="width: 100px; height: 150px;">
        </div>
    <?php endforeach; ?>
</div>
