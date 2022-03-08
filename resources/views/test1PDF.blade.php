<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
<body>
    <table class="table" style="border: 1">
        <tr><th>Titulo</th><th>Duracion</th></tr>
        
    @foreach ($peliculas as $libro)
    <tr>
    <td>{{ $libro->titulo }}</td>
    <td>{{ $libro->duracion }}</td>
    </tr>
    @endforeach
    </table>
    
</body>
</html>