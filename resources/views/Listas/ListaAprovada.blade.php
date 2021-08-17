@extends('welcome')
@section('content')
@include('layouts.nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <section class="content" >
        <div class="row">
            <div class="row">
                <div class="col-xs-5">
                    &nbsp;
                </div>
                <div class="col-xs-7">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-01">Solicitudes Pendientes</a></li>
                        <li><a data-toggle="tab" href="#tab-02">Solicitudes Aprobadas</a></li>
                        <li><a data-toggle="tab" href="#tab-03">Solicitudes Rechazadas</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-01">{{$pendientes}}</div>
                        <div class="tab-pane" id="tab-02">{{$aceptado}}</div>
                        <div class="tab-pane" id="tab-03">{{$rechazado}}</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <h2>Solicitudes de Movilidad</h2>
                <hr class="red">
            </div>
            <div class="col-sm-12">                 
                <table id="myTable1" name="myTable1" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th style="text-align: center" scope="col">&nbsp;</th>
                            <th>Foto</th>
                            <th>PDF</th>
                            <th>Estado de Solicitud</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo electrónico</th>
                            <th>No. Matricula</th>
                            <th>CURP o número de pasaporte</th>
                            <th>Periodo para realizar la movilidad</th>
                            <th>Institución de Procedencia</th>
                            <th>Promedio</th>
                            <th>Nombre de tesis</th>
                            <th>Materias a cursar</th>
                            <th>Comentarios</th>
                            <th>Solicitud</th>
                            <th>Documentos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movilidad as $movilidad)
                        <tr>
                            <td></td>
                            <td>
                                <img onclick="javascript:this.width=450;this.height=338" ondblclick="javascript:this.width=100;this.height=80" src="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->Foto}}" width="100"/>
                            </td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="/SolicitudPDF/{{$movilidad->id}}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
                            </td>
                            <td> 
                                @if ($movilidad->Estado === 2)
                                    <h5>Aprobado!!!</h5>
                                @elseif($movilidad->Estado === 3)
                                    <h5>Rechazado!!!</h5>
                                    @elseif($movilidad->Estado === 1)
                                        <h5>Pendiente de aprobación!!!</h5>
                                @endif 
                            
                            </td>
                            <td>{{ $movilidad->Nombre }} {{ $movilidad->ApellidoP }} {{ $movilidad->ApellidoM }}</td>
                            <td>{{$movilidad->Calle}} {{$movilidad->numeroE}}, {{$movilidad->numeroI}} <br> {{$movilidad->ciudad}}, {{$movilidad->estadoDir}} {{$movilidad->codigoP}} <br> {{$movilidad->pais}}</td>
                            <td>{{ $movilidad->TelefonoC }}</td>
                            <td>{{ $movilidad->CorreoE }}</td>
                            <td>
                                <br>
                                {{ $movilidad->Matricula }}
                            </td>
                            <td> <br> {{ $movilidad->CURP }} {{ $movilidad->Pasaporte }}</td>
                            <td>
                                <br>
                                    @if ($movilidad->Periodo == 1)
                                        Periodo 1 Enero a Junio
                                    @else
                                        Periodo 2 Agosto a Diciembre
                                    @endif
                            </td>
                            <td> <br> {{ $movilidad->InstitucionD }} <br> <b>País de origen:</b> {{ $movilidad->PaisM }}</td>
                            <td> <br> {{ $movilidad->Promedio }}</td>
                            <td> <br> {{ $movilidad->Tesis }}</td>
                            <td> 
                                
                                <br> <textarea name="comentarios" rows="3" cols="100" disabled>{{ $movilidad->Materias }}</textarea>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('Aprobacion.correo') }}" class="form-inline" role="form">
                                    {{ csrf_field()}}
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-row">    
                                            <div class="form-group"> 
                                                <div>
                                                    <label class="col-sm-4 control-label" for="para"> Correo:</label>
                                                    <input class="form-control" type="text" name="correo-mail" id="correo-mail" value="{{ $movilidad->CorreoE }}">
                                                </div>
                                                <br>
                                                <div>
                                                    <label for="" class="col-sm-4 control-label">Materias:</label>
                                                    <select id="Denegadas" name="Denegadas[]" multiple class="form-control">
                                                        @if ($movilidad->Materias != "")
                                                            @foreach (explode(',', $movilidad->Materias) as $info)
                                                                <option>{{$info}}</option> 
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <br>
                                                <div>
                                                    <label class="col-sm-4 control-label" for="asunto">Asunto:</label>
                                                    <input type="text" name="asunto" id="asunto">
                                                </div>
                                                <br>
                                                <div>    
                                                    <label class="col-sm-4 control-label" for="Comentarios">Comentarios:</label>
                                                    <textarea class="form-control" id="Coment" name="Coment" rows="3"></textarea>
                                                </div>
                                                <br>
                                                <button class="btn btn-primary" id="EnvCom" type="submit">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                            </td>
                            <td>
                                @if ($movilidad->Estado === 3)
                                    <a href="/AprobarEstado/{{$movilidad->id}}/2" class="btn btn-default btn-sm">Aprobar</a>
                                    <a href="/AprobarEstado/{{$movilidad->id}}/3" class="btn btn-danger btn-sm">Rechazar</a>
                                @elseif ($movilidad->Estado === 2)
                                    <a href="/AprobarEstado/{{$movilidad->id}}/2" class="btn btn-default btn-sm">Aprobar</a>
                                    <a href="/AprobarEstado/{{$movilidad->id}}/3" class="btn btn-danger btn-sm">Rechazar</a>
                                    @elseif ($movilidad->Estado === 1)
                                        <a href="/AprobarEstado/{{$movilidad->id}}/2" class="btn btn-default btn-sm">Aprobar</a>
                                        <a href="/AprobarEstado/{{$movilidad->id}}/3" class="btn btn-danger btn-sm">Rechazar</a>
                                @endif
                            </td>
                            <td>
                                <br>
                                <!--prueba-->
                                <a href="{{asset('storage').'/'.'externa/'.$movilidad->users_id.'/'.$movilidad->Foto}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Foto</a>
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
    
<script>
    $(document).ready(function(){
        $('#Denegadas').multiselect({
        nonSelectedText: 'Denegadas',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth:'400px'
        });
        
    });
</script>

  
@endsection