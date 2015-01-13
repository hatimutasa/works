$(function() {
    resize_end();
    function resize_end() {
        layout = $('.section > .content').size() ? $('.section > .content') : $('.column');
        if($('.shadow').height() < $(window).height()) {
            layout.css('min-height', $(window).height() - $('.header').height() - $('.footer-wrap').height() - 51 + 'px');
        }
        else {
            layout.css('min-height', '0');
        }
    }
    $(window).resize(function() {
        if(this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function() {
            resize_end();
        }, 100);
    });
});