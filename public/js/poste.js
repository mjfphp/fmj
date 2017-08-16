$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteP').modal('show');
    var el = $(this).parent().prevAll().last();
    $('#deleteP form').attr('action','/postes/' + el.innerText);
});

$(".edit-modal").on('click',function() {
    $('#editP').modal('show');
    var el = $(this).parent().prevAll();
    $('#editP form').attr('action','/postes/' + el[2].innerText);
    $('#editP #ref').val(el[1].innerText);
    $('#editP #intitule').val(el[0].innerText);
});

$(function () {
    $('#modal').modal(toggle)
});
