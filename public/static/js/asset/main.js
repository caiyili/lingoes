$(function () {
    /* ---------- Submenu  ---------- */
    $('.dropmenu').click(function(e){
        e.preventDefault();
        $(this).parent().find('ul').slideToggle();
    });

    /** ----- sidebar-left */
    /**
    $('#sidebar-left ul li ul li').each(function(item) {
        var me = $(this);
        if (me.hasClass('active')) {
            me.parent().slideDown();
        }
    });
    */

    /** -- close button -- */
    $('.btn-close').click(function(e){
        e.preventDefault();
        $(this).parent().parent().parent().fadeOut();
    });

    /** -- 最小化按钮 -- */
    $('.btn-minimize').click(function(e){
        e.preventDefault();
        var $target = $(this).parent().parent().next('.box-content');
        if ($target.is(':visible')) {
            $('i',$(this)).removeClass('chevron-up').addClass('chevron-down');
        } else {
            $('i',$(this)).removeClass('chevron-down').addClass('chevron-up');
        }
        $target.slideToggle();
    });
});
