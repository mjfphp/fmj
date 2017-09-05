
$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $("#editS form").attr('action',"/postes/"+ id);
    $('#posteId').attr('value',id);
    $('#editS #ref').val(el[2].innerText);
    $('#editS #intitule').val(el[1].innerText);
    $('#editS #taux').val(el[0].innerText);
});

