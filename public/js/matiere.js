$(document).ready(function() {
    $('#table').DataTable();
} );


$(".delete-modal").on('click',function() {
    $('#deleteS').modal('show');
    var id=$(this).attr('id');
    $('#deleteS form').attr('action','/matieres/' + id);
});


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
    $('#editS form').attr('action','/matieres/' + id);
    $('#editS #article_id').find("option").each(function(){
        if($(this).text() === el[3].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });
     $('#editS #poste_id').find("option").each(function(){
        if($(this).text() === el[2].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });
    
    $('#editS #opp_id').find("option").each(function(){
        if($(this).text() === el[1].innerText){
            $(this).attr('selected','selected');
        }else{
            $(this).removeAttr('selected');
        }
    });

    $('#editS #qte').val(el[0].innerText);
});


$(function () {
    $('#modal').modal(toggle)
});