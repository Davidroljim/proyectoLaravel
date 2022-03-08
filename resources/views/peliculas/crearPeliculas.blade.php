@extends('layouts.master')
@section('title','Crear Pelicula')
@section('content')
    <h1>Crear Pelicula</h1>
<form action="/peliculas/crearPeliculas" method ="POST">

    <label>Titulo:</label>
    <input type="text" name="titulo" placeholder="Titulo">
    <label>Duración:</label>
    <input type="number" name="duracion" placeholder="Duración">
    <label>Email:</label>
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Guardar">
</form>
@endsection