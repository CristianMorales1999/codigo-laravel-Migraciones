@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>

    <tr>
        @if($servicios)
            @foreach($servicios as $servicio)
                <td class="servicios" colspan="2"><a href="{{route('servicios.show',$servicio)}}">{{$servicio->titulo}}</a></td>
            @endforeach
        @else
            <td colspan="4">No existe ningun servicio que mostrar</td>
        @endif
    </tr>
    <tr>
        <td colspan="4">{{$servicios->links('pagination::bootstrap-4')}}</td>
    </tr>
@endsection