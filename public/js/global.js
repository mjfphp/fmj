$(document).ready(function() {
    $('#table').DataTable();
} );


$(function () {
    $('#modal').modal(toggle)
});


$(".delete-modal").on('click',function() {
    $('#deleteS').modal('show');
    var action=$(".delete-modal").attr('data-info');
    var id=$(this).attr('id');
    $('#deleteS form').attr('action',action + id);
});


