$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteO').modal('show');
    var id=$(this).attr('id');
    $('#deleteO form').attr('action','/opps/' + id);

});

$(".edit-modal").on('click',function() {
    $('#editO').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $('#editO form').attr('action','/opps/' + id);
    $('#editO #name').val(el[7].innerText);




    $('#editO #produitF').find("option").each(function(){
        if($(this).text() === el[6].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });

    $('#editO #qte').val(el[5].innerText);
    $('#editO #montant').val(el[3].innerText);
    $('#editO #etat').val(el[2].innerText);
    $('#editO #dateOp').val(el[1].innerText);
    $('#editO #description').val(el[0].innerText);

});



$(function () {
    $('#modal').modal(toggle)
});
