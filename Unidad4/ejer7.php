<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($_SERVER as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>";

        if (is_array($value)) {
            echo "<td>" . htmlspecialchars(print_r($value, true)) . "</td>";
        } else {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</body>
</html>