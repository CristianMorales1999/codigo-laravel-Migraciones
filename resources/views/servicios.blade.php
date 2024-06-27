@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>

    <tr>
        @if($servicios)
            @foreach($servicios as $item)
                <td>{{$item->titulo}}<br>{{$item->descripcion}}</td>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar</li>
        @endif
    </tr>
    <tr>
        <td colspan="4">{{$servicios->links('pagination::bootstrap-4')}}</td>
    </tr>
@endsection