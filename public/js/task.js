$(document).ready(function () {
    $('#btn-search').on('click',  function () {
        var tname =  $('input[name=title]').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/task_search',
                data: {
                        'tname': tname,
                    },
                 success: function (data) {
                    //  console.log(data);
                    $('.result').empty();
                 data.forEach(element => {
                    $('.result').append('<div class="blog-card col-md-6">'+
                    '<div class="photo photo1"></div>'+
                    '<ul class="details">'+
                        
                        '<li class="date">Expiry Date:'+element.date+'</li>'+
                        
                    '</ul>'+
                    '<div class="description">'+
                    '<h4>'+element.tname+'</h4>'+
                    '<p>'+element.tdescription+'</p>'+
                    '<a href="/more/'+element.t_id+'">Read More</a>'+
                    '</div>'+
                '</div>'
                );
                 });
                    }
                }); 
                });
            });                
