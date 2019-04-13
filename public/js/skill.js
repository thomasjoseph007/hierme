function cat(){
   catID = $('#category').val();
    if(catID) {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '/cat/'+catID,
            type: "GET",
            dataType: "json",
            success:function(data) {
                $('.skill').empty();
                $.each(data, function(key, value) {
                    $('.skill').append('<p class="flchek"><input type="checkbox" name="skills[]" id="'+value.s_id+'" value="'+value.s_id+'"><label for="'+value.s_id+'">'+value.skill+'</label></p>');

                });
            }
        });
    }else{
        $('.skill').empty();
    }

}
