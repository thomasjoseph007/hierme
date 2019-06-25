$(document).ready(function () {

    $('#loc').keyup(function () {
        var query = $(this).val();
        if (query != '') {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/search",
                type: "POST",
                data: {
                    query: query
                },
                success: function (data) {
                    console.log(data);
                    $('#List').fadeIn();
                    $('#List').html(data);

                }
            });
        } else {
            $('#List').fadeOut();
        }
    });

    $(document).on('click', '.load', function () {
        $('#loc').val($(this).text());
        $('#List').fadeOut();
    });

});