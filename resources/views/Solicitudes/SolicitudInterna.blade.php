@extends('formcontent')
@section('content')
@include('layouts.navSolicitud')
<br>
<br>
<section>
    <h2>Campos obligatorios <Span class = "red"> * </span> </h2>
    <hr class="red">
    
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
                                    <label class="col-sm-12 control-label" for="ApellidoP"><Span class = "red"> * </span>Apellido Paterno:</label>
                                    <input class="form-control" value="" id="ApellidoP" name="ApellidoP" placeholder="Apellido Paterno" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="ApellidoM"><Span class = "red"> * </span>Apellido Materno:</label>
                                    <input class="form-control" value="" id="ApellidoM" name="ApellidoM" placeholder="Apellido Materno" type="text">
                                </div>
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="Nombre"><Span class = "red"> * </span>Nombre:</label>
                                    <input class="form-control" value="" id="Nombre" name="Nombre" placeholder="Nombre" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="tel">Teléfono:</label>
                                    <input class="form-control" value="" id="tel" name="tel" placeholder="Telefono" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="correoE">Correo Electrónico:</label>
                                    <input class="form-control" value="" id="correoE" name="correoE" placeholder="Correo Electronico" type="text">
                                </div>
                                <!--
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-2 control-label" for="dir">Dirección:</label>
                                    <input class="form-control" value="" id="dir" name="dir" placeholder="Direccion" type="text">
                                </div>
                            -->
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="Calle">Calle:</label>
                                    <input class="form-control" id="Calle" name="Calle" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="numeroE">Numero Exterior:</label>
                                    <input class="form-control" id="numeroE" name="numeroE" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="numeroI">Numero Interior:</label>
                                    <input class="form-control" id="numeroI" name="numeroI" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="codigoP">Codigo Postal:</label>
                                    <input class="form-control" id="codigoP" name="codigoP" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="colonia">Colonia:</label>
                                    <input class="form-control" id="colonia" name="colonia" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="ciudad">Ciudad:</label>
                                    <input class="form-control" id="ciudad" name="ciudad" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="estadoDir">Estado:</label>
                                    <input class="form-control" id="estadoDir" name="estadoDir" type="text">
                                </div>
                                <div class="form-group col-xs-4">
                                    <label class="col-sm-12 control-label" for="pais">país:</label>
                                    <input class="form-control" id="pais" name="pais" type="text">
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <div class="form-group col-xs-4">                                    
                                    <label class="col-sm-12 control-label" for="curp">CURP o Numero de psaporte:</label>
                                    <input class="form-control" value="" id="curp" name="curp" placeholder="CURP o Numero de psaporte" type="text">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <div class="form-group col-xs-4">    
                                    <label for=""> <Span class = "red"> * </span> CURP o Número de pasaporte:</label>
                                        <select class="form-control" id="status" name="status" onChange="mostrar(this.value);">
                                            <option value="Otro">&nbsp;</option>
                                            <option value="CURP">CURP</option>
                                            <option value="Pasaporte">Pasaporte</option>
                                        </select>
                                </div>
                            <!-- <div class="form-group col-md-5">
                                    error('CURP')
                                        <button type="button" class="btn btn-primary btn-xs disabled">
                                            {$message}} <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        </button>
                                        <br>
                                        <br>
                                    enderror
                                    <label class="col-sm-12 control-label" for="CURP">CURP o número de pasaporte :</label>
                                    <input class="form-control" value="{old('CURP')}}" id="CURP" name="CURP" placeholder="CURP o número de pasaporte " type="text">
                                </div> -->
                            </div>
                            <div class="form-group" id="CURP" style="display: none;">
                                <input class="form-control" value="{{old('CURP')}}" id="CURP" name="CURP" placeholder="CURP" type="text">
                            </div>
                            <div class="form-group" id="Pasaporte" style="display: none;">
                                <input class="form-control" value="{{old('CURP')}}" id="CURP" name="CURP" placeholder="Número de pasaporte " type="text">
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
                                    <label class="col-sm-12 control-label" for="Materias">Materias a cursar <br> (Máximo 6 materias)</label>
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
                                <label class="control-label" for="Motivos"><Span class = "red"> * </span>Exposición de motivos:</label>
                                <input id="Motivos" name="Motivos" type="file" accept="application/pdf">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="HistorialA"><Span class = "red"> * </span>Historial académico:</label>
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

<script type="text/javascript">
    function mostrar(id) {
        if (id == "CURP") {
            $("#CURP").show();
            $("#Pasaporte").hide();
        }
    
        if (id == "Pasaporte") {
            $("#CURP").hide();
            $("#Pasaporte").show();
        }

        if (id == "Otro") {
            $("#CURP").hide();
            $("#Pasaporte").hide();
        }
    }
</script>
@endsection