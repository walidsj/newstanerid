	<footer class="footer-section">
		<div class="container footer-left-xs">
			<div class="row justify-content-between">
				<div class="col-12">
					<a class="logo" href="#">
						<img src="<?= base_url(); ?>assets/img/logo-1.png" alt="" class="img-fluid">
					</a>

					<p class="mt-2">
						©2020 | All Rights Reserved
					</p>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js?v2"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/jquery/jquery.migrate.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/popper/popper.min.js?v2"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/animsition/js/animsition.min.js?v2"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/slinky/js/slinky.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/plyr/plyr.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/slick-add-new.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/sidebar-mobile.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".spinner").fadeOut(), $("#preloader").delay(350).fadeOut("slow"), $("body").delay(350).css({
				overflow: "visible"
			})
		});
	</script>

	<script type="text/javascript">
		function initPlayer() {
			const player = new Plyr('.js-player');
		}
		initPlayer()
	</script>

	<script type="text/javascript">
		$('body').tooltip({
			selector: '.card-title'
		});

		$(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

	<script>
		window.slinky = $('#menu-mobile').slinky();
		window.slinky = $('#menu-users').slinky();
	</script>
	</body>

	</html>