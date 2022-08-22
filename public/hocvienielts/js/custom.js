
$( document ).ready(function() {
    $('.popup-video').magnificPopup({
        type: 'iframe'
      });
    $('.course-item').click(function()
    {
        $('.course-item').removeClass('active');
        $(this).addClass('active');
        var image = $(this).data('image');
        var url = $(this).data('url');
        console.log(url);
        $('a#course-url').prop("href", url);
        $('#bg-course').css('background-image','url('+image+')');
    });
});