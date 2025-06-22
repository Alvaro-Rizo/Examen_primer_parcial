@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-titulo>Listado de Cursos</x-titulo>
            
            <div class="list-group">
                <a href="/cursos/laravel/5/desarrollo-web" class="list-group-item list-group-item-action">
                    Laravel - 5 semanas - Desarrollo Web
                </a>
                <a href="/cursos/react/3/frontend" class="list-group-item list-group-item-action">
                    React - 3 semanas - Frontend
                </a>
                <a href="/cursos/node/8/backend" class="list-group-item list-group-item-action">
                    Node.js - 8 semanas - Backend
                </a>
            </div>
            
            <div class="mt-3 text-center">
                <a href="/cursos/create" class="btn btn-primary">Crear nuevo curso</a>
            </div>
        </div>
    </div>
@endsection