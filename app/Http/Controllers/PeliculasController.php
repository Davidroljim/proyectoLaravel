<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;
use Illuminate\Http\Request;
use App\Mail\NotifyMail;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Peliculas::all();
        
        return view("peliculas.listar", compact('peliculas'));
    }

    public function listarUno($id)
    {
        $pelicu = Peliculas::find($id);
        return view("peliculas.listar", ['pelicu'=>$pelicu]);
    }
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("peliculas.crearPeliculas");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //if (empty($request->titulo()) || $request->duracion()<1) {
        //    echo "Rellena bien el formulario";
        //}else{
            $peliculas = new Peliculas($request->all());
            $peliculas->save();
        return redirect()->action([PeliculasController::class, 'index']);
    //}
        }
        
        public function enviarMail(Request $request)
        {
            $peticiones = new peticiones($request->all());
            $peticiones->save();
            Mail::to($peticiones->correo)->send(new NotifyMail($peticiones));
            return redirect()->action([PeliculasController::class, 'mail']);
    
        }

        public function mail()
    {
        $peticiones = peticiones::all();
        
        return view("peliculas.listarPeliculas", compact('peticiones'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
