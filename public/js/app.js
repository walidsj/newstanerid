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