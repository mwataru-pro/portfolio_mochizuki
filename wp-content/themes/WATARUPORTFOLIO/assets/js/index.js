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
});
