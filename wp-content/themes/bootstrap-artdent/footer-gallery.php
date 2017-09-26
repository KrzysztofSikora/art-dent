<?php
/**
 * The template for displaying the footer
 *
 */
?>
</div><!-- #wrapper -->

<footer class="footer-gallery">
	<div class="container text-center">
		<a href="http://www.webparadise.pl" title="Projekt i wykonanie agencja webParadise" id="webparadise" style="outline: none;"><img src="<?php echo get_stylesheet_directory_uri() .'/img/webParadise.png'?>" alt="webParadise agencja interaktywna w krakowie "></a>
	</div>
</footer>

<!-- Scripts -->
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/jquery/jquery.min.js' ?> "></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/popper/popper.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js' ?> "></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/vendor/lumos/js/lumos-min.js' ?> "></script>




<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/vendor/cycle/jquery.cycle.all.js' ?>"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDljQbtstZ5JGUKuPDbVDK3CUxDdMghpmo&callback=initMap">
</script>

<script>
	$('.headerslider').cycle({
		speed: 2000,
		fx: 'fade',
	});


	function initMap() {
		var uluru = {lat: -25.363, lng: 131.044};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}





	if ($(window).width() < 992)
		if ($(".navbar").hasClass("absolute-top"))
			$(".navbar").removeClass("absolute-top").addClass("fixed-top");

	$(window).resize(function () {
		if ($(window).width() < 992) {

			console.log("resize width");

			if ($(".navbar").hasClass("absolute-top"))
				$(".navbar").removeClass("absolute-top").addClass("fixed-top").each(function () {
					console.log("add class fixed-top");
					location.reload();
				})
		}
		if ($(window).width() > 992) {

			if ($(".navbar").hasClass("fixed-top"))
				$(".navbar").removeClass("fixed-top").addClass("absolute-top").each(function () {
					console.log("add class absolute-top");
					location.reload();
				});
		}

	});


</script>



	<?php wp_footer(); ?>
</body>

</html>