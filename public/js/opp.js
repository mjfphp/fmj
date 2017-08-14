$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteO').modal('show');
    var el = $(this).parent().prevAll();
    $('#deleteO form').attr('action','/opps/' + el[7].innerText);

});

$(".edit-modal").on('click',function() {
    $('#editO').modal('show');
    var el = $(this).parent().prevAll();

    $('#editO form').attr('action','/opps/' + el[7].innerText);
      $('#editO #id').val(el[7].innerText);
    $('#editO #name').val(el[6].innerText);
    $('#editO #description').val(el[5].innerText);
    $('#editO #dateOp').val(el[4].innerText);
    $('#editO #etat').val(el[3].innerText);
    $('#editO #montant').val(el[2].innerText);
    $('#editO #produitF').val(el[1].innerText);
    $('#editO #qte').val(el[0].innerText);

});



$(function () {
    $('#modal').modal(toggle)
});
