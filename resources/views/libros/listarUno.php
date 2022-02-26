<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    if (isset($libro)) {
        echo "<h1>Detalles Libro:</h1>";
        echo "Titulo: " . $libro->titulo . "<br>";
        echo "Autor: " . $libro->autor . "<br>";
        echo "Idioma: " . $libro->idioma . "<br>";
        echo "Publicación: " . $libro->publicacion . "<br>";
        echo "Editorial: " . $libro->editorial . "<br>";
    }else{
        echo "<h1>ISBN incorrecto</h1>";
    }
    ?>
</body>

</html>