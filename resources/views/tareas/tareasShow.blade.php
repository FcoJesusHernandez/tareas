@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tareas / Detalles / </div>
                        <div class="card-body">
                        <a href="{{ action('TareaController@edit', $tarea->id) }}" class="btn btn-warning btn-sm">Editar tarea</a>
                        </div>
                        <div class="form-group">
                            <label>ID : </label>
                            <label>{{ $tarea->id }}</label>
                        </div>
                        <div class="form-group">
                            <label>Nombre : </label>
                            <label>{{ $tarea->nombre_tarea }}</label>
                        </div>
                        <div class="form-group">
                            <label>Fecha inicio : </label>
                            <label>{{ $tarea->fecha_inicio->format('d/m/Y') }}</label>
                        </div>
                        <div class="form-group">
                            <label>Fecha termino : </label>
                            <label>{{ $tarea->fecha_termino->format('d/m/Y') }}</label>
                        </div>
                        <div class="form-group">
                            <label>Descripción : </label>
                            <label>{{ $tarea->descripcion }}</label>
                        </div>
                        <div class="form-group">
                            <label>Prioridad : </label>
                            <label>{{ $tarea->prioridad }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
