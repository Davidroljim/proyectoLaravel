@extends('layouts.master')
@section('title','Solicitar Libros')
@section('content')
    <h1>Solicitar Libros</h1>
<form action="/emails/mail_view" method ="POST">
<ul>
    <li>
    <label>Nombre y Apellidos</label>
    <input type="text" name="nombre"  placeholder="Nombre y Apellidos" required>
    </li>
    <li>
    <label>Correo Electrónico</label>
    <input type="email" name="correo" placeholder="Correo" required>
    </li>
    <li>
    <label>Título Libro</label>
    <input type="text" name="titulo"  placeholder="Titulo Libro" required>
    </li>
    <br>
    <input type="submit" value="Guardar">
</ul>
</form>
@endsection