(function ($) {

    $.fn.ratingWidget = function (method) {
        if (this.length > 1) {
            this.each(function () {
                $(this).ratingWidget(arguments);
            });
        } else {
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else if (typeof method === 'object' || !method) {
                return methods.init.apply(this, arguments);
            } else {
                $.error('Method ' + method + ' does not exist on jQuery.ratingWidget');
            }
        }
    };

    let methods = {};

    methods.init = function () {
        if (!this.hasClass('initialized')) {
            fill.apply(this);
            paint.apply(this);
            this.addClass('initialized');
        }
    };

    /**
     * Sets value and repaint widget
     * @param val
     */
    methods.set = function (val) {
        this.data('val', val);
        paint.apply(this);
    };

    function roundValue(value) {
        return Math.round(value * 2) / 2;
    }

    function paint() {
        let val = roundValue(this.data('val'));
        this.children('i').each(function (i, el) {
            if (i + 1 <= val) {
                el.className = 'filled-star';
            } else if (val - i === 0.5) {
                el.className = 'half-filled-star';
            } else {
                el.className = 'empty-star';
            }
        });
    }

    /**
     * Fills widget tag with i elements
     */
    function fill() {
        let html = '';
        let starsCount = this.data('max-rating');
        for (let i = 0; i < starsCount; i++) {
            html += '<i></i>';
        }
        this.append(html);
    }

    $(function () {
        $('.rating-widget').ratingWidget();
    });

})(jQuery);
