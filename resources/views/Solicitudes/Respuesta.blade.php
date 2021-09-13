@extends('welcome')
@section('content')
@include('layouts.navSolicitud')
    <section>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-01">Datos del solicitante</a></li>
            <li><a data-toggle="tab" href="#tab-02">Datos de Movilidad</a></li>
            <li><a data-toggle="tab" href="#tab-03">Documentos</a></li>
            <li><a data-toggle="tab" href="#tab-04">Materias no aprobadas para movilidad</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-01">
                <h5 class="card-title">Nombre: {{$datos->ApellidoP}} {{$datos->ApellidoM}} {{$datos->Nombre}}</h5>
                <p class="card-text"><b>Dirección:</b> {{$datos->Calle}} {{$datos->numeroE}},  {{$datos->numeroI}} <br> {{$datos->ciudad}}, {{$datos->estadoDir}} {{$datos->codigoP}} <br> {{$datos->pais}}</p>
                <p class="card-text"><small class="text-muted"><b>Matricula:</b> {{$datos->Matricula}}</small></p>
            </div>
            <div class="tab-pane" id="tab-02">
                <h5 class="card-title">Institución:{{$datos->InstitucionD}}</h5>
                <p class="card-text"><b>Materias:</b> 
                    <br>
                    @if ($datos->Materias != "")
                    @foreach(explode(',', $datos->Materias) as $info)
                            {{$info}}
                        </label>
                        <br>
                        
                    @endforeach 
                @endif
                </p>
                <p class="card-text"><small class="text-muted"><b>Promedio:</b> {{$datos->Promedio}}</small></p>
            </div>
            <div class="tab-pane" id="tab-03">
                
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->Foto}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Foto</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->UniversidadO}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Oficio de postulación de la Universidad de origen</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->Motivos}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Exposición de motivos</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->HistorialA}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Historial académico</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->CV}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">CV</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->SeguroM}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Seguro médico</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->IdentificacionO}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Identificación oficial</a>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->CertificadoI}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Documento migratorio</a>
                <br>
                <br>
                <a href="{{asset('storage').'/'.'externa/'.$datos->users_id.'/'.$datos->DocumentoM}}" onclick="window.open(this.href, 'mywin', 'toolbar=0,menubar=0,scrollbars=1,height=600,width=720'); return false;">Certificado de conocimiento del idioma español</a>
            </div>
            <div class="tab-pane" id="tab-04">
                <h5 class="card-title">Materias elegidas: </h5>
                <p class="card-text">
                    @if ($datos->Materias != "")
                    @foreach(explode(',', $datos->Materias) as $info)
                            {{$info}}
                        </label>
                        <br>
                        
                    @endforeach 
                @endif
                </p>
                <p class="card-text"><b>Materias no aprobadas:</b></p>
                <p class="card-text"><b>Materias nuevas:</b></p>
                <br>
                <label for=""> <Span class = "red"> * </span> Propuesta de asignaturas a cursar (Máximo 6 materias)</label>
                    <select id="Materias" name="Materias[]" multiple class="form-control" >
                        @foreach ($materia as $materias)
                            <option value="{{ $materias->nombre_materia }}"><b>creditos: </b>{{$materias->creditos}} <b>Nombre materia: </b>{{ $materias->nombre_materia }}</option>
                        @endforeach
                    </select>
                    <br>
                <p class="card-text"><small class="text-muted"><b>Por favor selecciones otras materias diferentes a las no aprobadas</b> </small></p>
            </div>
          </div>
    </section>
@endsection