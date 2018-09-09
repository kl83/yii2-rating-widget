(function ($) {

    $(document).on('mousemove', '.rating-input i', function () {
        $(this).closest('.rating-widget')
            .ratingWidget('set', $(this).index() + 1);
    });

    $(document).on('mouseleave', '.rating-input .rating-widget', function () {
        let $this = $(this);
        let val = $this.closest('.rating-input').find('input').val();
        $this.ratingWidget('set', val);
    });

    $(document).on('click', '.rating-input i', function () {
        let $this = $(this);
        $this.closest('.rating-input').find('input').val($this.index() + 1);
    });

})(jQuery);
