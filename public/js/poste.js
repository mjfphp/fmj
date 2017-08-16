$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteP').modal('show');
    var id=$(this).attr('id');
    $('#deleteP form').attr('action','/postes/' + id);
});

$(".edit-modal").on('click',function() {
    $('#editP').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $('#editP form').attr('action','/postes/' + id);
    $('#editP #ref').val(el[1].innerText);
    $('#editP #intitule').val(el[0].innerText);
});

$(function () {
    $('#modal').modal(toggle)
});
