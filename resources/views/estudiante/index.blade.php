@extends('layouts.app')

@section('title','Home')

@section('content')
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="w-20 py-4">ID</th>
                        <th class="w-20 py-4">NOMBRE COMPLETO</th>
                        <th class="w-20 py-4">DOCUMENTO IDENTIDAD</th>
                        <th class="w-20 py-4">GENERO</th>
                        <th class="w-20 py-4">CURSO</th>
                        <th class="w-20 py-4">ESTADO</th>
                        <th class="w-20 py-4">EDAD</th>
                        <th class="w-20 py-4">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiante as $estudiantes)
                    <tr>
                        <td class="py-3 px-6">{{ $estudiantes->id}}</td>
                        <td class="py-3 px-6">{{ $estudiantes->nombre}}</td>
                        <td class="py-3 px-6">{{ $estudiantes->documento_identidad}}</td>
                        <td class="py-3 px-6">{{ $estudiantes->genero}}</td>
                        <td class="py-3 px-6">{{ $estudiantes->curso}}</td>
                        <td class="py-3 px-6">{{ $estudiantes->estado}}</td>
                        <td class="py-3 px-6">{{ $estudiantes->edad}}</td>
                        <td class="py-3 px-6 flex justify-center">
                            <form action="{{ route('estudiante.destroy', $estudiantes->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-l"><i class="fas fa-trash"></i></button>
                            </form>
                            <a href="{{ route('estudiante.edit', $estudiantes->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm"><i class="fas fa-pen"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection