(function($){
    var timeout         = 500;
    var closetimer      = 0;
    var ddmenuitem      = 0;
    function menu_open(){
        menu_canceltimer();
        menu_close();
        ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}
    function menu_close(){
        if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
    function menu_timer(){
        closetimer = window.setTimeout(menu_close, timeout);}
    function menu_canceltimer(){
        if(closetimer){
        window.clearTimeout(closetimer);
        closetimer = null;}}
    $(document).ready(function(){
        var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
        if(!mobile){
            $('.nav-menu > li').bind('mouseover', menu_open);
            $('.nav-menu > li').bind('mouseout',  menu_timer);
            $('.nav-menu > li > ul').css('visibility', 'hidden');
        }
    });
    document.onclick = menu_close;
})(jQuery);
