$('form').submit(function() {
   Swal.fire({
      title: "Memuat",
      text: "Mengirim data formulir",
      showLoaderOnConfirm: true,
      showConfirmButton: false,
      showCloseButton: false,
      showCancelButton: false,
      allowOutsideClick: false,
      allowEscapeKey: false,
      onOpen: () => {
         swal.showLoading();
      },
   });
   return true;
});

$(".slick-info").slick({
   dots: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   infinite: false
});

$(".slick-event").slick({
   dots: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   infinite: false,
});