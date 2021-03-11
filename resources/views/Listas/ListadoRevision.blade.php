@extends('welcome')
@section('content')
@include('layouts.nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <section class="content" >
        <div class="row">
            <div class="col-xs-12">
                <h2>Solicitudes de Movilidad</h2>
                <hr class="red">
            </div>
            <div class="col-sm-12">                 
                <table id="example1" name="example1" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th></th>
                            <th>PDF</th>
                            <th>Estado de Solicitud</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo electrónico</th>
                            <th>CURP o número de pasaporte</th>
                            <th>Periodo para realizar la movilidad</th>
                            <th>Institución de Procedencia</th>
                            <th>Promedio</th>
                            <th>Nombre de tesis</th>
                            <th>Materias a cursar</th>
                            <th>Documentos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movilidad as $movilidad)
                        <tr>
                            <td></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="/SolicitudPDF/{{$movilidad->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                @if ($movilidad->Estado === 1)
                                    <a href="/UpdateEstado/{{$movilidad->id}}/0" class="btn btn-default btn-sm">Aprobado</a>
                                @elseif ($movilidad->Estado === 0)
                                    <a href="/UpdateEstado/{{$movilidad->id}}/1" class="btn btn-danger btn-sm">Sin Aprovar</a>
                                @endif
                            </td>
                            <td>{{ $movilidad->Nombre }} {{ $movilidad->ApellidoP }} {{ $movilidad->ApellidoM }}</td>
                            <td>{{ $movilidad->Direccion }}</td>
                            <td>{{ $movilidad->TelefonoC }}</td>
                            <td>{{ $movilidad->CorreoE }}</td>
                            <td> <br> {{ $movilidad->CURP }}</td>
                            <td>
                                <br>
                                {{ Carbon\Carbon::parse($movilidad->FechaI)->toFormattedDateString('d-m-Y') }}
                                /
                                {{ Carbon\Carbon::parse($movilidad->FechaT)->toFormattedDateString('d-m-Y') }}
                            </td>
                            <td> <br> {{ $movilidad->InstitucionD }}</td>
                            <td> <br> {{ $movilidad->Promedio }}</td>
                            <td> <br> {{ $movilidad->Tesis }}</td>
                            <td> <br> <textarea name="comentarios" rows="3" cols="100" disabled>{{ $movilidad->Materias }}</textarea></td>
                            <td>
                                <br>
                                <!--prueba-->
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->UniversidadO}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Oficio de postulación de la Universidad de origen</a>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->Motivos}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Exposición de motivos</a>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->HistorialA}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Historial académico</a>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->CV}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">CV</a>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->SeguroM}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Seguro médico</a>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->IdentificacionO}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Identificación oficial</a>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->CertificadoI}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Documento migratorio</a>
                                <br>
                                <br>
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->DocumentoM}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Certificado de conocimiento del idioma español</a>
                                <!--fin prueba-->
                            </td>
                           <!-- <td>
                                <a href="#" class="btn btn-default btn-sm">Aprobar</a>
                                <a href="#" class="btn btn-danger btn-sm">Rechazar</a>
                            </td> -->
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>


  
@endsection