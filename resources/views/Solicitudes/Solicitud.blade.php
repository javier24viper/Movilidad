@extends('formcontent')
@section('content')
@include('layouts.navSolicitud')
<section class="content">
    <form class="needs-validation" action="{{route('store')}}" id="registro-solicitud" accept-charset="UTF-8" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        @csrf
        <div class="panel-group ficha-collapse" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-parent="#accordion" data-toggle="collapse" href="#panel-01" aria-expanded="true" aria-controls="panel-01">
                        Datos del solicitante
                    </a>
                </h4>
                </div>
                <div class="panel-collapse collapse in" id="panel-01">
                <div class="panel-body">
                    <div class="form-row">
                        <div class="form-group">   
                            <div class="form-group col-xs-4">
                                @error('ApellidoP')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-12 control-label" for="ApellidoP">Apellido Paterno:</label>
                                <input class="form-control" value="{{old('ApellidoP')}}" id="ApellidoP" name="ApellidoP" placeholder="Apellido Paterno" type="text">
                            </div>
                            <div class="form-group col-xs-4">
                                @error('ApellidoM')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror                
                                <label class="col-sm-12 control-label" for="ApellidoM">Apellido Materno:</label>
                                <input class="form-control" value="{{old('ApellidoM')}}" id="ApellidoM" name="ApellidoM" placeholder="Apellido Materno" type="text">
                            </div>
                            <div class="form-group col-xs-4">   
                                @error('Nombre')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror 
                                <label class="col-sm-12 control-label" for="Nombre">Nombre:</label>
                                <input class="form-control" value="{{old('Nombre')}}" id="Nombre" name="Nombre" placeholder="Nombre" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group col-xs-4">
                                @error('Direccion')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-12 control-label" for="Direccion">Dirección:</label>
                                <input class="form-control" value="{{old('Direccion')}}" id="Direccion" name="Direccion" placeholder="Teléfono" type="text">
                            </div>
                            <div class="form-group col-xs-4">
                                @error('TelefonoC')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-12 control-label" for="TelefonoC">Teléfono Celular:</label>
                                <input class="form-control" value="{{old('TelefonoC')}}" id="TelefonoC" name="TelefonoC" placeholder="Teléfono" type="text">
                            </div>
                            <div class="form-group col-xs-4">
                                @error('CorreoE')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror 
                                <label class="col-sm-12 control-label" for="CorreoE">Correo Electronico:</label>
                                <input class="form-control" value="{{old('CorreoE')}}" id="CorreoE" name="CorreoE" placeholder="Correo Electronico" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group col-md-5">
                                @error('CURP')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-12 control-label" for="CURP">CURP o número de pasaporte :</label>
                                <input class="form-control" value="{{old('CURP')}}" id="CURP" name="CURP" placeholder="CURP o número de pasaporte " type="text">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="panel-group ficha-collapse" id="accordion2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-parent="#accordion2" data-toggle="collapse" href="#panel-02" aria-expanded="true" aria-controls="panel-02">
                            Información de la estancia de procedencia
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse in" id="panel-02">
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group col-xs-5">
                                    @error('FechaI')
                                        <button type="button" class="btn btn-primary btn-xs disabled">
                                            {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        </button>
                                        <br>
                                        <br>
                                    @enderror
                                    <label for="inputState">Fecha de Inicio:</label>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="date" value="<?php echo date("Y-m-d");?>" class="form-control float-right" name="FechaI" id="FechaI">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group col-xs-5">
                                    @error('FechaT')
                                        <button type="button" class="btn btn-primary btn-xs disabled">
                                            {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        </button>
                                        <br>
                                        <br>
                                    @enderror
                                    <label for="inputState">Fecha de Término:</label>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="date" value="<?php echo date("Y-m-d");?>" class="form-control float-right" name="FechaT" id="FechaT">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-6">
                                @error('InstitucionD')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-12 control-label" for="InstitucionD">Institución de procedencia:</label>
                                <input class="form-control" value="{{old('InstitucionD')}}" id="InstitucionD" name="InstitucionD" placeholder="Institución procedencia" type="text">
                            </div>
                            <div class="form-group col-md-5">
                                @error('Promedio')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-4 control-label" for="Promedio">Promedio:</label>
                                <input class="form-control" value="{{old('Promedio')}}" id="Promedio" name="Promedio" placeholder="Promedio mayor a 8.5" type="number" step="0.1" min="8.5" max="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group col-xs-6">
                                @error('Tesis')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label class="col-sm-12 control-label" for="Tesis">Nombre de tesis:</label>
                                <input class="form-control" value="{{old('Tesis')}}" id="Tesis" name="Tesis" placeholder="Nombre de tesis" type="text">
                            </div>
                            <div class="form-group col-xs-6">
                                @error('Materias')
                                    <button type="button" class="btn btn-primary btn-xs disabled">
                                        {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                    </button>
                                    <br>
                                    <br>
                                @enderror
                                <label for="">Propuesta de asignaturas a cursar</label>
                                <select id="Materias" name="Materias[]" multiple class="form-control" >
                                    @foreach ($materia as $materias)
                                        <option value="{{ $materias->nombre_materia }}">{{ $materias->nombre_materia }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="panel-group ficha-collapse" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-parent="#accordion" data-toggle="collapse" href="#panel-01" aria-expanded="true" aria-controls="panel-01">
                    Documentos
                    </a>
                </h4>
                </div>
                <div class="panel-collapse collapse in" id="panel-01">
                <div class="panel-body">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Oficio de postulación de la Universidad de origen:</label>
                                <div class="col-sm-5">
                                    <input id="UniversidadO" name="UniversidadO" type="file" accept="application/pdf">
                                </div>
                            </div> 
                            @error('UniversidadO')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Exposición de motivos:</label>
                                <div class="col-sm-5">
                                    <input id="Motivos" name="Motivos" type="file" accept="application/pdf">
                                </div>
                            </div> 
                            @error('Motivos')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class=" col-sm-7 control-label" for="file-01">Historial académico:</label>
                                <div class="col-sm-5">
                                    <input id="HistorialA" name="HistorialA" type="file" accept="application/pdf">
                                </div>
                            </div>
                            @error('HistorialA')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Curriculum vitae :</label>
                                <div class="col-sm-5">
                                    <input id="CurriculumV" name="CurriculumV" type="file" accept="application/pdf">
                                </div>
                            </div>
                            @error('CurriculumV')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Seguro médico:</label>
                                <div class="col-sm-5">
                                    <input id="SeguroM" name="SeguroM" type="file" accept="application/pdf">
                                </div>
                            </div>
                            @error('SeguroM')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Identificación oficial:</label>
                                <div class="col-sm-5">
                                    <input id="IdentificacionO" name="IdentificacionO" type="file" accept="application/pdf">
                                </div>
                            </div>
                            @error('IdentificacionO')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Documento migratorio (en el caso de extranjeros):</label>
                                <div class="col-sm-5">
                                    <input id="DocumentoM" name="DocumentoM" type="file" accept="application/pdf">
                                </div>
                            </div>
                            @error('DocumentoM')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                            <br>
                            <br>
                            <br>
                            <div class="form-group col-xs-6">
                                <label class="col-sm-7 control-label" for="file-01">Certificado de conocimiento del idioma español :</label>
                                <div class="col-sm-5">
                                    <input id="CertificadoI" name="CertificadoI" type="file" accept="application/pdf">
                                </div>
                            </div>
                            @error('CertificadoI')
                                <button type="button" class="btn btn-primary btn-xs disabled">
                                    {{$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                </button>
                            @enderror
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>      
        <button class="btn btn-primary pull-right btnenviar" id="btnenviar" type="submit">Enviar</button>
        <br>
        <br>
    </form>
</section>
<br>
<br>

<script>
    $(document).ready(function(){
        $('#Materias').multiselect({
        nonSelectedText: 'Materias',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth:'400px'
        });
        
    });
</script>

<script>
    var ultimoValorValido = null;
    $("#Materias").on("change", function() {
    if ($("#Materias option:checked").length > 6) {
        $("#Materias").val(ultimoValorValido);
    } else {
        ultimoValorValido = $("#Materias").val();
    }
    });
</script>

    
@endsection



