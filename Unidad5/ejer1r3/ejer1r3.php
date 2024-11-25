<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Alumno</title>
</head>
<body>
    <h1>Alta alumno:</h1>
    <form action="1r3.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>
        
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br><br>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label>¿Qué lenguajes de programación conoces?</label><br>
        <input type="checkbox" id="cpp" name="lenguajes[]" value="C++"> C++
        <input type="checkbox" id="js" name="lenguajes[]" value="JavaScript"> JavaScript
        <input type="checkbox" id="php" name="lenguajes[]" value="Php"> Php
        <input type="checkbox" id="python" name="lenguajes[]" value="Python"> Python<br><br>
        
        <label>¿Sabes crear páginas web estáticas?</label><br>
        <input type="radio" id="si" name="web_static" value="Si"> Sí<br>
        <input type="radio" id="no" name="web_static" value="No"> No<br><br>
        
        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios"></textarea><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="re_password">Repita la contraseña:</label>
        <input type="password" id="re_password" name="re_password"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
