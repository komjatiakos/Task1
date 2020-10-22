$(document).ready( function () {
  $('#cars').DataTable({
    "responsive": true,
    "paging": false,
    "searching": false,
    "info": false
  });
  $('#addModal').on('shown.bs.modal', function() {
  });
  $('.updatebtn').on('click', function(){
    $('#updateModal').modal('show');
                $tr=$(this).closest('tr');
            var data=$tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_id').val(data[0]);
    });
});