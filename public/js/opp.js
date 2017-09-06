
$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
     $('#editS form').attr('action',"/opps/" + id);
     $('#oppId').attr('value',id);
    $('#editS #ref').val(el[6].innerText);
    $('#editS #qte').val(el[4].innerText);
    $('#editS #etat').val(el[3].innerText);
    $('#editS #dateD').val(el[2].innerText);
    $('#editS #dateF').val(el[1].innerText);
    $('#editS #description').val(el[0].innerText);
});


