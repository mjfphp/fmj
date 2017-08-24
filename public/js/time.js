$(".delete-modal").on('click',function() {
    $('#deleteS').modal('show');
    var id=$(this).attr('id');
    $('#deleteS form').attr('action','/times/' + id);
});




$("#add").on('click',function(){
    $("#editS").modal('show');
    var opp=$("#table").attr('data-id');
   var el= "<input  class=\"hidden \" value=\" "+opp+" \" name=\"opp_id\" />";
    $("#operation").text('Ajouter une tache :');
    $(".method").after(el);
    $(".method").remove();
    $(".add ").html('  <span class=\"glyphicon glyphicon-check\"></span> ajouter');
    $('#editS form').attr('action','/times' );
});


$(".edit-modal").on('click',function() {
    $('#editS').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $('#editS form').attr('action','/times/' + id);
    $('#editS #description').val(el[3].innerText);
    $('#editS #vh').val(el[2].innerText);
    $('#editS #operator_id').find("option").each(function(){
        if($(this).text() === el[1].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });
});
