@extends('layouts.master')
@section('title','Listado de Peliculas')
@section('content')
    
         <h1>Lista de Peliculas</h1>
        <table class="table">
        <tr><th>Titulo</th><th>Duracion</th></tr>
        
            
        
        @foreach ($peliculas as $peli) 
             <tr>
             <td>  {{$peli->titulo}}  </td>
             <td>  {{$peli->duracion}}  </td>
             <td><a class="btn btn-info" href="/peliculas/listarUnaPelicula/{{$peli->id}}">  Mostrar Uno  </td>
             <td><a class="btn btn-secondary" href="/peliculas/mailListar_view/{{$peli->id}}"> Confirmar</td>
             </tr>
        @endforeach

        
         </table>
         <a class="btn btn-info" href="/peliculas/crearPDF/"> Crear PDF</a>
         
    @endsection