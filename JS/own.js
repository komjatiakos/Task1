$(document).ready( function () {
  $('#cars').DataTable({
    "responsive": true,
    "paging": false,
    "searching": false,
    "info": false
  });
  $('#addModal').on('shown.bs.modal', function() {
  });
});