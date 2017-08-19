$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteS').modal('show');
    var id=$(this).attr('id');
    $('#deleteS form').attr('action','/postes/' + id);
});

$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $('#editS form').attr('action','/postes/' + id);
    $('#editS #ref').val(el[1].innerText);
    $('#editS #intitule').val(el[0].innerText);
});

$(function () {
    $('#modal').modal(toggle)
});
