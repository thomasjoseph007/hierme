$(document).ready(function() {
    $('#com2').change(function() {
   var compare = $(this).val();
   //alert(compare); 
   $('.compare1').empty();
        if(compare) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:'/compare2/'+compare,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    console.log(data);
                      
                    var html=  
                    '<div class="col-lg-5">'+
                    '<span class="pf-title">.</span>'+
                    '<div class="pf-field">'+
                        '<img src="uploads/'+data[0].image+'" readonly/>'+
                    '</div>'+
                '</div>'+
        '<div class="col-lg-5">'+
                    
                    '<div class="pf-field">'+
                        '<p>'+data[0].name+'<p/>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-5">'+
                '<h6>About '+data[0].name+'</h6>'+
                '</div>'+
                '<div class="col-lg-9">'+                 
                    '<div class="pf-field">'+
                    '<p>' +data[0].description+'</p>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-5">'+
                    '<h6>Skills:</h6>'+
                    '<div class="pf-field">'+
                        '<p>'+data[0].skills+'<p/>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-5">'+
                '<h6>Education Details</h6>'+
                 '</div>'+
                
                '<div class="col-lg-5">'+
                '<h6>'+data[0].name+'`s works</h6>'+
                 '</div>'+
                '<div class="col-lg-9">'+
                    '<div class="pf-field">'+
                        '<p><img src="uploads/'+data[0].files+'" /><br>'+data[0].comments+'<p/>'+
                    '</div>'+
                '</div>'+            
               '<div class="col-lg-5">'+
                '<h6>Bid Amount:</h6>'+
                '<div class="pf-field">'+
                    '<p>'+data[0].rate+'<p/>'+
                '</div>'+
            '</div>'+
            '<div class="col-lg-8">'+
            '<h6>Comments:</h6>'+
            '<div class="pf-field">'+
                '<p>'+data[0].bcomments+'<p/>'+
            '</div>'+
        '</div>'+

        '<div class="col-lg-8">'+
        '<form action="/rate" method="post" >' +
            '<input hidden name="_token" value='+csrf+'>'+
                '<div class="stars">' +
               
                    '<input class="star star-5" id="star-5" type="radio" name="star" value="5" />' +
                    '<label class="star star-5" for="star-5"></label>' +
                    '<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>' +
                    '<label class="star star-4" for="star-4"></label>' +
                    '<input class="star star-3" id="star-3" type="radio" name="star" value="3" />' +
                    '<label class="star star-3" for="star-3"></label>' +
                    '<input class="star star-2" id="star-2" type="radio" name="star" value="2"/>' +
                    '<label class="star star-2" for="star-2"></label>' +
                    '<input class="star star-1" id="star-1" type="radio" name="star" value="1"/>' +
                    '<label class="star star-1" for="star-1"></label>' +
                    '<input type="text"  id="rate" hidden name="rate" value="'+data[0].fid+'"/>'+
                    '<input type="text" id="rate"  hidden name="tid" value="'+data[0].tid+'"/>'+
                '</div>' +
                 '<br>'  +    
                '<button type="submit" class="btn btn-primary btn-md">Rate It Now!</button>' +
            '</form>'+
        '</div>';
               
                        $('.compare1').append(html);
                       
                        var html=0;
                    }
                });
        }else{
            $('select[name="pgm"]').empty();
        }
    });
});


