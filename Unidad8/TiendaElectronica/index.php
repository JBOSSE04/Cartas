<?php
require_once 'lib/database.php';

$db = new Database();
$conn = $db->getConnection();

$stmt = $conn->query("SELECT cod, nombre FROM productos");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Stock de Productos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        option{
            color: black;
        }
    </style>
</head>
<body>
    <h1>Stock de Productos</h1>
    <select id="producto">
        <option value="">Seleccione un producto</option>
        <?php foreach ($productos as $producto): ?>
            <option value="<?php echo htmlspecialchars($producto['cod']); ?>"><?php echo htmlspecialchars($producto['nombre_corto']); ?></option>
        <?php endforeach; ?>
    </select>
    <button id="verStock">Ver Stock</button>

    <div id="stockResult"></div>

    <script>
    $(document).ready(function() {
        $('#verStock').click(function() {
            var producto = $('#producto').val();
            if (producto) {
                $.getJSON('stock.php', {producto: producto}, function(data) {
                    var html = '<h2>Stock del producto:</h2><ul>';
                    $.each(data, function(index, item) {
                        html += '<li>' + item.nombre + ': ' + item.unidades + ' unidades</li>';
                    });
                    html += '</ul>';
                    $('#stockResult').html(html);
                });
            } else {
                alert('Por favor, seleccione un producto');
            }
        });
    });
    </script>
</body>
</html>