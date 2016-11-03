jQuery(document).ready(function($){
   $('.same-page-link').click(function(evt){
        var _goto = $(this).attr('href');
      
        if(typeof _goto === 'undefined' )
            return;
        
        _goto = $(_goto);
        if(_goto.length< 1)
            return;
        
        $('html, body').animate({
            scrollTop: $(_goto).offset().top
        }, 1200);
        
        return false;
   });
});