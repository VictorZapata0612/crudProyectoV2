<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;

class EstudianteController extends Controller
{
    public function index(){

        $estudiante = estudiante::all();

        return view('estudiante.index', compact('estudiante'));
    }

    public function create(){
        return view('estudiante.create');
    }

    public function store(Request $request){
        $estudiante = New estudiante();

        $estudiante->nombre = $request->nombre;
        $estudiante->documento_identidad = $request->documento_identidad;
        $estudiante->genero = $request->genero;
        $estudiante->curso = $request->curso;
        $estudiante->estado = $request->estado;
        $estudiante->edad = $request->edad;

        $estudiante->save();
        return redirect()->route('estudiante.index');
    }

    public function edit($id){

        $estudiante = estudiante::find($id);

        return view('estudiante.edit', compact('estudiante'));
    }

    public function update(Request $request, $id){
        $estudiante = estudiante::find($id);

        $estudiante->update($request->all());

        return redirect()->route('estudiante.index');
    }

    public function destroy($id){

        $estudiante = estudiante::find($id);

        $estudiante->delete();

        return redirect()->route('estudiante.index');
    }
}