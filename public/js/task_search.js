$(document).ready(function () {
    $('#btn-search').on('click', '#btn-search', function () {
        e.preventDefault();
            $.ajax({
                type: 'post',
                url: '/task_search',
                data: {
                        'tname': $('input[name=title]').val(),
                    },
                 success: function (data) {
                        $('.block').show();
                        $('.block').append(
                            '<div class="block">' +
                            '<div class="container">' +
                            '<div class="row">' +
                            '<div class="col-lg-12">' +
                            '<div class="job-listings-sec">' +
                            '<div class="job-listing">' +
                            '<div class="job-title-sec">' +
                            '<h3><a href="#" title="">Web Designer / Developer</a></h3>' +
                            '<span>Massimo Artemisis</span>' +
                            '</div>' +
                            '<span class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</span>' +
                            '<span class="fav-job"><i class="la la-heart-o"></i></span>' +
                            '<span class="job-is ft">FULL TIME</span>' +
                            '</div><!-- Job -->' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        )
                    }
                }); 
                });
            });                
