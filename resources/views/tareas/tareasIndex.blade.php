@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Tareas</div>

                        <div class="card-body">
                        <a href="{{ action('TareaController@create') }}" class="btn btn-danger btn-sm">Nueva tarea</a>
                        </div>
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Tarea</th>
                                <th>Descripcion</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                            </thead>
                            <tbody>
                                @isset($tareas)
                                @foreach ($tareas as $tarea)
                                <tr>
                                    <td><a href="{{ route('tarea.show', $tarea->id) }}">{{$tarea->id}}</a></td>
                                    <td>{{$tarea->nombre_tarea}}</td>
                                    <td>{{$tarea->descripcion}}</td>
                                    <td>{{$tarea->fecha_inicio}}</td>
                                    <td>{{$tarea->fecha_termino}}</td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
