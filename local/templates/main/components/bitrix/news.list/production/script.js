(function($){

    $(document).ready(function() {

        var bgimg = $('#tabs .bottles .item').eq(0).data('img');

        $('#tabs .buttons .switch').eq(0).addClass('active').children().css('background-image', 'url('+ bgimg +')');

        $('#tabs .text .item').eq(0).addClass('active');
        $('#tabs .bottles .item').eq(0).addClass('active');
    });

    $('#tabs .buttons .switch').click(function(e) {
        e.preventDefault();

        var index = $(this).index(),
            bgimg = $('#tabs .bottles .item').eq(index).data('img');

        $(this).siblings('div.active').removeClass('active').children().removeAttr('style');
        $(this).addClass('active').children().css('background-image', 'url('+ bgimg +')');

        $('#tabs .text .item').removeClass('active');
        $('#tabs .text .item').eq(index).addClass('active');

        $('#tabs .bottles .item').removeClass('active');
        $('#tabs .bottles .item').eq(index).addClass('active');
    });
})(jQuery);