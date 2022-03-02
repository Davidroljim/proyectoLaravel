@extends('layouts.master')
@section('title','Listado de Libros')
@section('content')
    <?php
    if (isset($libros)) {
       echo ' <h1>Lista de Libros</h1>';
       echo "<table border= 1>";
       echo "<tr><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Idioma</th><th>Publicacion</th><th>Editorial</th></tr>";

        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro->ISBN . "</td>";
            echo "<td>" . $libro->titulo . "</td>";
            echo "<td>" . $libro->autor . "</td>";
            echo "<td>" . $libro->idioma . "</td>";
            echo "<td>" . $libro->publicacion . "</td>";
            echo "<td>" .$libro->editorial . "</td>";
            echo "<td><a class='btn btn-info' href='/libros/mostrarUno/".$libro->ISBN."'>" . "Mostrar Uno" . "</td>";
            echo "<td><a class='btn btn-secondary' href='/libros/editar/".$libro->ISBN."'>" . "Editar". "</td>";
           
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";echo "<br>";
        echo "<a class='btn btn-success' href='/libros/crear/'>Crear Libro</a>";
        echo "<br>";echo "<br>";
        echo "<a class='btn btn-success' href='/libros/crearEditorial/'>Crear Editorial</a>";

    }
    ?>
    @endsection