@extends('layouts.master')
@section('title','Listado de Libros')
@section('content')
    
         <h1>Lista de Libros</h1>
        <table class="table">
        <tr><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Idioma</th><th>Publicacion</th><th>Editorial</th></tr>

        @foreach ($libros as $libro) 
             <tr>
             <td> {{$libro->ISBN}}   </td>
             <td>  {{$libro->titulo}}  </td>
             <td>  {{$libro->autor}}  </td>
             <td>  {{$libro->idioma}}  </td>
             <td>  {{$libro->publicacion}}  </td>
             <td> {{$libro->editorial}}  </td>
             <td><a class="btn btn-info" href="/libros/mostrarUno/{{$libro->ISBN}}">  Mostrar Uno  </td>
                @auth
             <td><a class="btn btn-secondary" href="/libros/editar/{{$libro->ISBN}}"> Editar</td>
                @endauth
             </tr>
        @endforeach
        
         </table>
         <a class="btn btn-info" href="/libros/crearPDF/"> Crear PDF</a>
    @endsection