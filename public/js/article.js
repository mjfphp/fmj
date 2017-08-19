$(document).ready(function() {
    $('#table').DataTable();
} );
$(".delete-modal").on('click',function() {
    $('#deleteS').modal('show');
    var id=$(this).attr('id');
    $('#deleteS form').attr('action','/articles/' + id);
});

$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $('#editS form').attr('action','/articles/' + id);
    $('#editS #ref').val(el[7].innerText);
    $('#editS #name').val(el[6].innerText);
    $('#editS #description').val(el[5].innerText);
    $('#editS #standarPrice').val(el[4].innerText);
    $('#editS #weightNet').val(el[3].innerText);
    $('#editS #typ').val(el[2].innerText);
    $('#editS #uomId').val(el[1].innerText);
    $('#editS #state').val(el[0].innerText);
});



$(function () {
    $('#modal').modal(toggle)
});