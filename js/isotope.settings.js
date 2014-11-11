jQuery(document).ready(function($){

    var $container = $('.review-index').imagesLoaded( function() {
        // init
        $container.isotope({
          // options
          itemSelector: '.review-item',
          layoutMode: 'fitRows'
        });
    });

});
