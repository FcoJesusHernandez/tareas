@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Crear Tareas</div>

                        <div class="card-body">
                            @isset($tarea)
                            <form action="{{ action('TareaController@update', $tarea->id) }}" method="POST">
                                @method('PUT')
                            @else
                            <form action="{{ action('TareaController@store') }}" method="POST">
                            @endisset
                            @csrf
                                <div class="form-group">
                                    <label for="nombre_tarea">Nombre </label>
                                <input type="text" class="form-control" id="nombre_tarea" name="nombre_tarea" value="{{ $tarea->nombre_tarea ?? null }}">
                                </div>

                                isset($tarea) ? $tarea->feche_inicio->toDateString() : null
                                <div class="form-group">
                                    <label for="fecha_inicio">Fecha inicio</label>
                                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ $tarea->fecha_inicio ?? null }}">
                                </div>
                                <div class="form-group">
                                    <label for="fecha_termino">Fecha termino</label>
                                    <input type="date" class="form-control" id="fecha_termino" name="fecha_termino" value="{{ $tarea->fecha_termino ?? null }}">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion">{{ $tarea->descripcion ?? null }} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="prioridad">Prioridad</label>
                                    <select name="prioridad" class="form-control">
                                        <option value="1" {{ $tarea->descripcion ?? null && $tarea->prioridad == 1 ? 'Selected' : '' }} >Baja (1)</option>
                                        <option value="5" {{ $tarea->descripcion ?? null &&  $tarea->prioridad == 5 ? 'Selected' : '' }}>Media (5)</option>
                                        <option value="10" {{ $tarea->descripcion ?? null &&  $tarea->prioridad == 10 ? 'Selected' : '' }}>Alta (10)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="prioridad">Categoria</label>
                                    <select name="categoria_id" class="form-control">
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
