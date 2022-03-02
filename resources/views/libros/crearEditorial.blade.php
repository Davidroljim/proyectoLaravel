@extends('layouts.master')
@section('title','Crear Editorial')
@section('content')
    <h1>Crear Editorial</h1>
<form action="/libros/crearEditorial" method ="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" placeholder="Nombre">
    <label>Nacionalidad:</label>
    <input type="text" name="nacionalidad" placeholder="Nacionalidad">
    <input type="submit" value="Guardar">
</form>
@endsection