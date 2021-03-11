@extends('formcontent')
@section('content')
@include('layouts.navSolicitud')
<br>
<br>
<section>
    <form action="{{route('InternaStore')}}" id="solicitud-interna" accept-charset="UTF-8" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-group ficha-collapse" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-parent="#accordion" data-toggle="collapse" href="#panel-01" aria-expanded="true" aria-controls="panel-01">
                            Datos generales
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse in" id="panel-01">
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="Nombre">Nombre:</label>
                                    <input class="form-control" value="" id="Nombre" name="Nombre" placeholder="Nombre" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="ApellidoP">Apellido Paterno:</label>
                                    <input class="form-control" value="" id="ApellidoP" name="ApellidoP" placeholder="Apellido Paterno" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="ApellidoM">Apellido Materno:</label>
                                    <input class="form-control" value="" id="ApellidoM" name="ApellidoM" placeholder="Apellido Materno" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-2 control-label" for="dir">Dirección:</label>
                                    <input class="form-control" value="" id="dir" name="dir" placeholder="Direccion" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="tel">Teléfono:</label>
                                    <input class="form-control" value="" id="tel" name="tel" placeholder="Telefono" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="correoE">Correo Electrónico:</label>
                                    <input class="form-control" value="" id="correoE" name="correoE" placeholder="Correo Electronico" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="curp">CURP o Numero de psaporte:</label>
                                    <input class="form-control" value="" id="curp" name="curp" placeholder="CURP o Numero de psaporte" type="text">
                                </div>
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
                            Datos 
                        </a>
                    </h4>
                </div>
                <div class="panel-collapse collapse in" id="panel-01">
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="programaO">Programa de origen:</label>
                                    <input class="form-control" value="" id="programaO" name="programaO" placeholder="Programa de origen" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="programaD">Programa de destino:</label>
                                    <input class="form-control" value="" id="programaD" name="programaD" placeholder="Programa de destino" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="periodo">Periodo para realizar la movilidad:</label>
                                    <input class="form-control" value="" id="periodo" name="periodo" placeholder="Periodo" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="sem">Semestre en curso:</label>
                                    <input class="form-control" value="" id="sem" name="sem" placeholder="Semestre" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="prom">Promedio:</label>
                                    <input class="form-control" value="" id="prom" name="prom" placeholder="Promedio mayor a 8.5" type="number" step="0.1" min="8.5" max="10">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="correoE">Nombre de tesis:</label>
                                    <input class="form-control" value="" id="tesis" name="tesis" placeholder="Tesis" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="Materias">Materias a cursar:</label>
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
                                <label class="control-label" for="Motivos">Exposición de motivos:</label>
                                <input id="Motivos" name="Motivos" type="file" accept="application/pdf">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="HistorialA">Historial académico:</label>
                                <input id="HistorialA" name="HistorialA" type="file" accept="application/pdf">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary pull-right btnenviar" id="btnenviar" type="submit">Enviar</button>
        <br>
        <br>
        <br>
    </form>
</section>

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