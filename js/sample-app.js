$('.trigger').click(function() {
    $('.content').hide();
    $('.' + $(this).data('rel')).show();
    console.log('hello');
});