/**
 * Created by inconnu on 17/08/2017.
 */




$("#add").on('click',function(){

    $("#editS").modal('show');
    var opp=$(".table").attr('data-id');
   var el= "<input type=\"hidden\" value=\" "+opp+" \" name=\"opp_id\" />";
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
    $('#editS #description').val(el[2].innerText);
    $('#editS #vh').val(el[1].innerText);
    $('#editS #operator_id').find("option").each(function(){
        if($(this).text() === el[0].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });

});
