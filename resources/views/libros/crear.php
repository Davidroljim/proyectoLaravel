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
<ul>
    <li>
    <label>ISBN:</label>
    <input type="text" name="ISBN" placeholder="ISBN">
    </li>
    <li>
    <label>Titulo:</label>
    <input type="text" name="titulo" placeholder="Su Titulo">
    </li>
    <li>
    <label>Autor:</label>
    <input type="text" name="autor" placeholder="Su Autor">
    </li>
    <li>
    <label>Idioma:</label>
    <input type="text" name="idioma" placeholder="Idioma">
    </li>
    <li>
    <label>Publicacion:</label>
    <input type="date" name="publicacion" placeholder="Publicacion">
    </li>
    <li>
    <label>Editorial:</label>
    <input type="text" name="editorial" placeholder="Editorial">
    </li>
    <br>
    <input type="submit" value="Guardar">
</ul>
</form>
</body>
</html>