/**
 * Created by inconnu on 17/08/2017.
 */
$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteP').modal('show');
    var id=$(this).attr('id');
    $('#deleteP form').attr('action','/times/' + id);
});


$("#add").on('click',function(){

    $("#editP").modal('show');
    var opp=$(".table").attr('data-id');
   var el= "<input type=\"hidden\" value=\" "+opp+" \" name=\"opp_id\" />";
    $("#operation").text('Ajouter une tache :');
    $(".method").after(el);
    $(".method").remove();
    $(".add ").html('  <span class=\"glyphicon glyphicon-check\"></span> ajouter');
    $('#editP form').attr('action','/times' );
});


$(".edit-modal").on('click',function() {
    $('#editP').modal('show');
    var el = $(this).parent().prevAll();
    var id=$(this).attr('id');
    $('#editP form').attr('action','/times/' + id);
    $('#editP #description').val(el[2].innerText);
    $('#editP #vh').val(el[1].innerText);
    $('#editP #operator_id').find("option").each(function(){
        if($(this).text() === el[0].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });

});

$(function () {
    $('#modal').modal(toggle)
});