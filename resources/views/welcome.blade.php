<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movilidad</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <style>
            div.footer {
                text-align: center;
                }
        </style>
        <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        @include('sweetalert::alert')
            <div class="footer">
                <hr>
                    Instituto de Investigaciones Dr. José María Luis Mora <br>
                    <span class="glyphicon glyphicon-globe" aria-hidden="true">&nbsp;&nbsp;</span><a href="http://www.mora.edu.mx/" target="new"> www.mora.edu.mx </a> <br>
                    <span class="icon-home" aria-hidden="true">&nbsp;&nbsp;</span>Plaza Valentín Gómez Farías #12, Col. San Juan Mixcoac, México CDMX., C.P 03730 <br>
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true">&nbsp;&nbsp;</span>Tel. 55 98 37 77 Servicios escolares Ext. 1101, 1111, 1125 y 1127 <br>
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;&nbsp;</span>sescolares@institutomora.edu.mx  <br>       
                <hr>
            </div>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
        
        
    <script>
        $('#myTable1').DataTable( {
          "deferRender": true,
          "retrieve": true,
          "processing": true,
          "sSearch": "Filter Data",
          "dom":     "<'row'<'col-sm-3 text-center'l><'col-sm-3'B><'col-sm-6'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row'<'col-sm-6'i><'col-sm-6'p>>",
          "select": true,
          "language": {
            
                "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
            },
            "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
          },
         "buttons": ['excel']
        } );
    </script>
    <script>
        $('#myTable2').DataTable( {
          "deferRender": true,
          "retrieve": true,
          "processing": true,
          "sSearch": "Filter Data",
          "dom":     "<'row'<'col-sm-3 text-center'l><'col-sm-3'B><'col-sm-6'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row'<'col-sm-6'i><'col-sm-6'p>>",
          "select": true,
          "language": {
            
                "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
            },
            "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
          },
         "buttons": ['excel']
        } );
    </script>
      

    <script> 
        $(document).ready( function () {
            $('#myTable1').dataTable( {
                "autoWidth": false
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
            } );
            } );
    </script>
    <script> 
    $(document).ready( function () {
        $('#myTable2').dataTable( {
            "autoWidth": false
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
        } );
        } );
    </script>
    
    <script src="{{ asset('js/tablas.js') }}" defer>
    </script>
    </body>
</html>
