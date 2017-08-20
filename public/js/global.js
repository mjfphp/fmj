$(document).ready(function() {
    $('#table').DataTable();
} );


$(function () {
    $('#modal').modal(toggle)
});


var actions=function(i){
    var action=$(".delete-modal").attr('data-info');
    var id=$(".delete-modal").attr('id');
    $(i).attr('action',action  + id);
}
$(".delete-modal").on('click',function() {
    $('#deleteS').modal('show');
    actions('#deleteS form');
});

