<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class LibroController extends Controller
{
    public function listar()
    {
        $libros = Libro::all();
        
        return view("libros.listar", compact('libros'));
    }

    public function listarUno($ISBN)
    {
        $libro = Libro::find($ISBN);
        return view("libros.listarUno", ['libro'=>$libro]);
    }

    public function edit ($ISBN){

        $libro = Libro::find($ISBN);
        return view("libros.editar", ['libro'=>$libro]);
    }

    public function realizarUpdate($ISBN, Request $request)
    {
        $libro = Libro::find($ISBN);
        $libro->ISBN = $request->ISBN;
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->autor = $request->autor;
        $libro->publicacion = $request->publicacion;
        $libro->editorial = $request->editorial;
        $libro->save();
        return redirect()->action([LibroController::class, 'listar']);
    }

    public function create (){
        return view("libros.crear");
    }

    public function store (Request $request){

        $libro = new Libro($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'listar']);

    }

    public function createEditorial (){
        return view("libros.crearEditorial");
    }

    public function storeEditorial (Request $request){

        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->nacionalidad = $request->nacionalidad;
        $editorial->save();
        return redirect()->action([LibroController::class, 'listar']);

    }

}

?>