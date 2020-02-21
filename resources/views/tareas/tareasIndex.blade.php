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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
