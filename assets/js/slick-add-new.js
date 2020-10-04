$(document).ready(function () {
	// kelas kategori
	$(".slick_kelas-kategori").slick({
		dots: false,
		infinite: false,
		speed: 500,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				},
			},
		],
	});

	$(".arrow-kelas-kategori .slick-prev").click(function () {
		$(".slick_kelas-kategori").slick("slickPrev");
	});

	$(".arrow-kelas-kategori .slick-next").click(function () {
		$(".slick_kelas-kategori").slick("slickNext");
	});
	// end

	// kelas kategori prakerja
	$(".slick_kelas-kategori2").slick({
		dots: false,
		infinite: false,
		speed: 500,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				},
			},
		],
	});

	$(".arrow-kelas-kategori .slick-prev").click(function () {
		$(".slick_kelas-kategori2").slick("slickPrev");
	});

	$(".arrow-kelas-kategori .slick-next").click(function () {
		$(".slick_kelas-kategori2").slick("slickNext");
	});
	// end

	// kelas favorit
	$(".slick_kelas-favorit").slick({
		dots: false,
		infinite: false,
		speed: 500,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				},
			},
		],
	});

	$(".arrow-kelas-favorit .slick-prev").click(function () {
		$(".slick_kelas-favorit").slick("slickPrev");
	});

	$(".arrow-kelas-favorit .slick-next").click(function () {
		$(".slick_kelas-favorit").slick("slickNext");
	});
	// end

	// kelas favorit
	$(".slick_kelas-related").slick({
		dots: false,
		infinite: false,
		speed: 500,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				},
			},
		],
	});

	$(".arrow-kelas-favorit .slick-prev").click(function () {
		$(".slick_kelas-related").slick("slickPrev");
	});

	$(".arrow-kelas-favorit .slick-next").click(function () {
		$(".slick_kelas-related").slick("slickNext");
	});
	// end

	// kelas terbaik
	$(".slick_kelas-terbaik").slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	$(".arrow-kelas-terbaik .slick-prev").click(function () {
		$(".slick_kelas-terbaik").slick("slickPrev");
	});

	$(".arrow-kelas-terbaik .slick-next").click(function () {
		$(".slick_kelas-terbaik").slick("slickNext");
	});
	// end

	// testimonial
	$(".slick_testimonial").slick({
		dots: true,
		infinite: false,
		speed: 500,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	$(".arrow-testimonial .slick-prev").click(function () {
		$(".slick_testimonial").slick("slickPrev");
	});

	$(".arrow-testimonial .slick-next").click(function () {
		$(".slick_testimonial").slick("slickNext");
	});
	// end

	// testimonial
	$(".slick_testimonial-cerita").slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	$(".arrow-testimonial-cerita .slick-prev").click(function () {
		$(".slick_testimonial-cerita").slick("slickPrev");
	});

	$(".arrow-testimonial-cerita .slick-next").click(function () {
		$(".slick_testimonial-cerita").slick("slickNext");
	});
	// end

	// testimonial kelas
	$(".slick_testimonial-kelas").slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	$(".arrow-testimonial-kelas .slick-prev").click(function () {
		$(".slick_testimonial-kelas").slick("slickPrev");
	});

	$(".arrow-testimonial-kelas .slick-next").click(function () {
		$(".slick_testimonial-kelas").slick("slickNext");
	});

	// mitra
	$(".slick_mitra").slick({
		dots: false,
		infinite: true,
		speed: 500,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					dots: true,
					autoplay: true,
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					dots: true,
					autoplay: true,
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					dots: true,
					autoplay: true,
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
		],
	});

	$(".arrow-mitra .slick-prev").click(function () {
		$(".slick_mitra").slick("slickPrev");
	});

	$(".arrow-mitra .slick-next").click(function () {
		$(".slick_mitra").slick("slickNext");
	});
	// end

	// kelas view
	$(".slick_kelas-page-view-by-kategori").slick({
		dots: false,
		infinite: false,
		speed: 500,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: false,
		loop: true,
		autoplay: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					dots: true,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				},
			},
		],
	});

	$(".arrow-kelas-page-view-by-kategori .slick-prev").click(function () {
		$(".slick_kelas-page-view-by-kategori").slick("slickPrev");
	});

	$(".arrow-kelas-page-view-by-kategori .slick-next").click(function () {
		$(".slick_kelas-page-view-by-kategori").slick("slickNext");
	});
	// end
});
