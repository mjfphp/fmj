/**
 * Created by inconnu on 16/08/2017.
 */
$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteP').modal('show');
    var el = $(this).parent().prevAll().last();
    $('#deleteA form').attr('action','/postes/' + el.innerText);
});

$(".edit-modal").on('click',function() {
    $('#editA').modal('show');
    var el = $(this).parent().prevAll();
    $('#editA form').attr('action','/postes/' + el[2].innerText);
    $('#editA #id').val(el[2].innerText);
    $('#editA #ref').val(el[1].innerText);
    $('#editA #intitule').val(el[0].innerText);
});

$(function () {
    $('#modal').modal(toggle)
});
