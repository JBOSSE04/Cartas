<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Boletín de notas</title>
    <style>
        body {
            background-color: #87CEFA;
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            border-color: azure;
            width: 50%;
            background-color: #87CEFA;
        }
        th, td {
            border: 1px solid black;
            border-color: azure;

            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #87CEFA;
            border-color: azure;

        }
    </style>
</head>
<body>
    <h1>Boletín de notas</h1>

    <?php
    $notas = [
        "Matemáticas" => [3, 10, 7],
        "Lengua"      => [8, 5, 3],
        "Física"      => [7, 2, 1],
        "Latín"       => [4, 7, 8],
        "Inglés"      => [6, 2, 3]
    ];

    function calcular_media($notas_trimestres) {
        return round(array_sum($notas_trimestres) / count($notas_trimestres), 1);
    }





    $suma_medias = 0;
    $total_asignaturas = count($notas);
    ?>

    <table>
        <tr>
            <th>Asignatura</th>
            <th>Trimestre 1</th>
            <th>Trimestre 2</th>
            <th>Trimestre 3</th>
            <th>Media</th>
        </tr>
        <?php foreach ($notas as $asignatura => $calificaciones): ?>
            <tr>
                <td><?php echo $asignatura; ?></td>
                <td><?php echo $calificaciones[0]; ?></td>
                <td><?php echo $calificaciones[1]; ?></td>
                <td><?php echo $calificaciones[2]; ?></td>
                <td>
                    <?php
                    $media = calcular_media($calificaciones);
                    echo $media;
                    $suma_medias += $media;
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php
    $media_total = round($suma_medias / $total_asignaturas, 1);
    echo "<p><strong>La media total es $media_total</strong></p>";
    ?>
</body>
</html>
