$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteA').modal('show');
    var el = $(this).parent().prevAll().last();
    $('#deleteA form').attr('action','/articles/'+el.innerText);
});

$(".edit-modal").on('click',function() {
    $('#editA').modal('show');
    var el = $(this).parent().prevAll();
    $('#editA form').attr('action','/articles/' + el[8].innerText);
    $('#editA #id').val(el[8].innerText);
    $('#editA #ref').val(el[7].innerText);
    $('#editA #name').val(el[6].innerText);
    $('#editA #description').val(el[5].innerText);
    $('#editA #standarPrice').val(el[4].innerText);
    $('#editA #weightNet').val(el[3].innerText);
    $('#editA #typ').val(el[2].innerText);
    $('#editA #uomId').val(el[1].innerText);
    $('#editA #state').val(el[0].innerText);
});



$(function () {
    $('#modal').modal(toggle)
});