@extends('welcome')
@section('content')
@include('layouts.nav')
    <section>
      <h3>Texto inicial</h3>
        <hr class="red">
        <form role="form" id="FormInicio" action="{{route('CrearComent')}}" accept-charset="UTF-8" method="POST" enctype="multipart/form-data">
          {{ csrf_field()}}
            <div class="form-group">
              <label class="control-label" for="Titulo">Titulo:</label>
              <input class="form-control" id="Titulo" name="Titulo" placeholder="Titulo" type="text">
            </div>
            <div class="form-group">
                <label class="control-label" for="Texto">Texto:</label>
              <textarea class="form-control" id="Cuerpo" name="Cuerpo" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label" for="pie">Pie de pagina:</label>
              <input class="form-control" id="Pie" name="Pie" placeholder="Pie de pagina" type="text">
            </div>
            <button class="btn btn-primary pull-right" type="submit">Enviar</button>
            <br>
            <br>
            <br>
            <br>
          </form>
    </section>
    <script>
      $('#FormInicio').submit(function(e){
        e.preventDefault();
        var Titulo = $('#Titulo').val();
        var Cuerpo = $('#Cuerpo').val();
        var Pie = $('#Pie').val();
        var _token = $("input[name=_token]").val();
        $.ajax({
          url:"{{route('CrearComent')}}",
          type: 'POST',
          data:{
            Titulo: Titulo,
            Cuerpo: Cuerpo,
            Pie: Pie,
            _token:_token
          },
          success:function(response){
            if(response){
              $('#FormInicio')[0].reset();
            }
          }
        });
      });
    </script>
@endsection