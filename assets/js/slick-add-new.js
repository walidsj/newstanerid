$(document).ready(function () {
	$(".slick_kelas-favorit").slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		loop: true,
		autoplay: true
	});

	$(".arrow-kelas-favorit .slick-prev").click(function () {
		$(".slick_kelas-favorit").slick("slickPrev");
	});

	$(".arrow-kelas-favorit .slick-next").click(function () {
		$(".slick_kelas-favorit").slick("slickNext");
	});
	
	$(".slick_booklet").slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		loop: true,
		autoplay: true
	});

	$(".arrow-booklet .slick-prev").click(function () {
		$(".slick_booklet").slick("slickPrev");
	});

	$(".arrow-booklet .slick-next").click(function () {
		$(".slick_booklet").slick("slickNext");
	});
});

