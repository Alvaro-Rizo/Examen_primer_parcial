@extends('layouts.app')

@section('content')
    <x-titulo>Editar Curso: {{ $nombre }}</x-titulo>
    
    <form>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $nombre }}">
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (semanas)</label>
            <input type="number" class="form-control" id="duracion" name="duracion" value="{{ $duracion }}">
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $categoria }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="/cursos/{{ $nombre }}/{{ $duracion }}/{{ $categoria }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection