<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Generate PDF From View</title>
</head>
<body>
    <table class="table" style="border: 1">
        <tr><th>ISBN</th><th>Titulo</th></tr>
        
    @foreach ($libros as $libro)
    <tr>
    <td>{{ $libro->ISBN }}</td>
    <td>{{ $libro->titulo }}</td>
    </tr>
    @endforeach
    </table>
    
</body>
</html>