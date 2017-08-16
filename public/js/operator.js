$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteOp').modal('show');
    var el = $(this).parent().prevAll();
    $('#deleteOp form').attr('action','/operators/' + el[13].innerText);

});

$(".edit-modal").on('click',function() {
    $('#editOp').modal('show');
    var el = $(this).parent().prevAll();
    $('#editOp form').attr('action','/operators/' + el[12].innerText);
    $('#editOp #id').val(el[12].innerText);
    $('#editOp #imm').val(el[11].innerText);
    $('#editOp #name').val(el[10].innerText);
    $('#editOp #cin').val(el[9].innerText);
    $('#editOp #n_phone').val(el[8].innerText);
    $('#editOp #n_pass').val(el[7].innerText);
    $('#editOp #birthDate').val(el[6].innerText);
    $('#editOp #ville').val(el[5].innerText);
    $('#editOp #debutC').val(el[4].innerText);
    $('#editOp #finC').val(el[3].innerText);
    $('#editOp #examMedical').val(el[2].innerText);
    $('#editOp #poste').val(el[1].innerText);
    $('#editOp #active').val(el[0].innerText);
});



$(function () {
    $('#modal').modal(toggle)
});
