<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario de Solicitud de Empleo</h2>
    <form action="validacion.php" method="POST">

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="empleo_actual">Empleo actual:</label><br>
        <input type="radio" id="sin_empleo" name="empleo_actual" value="sin empleo" required>
        <label for="sin_empleo">Sin empleo</label><br>
        
        <input type="radio" id="media_jornada" name="empleo_actual" value="media jornada" required>
        <label for="media_jornada">Media jornada</label><br>
        
        <input type="radio" id="tiempo_completo" name="empleo_actual" value="tiempo completo" required>
        <label for="tiempo_completo">Tiempo completo</label><br><br>

        <label for="lenguajes">Lenguajes que domina:</label><br>
        <input type="checkbox" id="python" name="lenguajes[]" value="Python">
        <label for="python">Python</label><br>

        <input type="checkbox" id="php" name="lenguajes[]" value="PHP">
        <label for="php">PHP</label><br>

        <input type="checkbox" id="javascript" name="lenguajes[]" value="JavaScript">
        <label for="javascript">JavaScript</label><br>

        <input type="checkbox" id="java" name="lenguajes[]" value="Java">
        <label for="java">Java</label><br>

        <input type="checkbox" id="cpp" name="lenguajes[]" value="C++">
        <label for="cpp">C++</label><br><br>

        <label for="url_trabajos">URL de tus trabajos realizados:</label><br>
        <input type="url" id="url_trabajos" name="url_trabajos" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>