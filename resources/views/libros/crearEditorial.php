<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Editorial</title>
</head>
<body>
    <h1>Crear Editorial</h1>
<form action="/libros/crearEditorial" method ="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" placeholder="Nombre">
    <label>Nacionalidad:</label>
    <input type="text" name="nacionalidad" placeholder="Nacionalidad">
    <input type="submit" value="Guardar">
</form>
</body>
</html>