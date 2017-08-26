

var actions=function(i){
    var action=$(".delete-modal").attr('data-info');
    var id=$(".delete-modal").attr('id');
    $(i).attr('action',action  + id);
}

$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    actions("#editS form")
    $('#editS #ref').val(el[2].innerText);
    $('#editS #intitule').val(el[1].innerText);
    $('#editS #taux').val(el[0].innerText);
});

