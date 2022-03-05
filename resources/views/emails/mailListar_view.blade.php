@extends('layouts.master')
@section('title','Lista Solicitudes')
@section('content')
<?php
    
       echo ' <p class="h1 text-center">Lista de peticiones</p>';
       echo "<table class='table'>";
       echo "<tr><th>Nombre</th><th>Correo</th><th>Título</tr>";

        foreach ($peticiones as $dato) {
            echo "<tr>";
            echo "<td>" . $dato->nombre . "</td>";
            echo "<td>" . $dato->correo . "</td>";
            echo "<td>" . $dato->titulo . "</td>";
           
            echo "</tr>";
        }
        echo "</table>";
    
    ?>
@endsection