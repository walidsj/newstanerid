$(document).ready(function() {
   $(".spinner").fadeOut(), $("#preloader").delay(350).fadeOut("slow"), $("body").delay(350).css({
      overflow: "visible"
   })
});
      
// form loading
$('form').submit(function () {
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

// load slick uhuy
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

// menu toggle sidebar
$("#ShowMenuMobile").click(function () {
   $("#mySidenav").addClass("show")
});

$("#ShowMenuMobile2").click(function () {
   $("#mySidenav").addClass("show")
});

$("#CloseMenuMobile").click(function () {
   $("#mySidenav").removeClass("show")
});