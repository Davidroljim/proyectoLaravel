@extends('layouts.master')
@section('title','Editar Libro')
@section('content')
<h1>Formulario Editar</h1>
<form action="/libros/realizarUpdate/<?php echo $libro->ISBN;?>" method="post">
 <ul>
  <li>
    <label for="name">Titulo:</label>
    <input type="text" id="name" name="titulo" value="<?php echo $libro->titulo;?>">
  </li>
  <li>
    <label for="name">Autor:</label>
    <input type="text" id="name" name="autor" value="<?php echo $libro->autor;?>">
  </li>
  <li>
    <label for="name">Idioma:</label>
    <input type="text" id="name" name="idioma" value="<?php echo $libro->idioma;?>">
  </li>
  <li>
    <label for="name">Publicacion:</label>
    <input type="date" id="name" name="publicacion" value="<?php echo $libro->publicacion;?>">
  </li>
  <li>
    <label for="name">Editorial:</label>
    <input type="number" id="name" name="editorial" value="<?php echo $libro->editorial;?>">
  </li>
 </ul>
 <input type="submit" value="Guardar">
</form>
@endsection