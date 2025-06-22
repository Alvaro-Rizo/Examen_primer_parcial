@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-titulo>Detalles del Curso</x-titulo>
            
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $nombre }}</h5>
                    <p class="card-text">
                        <strong>Duración:</strong> {{ $duracion }} semanas ({{ $duracionHoras }} horas)<br>
                        <strong>Categoría:</strong> {{ $categoria }}
                    </p>
                    
                    @if($duracionHoras < 20)
                        <span class="badge bg-info">Curso corto</span>
                    @elseif($duracionHoras >= 20 && $duracionHoras <= 32)
                        <span class="badge bg-warning">Curso medio</span>
                    @else
                        <span class="badge bg-danger">Curso largo</span>
                    @endif
                </div>
            </div>
            
            <div class="mt-3 text-center">
                <a href="/cursos/{{ $nombre }}/{{ $duracion }}/{{ $categoria }}/edit" class="btn btn-secondary">Editar</a>
                <a href="/cursos" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection