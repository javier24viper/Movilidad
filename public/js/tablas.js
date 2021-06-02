

$(document).ready(function(){
    $('#myTable1').DataTable({
       scroller: true,
       scrollY: 200
    });
 
    $('#myTable2').DataTable({
       scroller: true,
       scrollY: 200
    });
    
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
       $($.fn.dataTable.tables(true)).DataTable()
          .scroller.measure();
    });   
 });