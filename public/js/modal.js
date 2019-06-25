
 $(document).on('click','.open_modal',function(){
    var url = "";
    var tour_id= $(this).val();
    $.get(url + '/' + tour_id, function (data) {
        //success data
        console.log(data);
        $('#tour_id').val(data.id);
        $('#name').val(data.name);
        $('#details').val(data.details);
        $('#btn-save').val("update");
        $('#myModal').modal('show');
    }) 
});