<!DOCTYPE html>
<html lang="en">
<?php require ('modulos/head.php');?>
<body>
	<div class="wrapper">
	<?php include ('modulos/nav.php');?>
	<?php include ('modulos/slider.php');?>
		<main class="content">
		<h2>Sala 1</h2>
		<?php include ('modulos/movie.php');?>

		<h2>Sala 2</h2>
		<?php include ('modulos/movie.php');?>

		<h2>Sala 3</h2>
		<?php include ('modulos/movie.php');?>

		<h2>Sala 4</h2>
		<?php include ('modulos/movie.php');?>

		<h2>Sala 5</h2>
		<?php include ('modulos/movie.php');?>
		</main>
	<?php require ('modulos/footer.php');?>
		<!-- Swiper JS -->
		<script src="js/swiper.min.js"></script>

		<!-- Initialize Swiper -->
		<script>
			$(document).ready(function(){


				var swiper = new Swiper('.homeslider > .swiper-container', {
					pagination: '.swiper-pagination',
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					effect:'fade',
					breakpoints: {
						320: {
							height:200
						},

						480: {
							height:300
						},

						768: {
							height:400
						},
						1024: {
							height:500
						}
					}
				});

				var recentswiper = new Swiper('.recentslider > .swiper-container', {
					nextButton: '.recent-next',
					prevButton: '.recent-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});

				var mostswiper = new Swiper('.mostslider > .swiper-container', {
					nextButton: '.most-next',
					prevButton: '.most-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});

				var topswiper = new Swiper('.topslider > .swiper-container', {
					nextButton: '.top-next',
					prevButton: '.top-prev',
					slidesPerView: 8,
					paginationClickable: true,
					preventClicks:false,
					preventClicksPropagation:false,
					spaceBetween: 10,
					breakpoints: {
						320: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						480: {
							slidesPerView: 3,
							spaceBetween: 5
						},

						768: {
							slidesPerView: 5,
							spaceBetween: 5
						},
						1024: {
							slidesPerView: 6,
							spaceBetween: 10
						}
					}
				});

			});

			
		</script>


	</div>
</body>
</html>