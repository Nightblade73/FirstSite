(function($) {
 
  $('.gif-with-play').on('click', function() {
 
    var $this   = $(this),        
        $img    = $this.children('img'),
        $imgSrc = $img.attr('src'),
        $imgSrcgif = $img.attr('data-srcgif'),
        $imgExt = $imgSrcgif.split('.');
 
    if($imgExt[1] === 'gif') {
//      $this.addClass('loading-hide');
 
      $img.attr('src', $img.data('srcgif')).attr('data-srcgif', $imgSrc);
 
//      $($img).load(function(){
//        $this.removeClass('loading-hide');
//      });   
    } else {
      $img.attr('src', $imgSrcgif).attr('data-srcgif', $img.data('srcgif'));
    }
 
    $this.toggleClass('play');
 
  });
 
})(jQuery);


