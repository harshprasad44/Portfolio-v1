$(window).on("load", function() {

	$(".loader .inner").fadeOut(2000, function() {
		$(".loader").fadeOut(550);
    });
    

    $(".items").isotope({
		filter: '*',
		animationOptions: {
			duration: 1500,
			easing: 'linear',
			queue: false
		}
    });

})



$(document).ready(function(){
    $('#slides').superslides({
        animation: 'fade',
        play: 5000,
        pagination: true
    });

    var typed = new Typed(".typed", {
        strings: ['Web Developer.', 'Student.'],
        typeSpeed: 80,
        loop: true,
        startDelay: 1000,
        showCursor: false
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        items: 4,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            768:{
                items:3
            },
            938:{
                items:4
            }
        }
    });



    var skillsTopOffset = $('.skillsSection').offset().top;
    var statsTopOffset = $('.statsSection').offset().top;
    var countUpFinished = false;
    $(window).scroll(function(){
        if(window.pageYOffset > skillsTopOffset - $(window).height() + 210){
            $('.chart').easyPieChart({
                easing: 'easeInOut',
                barColor: '#fff',
                trackColor: false,
                scaleColor: false,
                lineWidth: 4,
                size: 152,
                onStep: function(from, to, percent){
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        }


        if(!countUpFinished && window.pageYOffset > statsTopOffset - $(window).height() + 230){
            $(".counter").each(function(){
                var element = $(this);
                var endVal = parseInt(element.text());
        
                element.countup(endVal);
            })
            
            countUpFinished = true;
        }


    });


    $("[data-fancybox]").fancybox();


    

    $("#filters a").click(function() {

		$("#filters .current").removeClass("current");
		$(this).addClass("current");

		var selector = $(this).attr("data-filter");

		$(".items").isotope({
			filter: selector,
			animationOptions: {
				duration: 1500,
				easing: 'linear',
				queue: false
			}
		});

		return false;
    });



    $("#navigation li a").click(function(e) {
		e.preventDefault();

		var targetElement = $(this).attr("href");
		var targetPosition = $(targetElement).offset().top;
		$("html, body").animate({ scrollTop: targetPosition - 50 }, 650);

	});

    

    const nav = $("#navigation");
	const navTop = nav.offset().top;

	$(window).on("scroll", stickyNavigation);

	function stickyNavigation() {

		var body = $("body");

		if($(window).scrollTop() >= navTop) {
			body.css("padding-top", nav.outerHeight() + "px");
			body.addClass("fixedNav");
		}
		else {
			body.css("padding-top", 0);
			body.removeClass("fixedNav");
		}


	}


});



//Show JS
//const text = document.querySelector('.show-js');
//const swipe = document.querySelector('.swipe-img');
//
//swipe.addEventListener('click', () => {
//    text.innerHTML = "<p>Swipe them to see.</p>";
//});


// const success = document.querySelector('.successForm');
// const contactForm = document.querySelector('#contactForm');

// contactForm.addEventListener('submit', (e) => {
//     e.preventDefault();
//     success.innerHTML = "Your message sent Succesfully!"
// });