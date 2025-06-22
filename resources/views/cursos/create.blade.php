@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-titulo>Crear Nuevo Curso</x-titulo>
            
            <div class="card shadow">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Curso</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="duracion" class="form-label">Duración (semanas)</label>
                            <input type="number" class="form-control" id="duracion" name="duracion">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <input type="text" class="form-control" id="categoria" name="categoria">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="/cursos" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection