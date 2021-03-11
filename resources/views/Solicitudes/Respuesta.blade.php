@extends('welcome')
@section('content')
@include('layouts.navSolicitud')
    <section>
        <h3>Estado de Solicitud</h3>
        <hr class="red">
        <div>
            @if ($resultado == 0)
            <h2>Su solicitud esta en revisión</h2>
            <br>
            <br>
            @elseif ($resultado == 1)
            <h2>Su solicitud esta en revisión</h2>
            <br>
            <br>
            @elseif( $resultado == 2)
            <h2>Su solicitud fue Aprobada!!!</h2>
            <br>
            <br>
            @elseif( $resultado ==3)
            <h2>Su solicitud fue Rechazada!!!</h2>
            <br>
            <br>
            @endif
        </div>
        <div>
            <h4>Mensaje</h4>
            <hr class="red">
            <p>{{ $mensaje->Coment}}</p>
            <br>
            <br>
        </div>
    </section>
@endsection