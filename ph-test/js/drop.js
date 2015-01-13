$(function() {
    var drop = $('#megadrop'),
    mask = $('#mask');

    $('.nav .dropdown').mouseenter(function() {
        var $this = $(this);
        setTimeout(function() {
            drop.css({
                top: $this.offset().top + "px",
                marginLeft : -(drop.width() / 2) + "px"
            }).show();
            mask.css({
                height : $(document).height() + "px",
                width  : $(window).width() + "px"
            }).show();
        }, 500);
    });

    drop.mouseleave(function() {
        setTimeout(function() {
            drop.hide();
            mask.hide();
        }, 500);
    });

    $('#close').click(function() {
        drop.hide();
        mask.hide();
    });
});
