jQuery(function () {
	const $body = $("body");
	const $header = $("#header");
	const $toggleNav = $header.find(".js-nav");
	const $toggleBtn = $header.find(".js-open-button");

	function controlNav() {
		function changeNav() {
		$toggleNav.toggleClass("is-open");
		$toggleBtn.toggleClass("is-open");
		noScroll();
		};

		function noScroll() {
			$body.toggleClass("no-scroll");
		};

		function setEvent() {
			$toggleBtn.on("click", changeNav);
		};

		function init() {
			setEvent();
		};
		init();
	}
	controlNav();

	function fadeAnimation() {
		$('.u-smooth-trigger').each(function() {
			const elementPosition = $(this).offset().top-50;
			const scroll = $(window).scrollTop();
			const windowHeight = $(window).height();
			if (scroll >= elementPosition - windowHeight){
				$(this).addClass('u-smooth');
			}
		});
	}

	$(window).scroll(function (){
		fadeAnimation();
	});

	$(window).on('load', function(){
		fadeAnimation();
	});
});
