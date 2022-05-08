<?php

namespace App\Http\Controllers;

use App\Http\Requests\trabajadorRequest;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class trabajadorController extends Controller
{
    public function index(){
        $trabajadores = Trabajador::get();
        return view('welcome', compact('trabajadores'));
    }

    public function create(){
        return view('trabajadores_create');
    }

    public function store(trabajadorRequest $request){
        // solo los campos validados seran registrados
        // Trabajador::create( $request->validated() );
        $data = new Trabajador( $request->validated() ); //de esta forma solo realizamos la isnercion de datos con una consulta
        $data->pais = 'Bolivia';
        $data->save();
        return redirect('/')->with('flash', 'Se registro el trabajador con exito.');
    }
}
