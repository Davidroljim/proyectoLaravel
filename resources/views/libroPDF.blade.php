<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
<body>
    <table class="table" style="border: 1">
        <tr><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Idioma</th><th>Publicacion</th><th>Editorial</th></tr>
    <tr>
    <td>{{ $libro->ISBN }}</td>
    <td>{{ $libro->titulo }}</td>
    <td>{{ $libro->autor }}</td>
    <td>{{ $libro->idioma }}</td>
    <td>{{ $libro->publicacion }}</td>
    <td>{{ $libro->editorial}}</td>
    </tr>
    </table>
    
</body>
</html>