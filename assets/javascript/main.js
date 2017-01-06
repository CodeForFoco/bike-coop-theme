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

   $('.awesome-events,.awesome-programs').each(function(){
      var _this = $(this);

      _this.slick({
          mobileFirst:  true,
          centerMode:   true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows:       false,
          responsive:   [
              {
                  breakpoint: 640,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                  }
              },
              {
                  breakpoint: 980,
                  settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      centerMode: false
                  }
              },
          ]
      });
   });
});