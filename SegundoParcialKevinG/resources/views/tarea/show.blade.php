@extends('tema.app')

@section('title',"Tarea")

@section('contenido')
    <h3>
        <i> {{  $tarea->nombre }}</i>
    </h3>
    <ul>
        <li>
            DPI: <strong> {{ $tarea->dpi }} </strong>
        </li>
        <li>
            Lugar de residencia: <strong> {{ $tarea->urgencia() }} </strong>
        </li>
        <li>
            Fecha de registro: <strong> {{ $tarea->fecha_limite->format('H:i d / m / Y') }} </strong>
        </li>
        
    </ul>
    <p>
        {{ $tarea -> descripcion }}
    </p>
    <hr>
    <div class="row">
        <div class="col-sm12 mb-2">
            <form action="{{ route('tarea.destroy', $tarea)}}" method="post">
                @csrf
                @method('delete')
                <button class= "btn btn-danger btn-sm" type="submit">
                    Eliminar cliente
                </button>
            </form>
        </div>
    </div>
@endsection