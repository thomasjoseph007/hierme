$(document).ready(function() {
    $('#com1').change(function() {
   var compare = $(this).val();
   //alert(compare); 
   $('.compare').empty();
        if(compare) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url:'/compare1/'+compare,
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
                '<div class="col-lg-9">'+
                    '<span class="pf-title">About '+data[0].name+'</span>'+
                    '<div class="pf-field">'+
                    '<p>' +data[0].description+'</p>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-5">'+
                    '<span class="pf-title">Skills:</span>'+
                    '<div class="pf-field">'+
                        '<p>'+data[0].skills+'<p/>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-5">'+
                    '<span class="pf-title">Title:</span>'+
                    '<div class="pf-field">'+
                        '<p>'+data[0].sk[0]+'<p/>'+
                    '</div>'+
                '</div>'+
                '<div class="col-lg-5">'+
                    '<span class="pf-title">Major:</span>'+
                    '<div class="pf-field">'+
                        '<p><p/>'+
                    '</div>'+
                '</div>'+
                
                '<fieldset class="col-md-9" id="languages">'+
                '<h5>'+data[0].name+'`s works</h5>'+
                    '<div class="row" id="languageSet">'+
                        '<div class="col-md-5">'+
                            '<span class="pf-title">Works</span>'+
                            '<div class="pf-field">'+
                                '<img src="uploads/'+data[0].files+'" />'+
                            '</div>'+
                        '</div>'+

                        '<div class="col-md-6">'+
                            '<span class="pf-title">Description</span>'+
                            '<div class="pf-field">'+
                                '<p >'+data[0].comments+'</p>'+                              
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</fieldset>'+
                '<div class="col-lg-5">'+
                '<span class="pf-title">Bid Amount:</span>'+
                '<div class="pf-field">'+
                    '<p>'+data[0].rate+'<p/>'+
                '</div>'+
            '</div>'+
            '<div class="col-lg-8">'+
            '<span class="pf-title">Coments:</span>'+
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
                    '<input type="text" id="rate" name="rate" value="'+data[0].fid+'"/>'+
                    '<input type="text" id="rate" name="tid" value="'+data[0].tid+'"/>'+
                '</div>' +
        
                '<button type="submit" class="btn btn-primary btn-md">Rate It Now!</button>' +
            '</form>'+
        '</div>';
               
                
                
                        $('.compare').append(html);
                       
                        var html=0;
                    }
                });
        }else{
            $('select[name="pgm"]').empty();
        }
    });
});


