$(function() {

	// $('.owl-1').owlCarousel({

 //    loop:true,
 //    margin:0,
 //    nav:true,
 //    items: 1,
 //    smartSpeed: 1000,
 //    autoplay: true,
 //    autoplayHoverPause: true,
 //    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	// })

    if ( $('#owl-demo').length > 0 ) {
            $('#owl-demo').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            transitionStyle : "fade",
          });
      }
})