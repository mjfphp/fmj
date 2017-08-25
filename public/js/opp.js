var actions=function(i){
    var action=$(".delete-modal").attr('data-info');
    var id=$(".delete-modal").attr('id');
    $(i).attr('action',action + id);
};

$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
     actions('#editS form');
    $('#editS #ref').val(el[8].innerText);
    $('#editS #name').val(el[7].innerText);

    $('#editS #qte').val(el[4].innerText);

    $('#editS #montant').val(el[3].innerText);
    $('#editS #etat').val(el[2].innerText);
    $('#editS #dateOp').val(el[1].innerText);
    $('#editS #description').val(el[0].innerText);
});


