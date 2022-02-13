// Add all JS development here
jQuery(function ($) {
    $(document).ready(function () {

        //Navbar Scrollspy 
        // $(window).scroll(function () {
        //     var scroll = $(window).scrollTop();
        //     if (scroll > 80) {
        //         $(".inner").addClass("affix");
        //     } else {
        //         $(".inner").removeClass("affix");
        //     }
        // });

        //Number Counter
		var a = 0;
		$(window).scroll(function () {
			var oTop = $(".counters-box").offset().top - window.innerHeight;
			if (a == 0 && $(window).scrollTop() > oTop) {
				$(".number").each(function () {
					var $this = $(this),
						countTo = $this.attr("data-number");
					$({
						countNum: $this.text()
					}).animate({
							countNum: countTo
						},

						{
							duration: 8000,
							easing: "swing",
							step: function () {
								//$this.text(Math.ceil(this.countNum));
								$this.text(
									Math.ceil(this.countNum).toLocaleString("en")
								);
							},
							complete: function () {
								$this.text(
									Math.ceil(this.countNum).toLocaleString("en")
								);
								//alert('finished');
							}
						}
					);
				});
				a = 1;
			}
		});

        //AOS animation
        AOS.init({
            once: true,
        });

        //Navbar Close after click
        $(document).on('click',function(){ 
        $('.navbar .collapse').collapse('hide');})
        
        //Hero Slider
        $('.hero-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            lazyLoad:true,
            transitionStyle: "fade",
            animateOut: 'animate__fadeOutDown',
            animateIn: 'animate__fadeInRight',
    
            slideTransition: 'ease-in-out',
            autoplay: false,
            autoplayTimeout: 7000,
            autoplaySpeed: 1000,
            smartSpeed:450,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //Client Slider
        $('.video-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            lazyLoad: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //Testimonials slider
        $('.testimonial-slider').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            lazyLoad:true,
            transitionStyle: "fade",
            animateOut: 'animate__slideOutLeft',
            animateIn: 'animate__slideInRight',
    
            slideTransition: 'ease-in-out',
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            smartSpeed:450,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })

        //Services mobile Slider
        $('.services-slider').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dotsEach: 4,
            lazyLoad: true,
			autoplay: true,
			autoplayTimeout: 6000,
			autoplaySpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        });

        //Event Slider 
        $('.event-slider').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            navText: [
				"<div class='prev'><i class='ri-arrow-left-circle-line'></i></div>",
				"<div class='next'><i class='ri-arrow-right-circle-line'></i></div>",
			],
            dots:false,
            lazyLoad: true,
			autoplay: true,
			autoplayTimeout: 8000,
			autoplaySpeed: 1000,
            responsive:{
                0:{
                    items:1,
                    dots:true,
                    nav:false
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })

    });
});

