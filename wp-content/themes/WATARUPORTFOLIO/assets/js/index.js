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

	function setImages() {
		$.ajax({
			type: 'get',
			url: 'wp-content/themes/WATARUPORTFOLIO/assets/img/svg/sprite.svg'
		}).done(function(data) {
			var svg = $(data).find('svg');
			$('body').prepend(svg);
		});
	}


	function vivusAnimation () {
		new Vivus('js-svg-animation', {
			file: 'wp-content/themes/WATARUPORTFOLIO/assets/img/wataru_portfolio.svg',
			type: 'async',
			duration: 300,
			forceRender: false,
			animTimingFunction: Vivus.EASE,
			start: 'autostart'
		},
		function(obj){
			obj.el.classList.add('is-draw');
		});
	}

	function setEvent() {
		$(window).on('load', function(){
			vivusAnimation();
			fadeAnimation();
		});
		$(window).scroll(function (){
			fadeAnimation();
		});
		controlNav();
		setImages();
	}

	function init() {
		setEvent();
	}
	init();
});
