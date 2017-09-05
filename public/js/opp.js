
$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
     $('#editS form').attr('action',"/opps/" + id);
     $('#oppId').attr('value',id);
    $('#editS #ref').val(el[8].innerText);
    $('#editS #name').val(el[7].innerText);

    $('#editS #qte').val(el[5].innerText);

    $('#editS #montant').val(el[3].innerText);
    $('#editS #etat').val(el[2].innerText);
    $('#editS #dateOp').val(el[1].innerText);
    $('#editS #description').val(el[0].innerText);
});


