$(document).ready(function () {
	// kelas favorit
	$(".slick_kelas-favorit").slick({
		dots: false,
		infinite: false,
		speed: 500,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false
	});

	$(".arrow-kelas-favorit .slick-prev").click(function () {
		$(".slick_kelas-favorit").slick("slickPrev");
	});

	$(".arrow-kelas-favorit .slick-next").click(function () {
		$(".slick_kelas-favorit").slick("slickNext");
	});
	// end
});
