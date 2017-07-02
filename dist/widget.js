jQuery(function($){
    $.fn.setRating = function(rating){
        var items = $(this).find('.rate-item');
        for ( var i = 0; i < rating; i++ ) {
            $(items[i]).removeClass($(this).data('empty-class'));
            $(items[i]).addClass($(this).data('filled-class'));
        }
        for ( i = rating; i < items.length; i++ ) {
            $(items[i]).removeClass($(this).data('filled-class'));
            $(items[i]).addClass($(this).data('empty-class'));
        }
    };
    $('.rating-widget .rate-item').mousemove(function(){
        var widget = $(this).closest('.rating-widget');
        if ( ! widget.hasClass('read-only') ) {
            widget.setRating($(this).index());
        }
    });
    $('.rating-widget').mouseleave(function(){
        $(this).setRating($(this).closest('.rating-widget').find('input').val());
    });
    $('.rating-widget .rate-item').click(function(){
        var widget = $(this).closest('.rating-widget');
        if ( ! widget.hasClass('read-only') ) {
            widget.find('input').val($(this).index());
        }
    });
});
