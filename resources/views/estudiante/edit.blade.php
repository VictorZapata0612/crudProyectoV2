@extends('layouts.app')

@section('title','Editar')

@section('content')

<form action="{{ route('estudiante.update', $estudiante->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-10 shadow-xl rounded-lg">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Editar Estudiante {{ $estudiante->id}} </h2>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Nombre" name="nombre" value="{{ $estudiante->nombre }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Documento de indentidad" name="documento_identidad" value="{{ $estudiante->documento_identidad }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Genero" name="genero" value="{{ $estudiante->genero }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Curso" name="curso" value="{{ $estudiante->curso }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Estado" name="estado" value="{{ $estudiante->estado }}">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Edad" name="edad" value="{{ $estudiante->edad }}">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>
</form>
@endsection