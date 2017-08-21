
var actions=function(i){
    var action=$(".delete-modal").attr('data-info');
    var id=$(".delete-modal").attr('id');
    $(i).attr('action',action  + id);
}



$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    actions("editS form");
    $('#editS #name').val(el[7].innerText);
    $('#editS #produitF').find("option").each(function(){
        if($(this).text() === el[6].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });
    $('#editS #qte').val(el[5].innerText);
    $('#editS #montant').val(el[3].innerText);
    $('#editS #etat').val(el[2].innerText);
    $('#editS #dateOp').val(el[1].innerText);
    $('#editS #description').val(el[0].innerText);
});



