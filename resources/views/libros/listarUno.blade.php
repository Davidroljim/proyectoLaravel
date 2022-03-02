@extends('layouts.master')
@section('title','Listado de Libros')
@section('content')
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
@endsection