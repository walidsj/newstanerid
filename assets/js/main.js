$(document).ready(function () {
	$(window).scroll(function () {
		if ($(document).scrollTop() > 100) {
			$(".home-navbar").addClass("on-scroll");
		} else {
			$(".home-navbar").removeClass("on-scroll");
		}
	});
});

$(document).ready(function () {
	$('.dropdown-m').each(function () {
		var $dropdown = $(this);
		$(".dropdown-linkx", $dropdown).click(function (e) {
			e.preventDefault();
			$div = $(".dropdown-container", $dropdown);
			$div.show();
			$(".dropdown-container").not($div).hide();
			return false;
		});

		$('.inputan').click(function () {
			e.preventDefault();
			$div_focus = $(".dropdown-container", $dropdown);
			$div_focus.fadeIn(300);
			$(".dropdown-container").not($div_focus).fadeOut(300);
			return false;
		});
	});

	$('html').click(function () {
		$(".dropdown-container").hide();
	});
});

$(function () {
	$('#TypeClass').change(function () {
		$('.choose-class').hide();
		$('#' + $(this).val()).show();
	});
});

// Add Remove Div (contohnya di halaman buat kelas di section form kelebihan)
$(document).ready(function () {
	// Add new element
	$(".add-advantages").click(function () {
		// Finding total number of elements added
		var total_element = $(".advantages-list").length;
		// last <div> with element class id
		var lastid = $(".advantages-list:last").attr("id");
		var split_id = lastid.split("_");
		var nextindex = Number(split_id[1]) + 1;
		var max = 3;
		// Check total number elements
		if (total_element < max) {
			// Adding new div container after last occurance of element class
			$(".advantages-list:last").after("<div id='div_" + nextindex + "' class='advantages-list mt-3'></div>");
			// Adding element
			$("#div_" + nextindex).append("<div id='txt_" + nextindex + "' class='d-flex pl-3'><div class='mt-2 pt-1 mr-3'><h6 class='text-primary font-600 mb-0'>" + (Number(split_id[1]) + 1) + ".</h6></div><div class='w-100'><div class='form-group'><select name='' class='form-control' id=''><option value=''>Kelas yang Fleksibel</option><option value=''>Guru Berpengalaman</option></select></div><div class='form-group mb-0'><textarea name='' id='' cols='30' class='form-control' rows='5'></textarea></div><p id='remove_" + nextindex + "' class='remove-advantages text-right text-capitalize mb-0'>hapus</p></div></div>");
		}
	});

	// Remove element
	$('.container-wrap').on('click', '.remove-advantages', function () {
		var id = this.id;
		var split_id = id.split("_");
		var deleteindex = split_id[1];
		// Remove <div> with id
		$("#div_" + deleteindex).remove();
	});
});
// END

// input file tampil teks (salah satunya di form input tanda tangan di pendaftaran guru)
function uploadFile(target) {
	document.getElementById("file-name").innerHTML = target.files[0].name;
}

// input file foto profil (salah satunya di halaman lengkapi pendaftaran guru)
function BrowsClickPhotoProfile(input_image) {
	var fileinput = document.getElementById(input_image);
	fileinput.click();
}

/// input banner
function defaultBanner() {
	document.getElementById('uploadBannerSection').style.display = 'none';
}

function uploadBanner() {
	document.getElementById('uploadBannerSection').style.display = 'block';
}
/// end

/// textarea
function textAreaAdjust(o) {
	o.style.height = "1px";
	o.style.height = (1 + o.scrollHeight) + "px";
}

$(document).ready(function () {
	var btn = $(".podcast-play .play");
	btn.click(function () {
		btn.toggleClass("paused");
		return false;
	});
});

// $(document).ready(function () {
// 	$('#panahSwipe, [data-item-ojb]').on('click', function (e) {
// 		e.preventDefault();
// 		if (this.id == 'panahSwipe') {
// 			$('html, body').animate({
// 				scrollTop: ($('.content-kelas').offset().top - (($(window).width() < 768) ? 45 : 50))
// 			}, 1250, 'swing');
// 		} else {
// 			let getObject = '.' + $(this).attr('data-item-ojb');
// 			$('html, body').animate({
// 				scrollTop: ($(getObject).offset().top - (($(window).width() < 768) ? 45 : 50))
// 			}, 1250, 'swing');
// 		}
// 	});
// });
