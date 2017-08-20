var actions=function(i){
    var action=$(".delete-modal").attr('data-info');
    var id=$(".delete-modal").attr('id');
    $(i).attr('action',action + id);
}


$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    actions("#editS form");
    $('#editS #imm').val(el[11].innerText);
    $('#editS #name').val(el[10].innerText);
    $('#editS #cin').val(el[9].innerText);
    $('#editS #n_phone').val(el[8].innerText);
    $('#editS #n_pass').val(el[7].innerText);
    $('#editS #birthDate').val(el[6].innerText);
    $('#editS #ville').val(el[5].innerText);
    $('#editS #debutC').val(el[4].innerText);
    $('#editS #finC').val(el[3].innerText);
    $('#editS #examMedical').val(el[2].innerText);
    $('#editS #poste').val(el[1].innerText);
    $('#editS #active').val(el[0].innerText);
});


