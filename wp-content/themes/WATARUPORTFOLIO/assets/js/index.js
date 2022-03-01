jQuery(function () {
	const $body = $("body");
	const $header = $("#header");
	const $toggleNav = $header.find(".js-nav");
	const $navItem = $toggleNav.find(".l-header__item");
	const $toggleBtn = $header.find(".js-open-button");

	function controlNav() {
		function changeNav() {
		$toggleNav.toggleClass("is-open");
		$toggleBtn.toggleClass("is-open");
		noScroll();
		};

		function closeNav() {
			$toggleNav.removeClass("is-open");
			$toggleBtn.removeClass("is-open");
		}

		function noScroll() {
			$body.toggleClass("no-scroll");
		};

		function setEvent() {
			$toggleBtn.on("click", changeNav);
			$navItem.on("click", function(){
				if ($toggleNav.hasClass("is-open")) {
					closeNav();
				}
			});
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

	function pageTopAnimation() {
		const $topButton = $('#js-page-top')
		const scroll =$(window).scrollTop();
		if (scroll >= 200){
			$topButton.removeClass('is-remove');
			$topButton.addClass('is-append');
		}else{
			if($topButton.hasClass('is-append')){
				$topButton.removeClass('is-append');
				$topButton.addClass('is-remove');
			}
		}
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
			fadeAnimation();
			pageTopAnimation();
		});
		$(window).scroll(function (){
			fadeAnimation();
			pageTopAnimation();
		});
		$('#js-page-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
		controlNav();
		setImages();
		vivusAnimation();
	}

	function init() {
		setEvent();
	}
	init();
});
