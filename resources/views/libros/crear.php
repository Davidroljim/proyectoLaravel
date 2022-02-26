<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/libros/crear" method ="POST">

    <label>ISBN:</label>
    <input type="text" name="ISBN" placeholder="ISBN">
    <label>Titulo:</label>
    <input type="text" name="titulo" placeholder="Su Titulo">
    <label>Autor:</label>
    <input type="text" name="autor" placeholder="Su Autor">
    <label>Idioma:</label>
    <input type="text" name="idioma" placeholder="Idioma">
    <label>Publicacion:</label>
    <input type="date" name="publicacion" placeholder="Publicacion">
    <label>Editorial:</label>
    <input type="text" name="editorial" placeholder="Editorial">
    <input type="submit" value="Guardar">
</form>
</body>
</html>