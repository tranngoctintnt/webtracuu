<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Tra Cứu</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link REL="SHORTCUT ICON" href="./images/logott.ico">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<link rel="stylesheet" type="text/css" href="styles/load.css">


</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f0dacfe5b59f94722bab2e8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<body class="preloading">

<?php
	include("./loading.html")
 ;?>

<div class="super_container">
	<!-- Header -->
	<?php include("./header.php"); ?>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
			
			<!-- Start php get dt -->
				<?php
					//1. connect sql
					include("./config/connect.php");
					// 2 Write sql
							$sql = "
							SELECT *
							FROM tbl_tintuc
							WHERE maloaitintuc = '1'
							ORDER by ngayviet DESC LIMIT 5
							";
					// 3. Get data on database
							$content = mysqli_query($con,$sql);
					// 4. Print results
							
				?>

					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(https://study.soict.ai/asset-v1:SoICT+IT3020+2020-2+type@asset+block@banner-40.jpg)"></div>
						<!-- <div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title">
											<a style="color: #001d66;" href="./the_thao_chi_tiet.php?id=<?php echo $row["id_tintuc"];?>"><?php echo $row["tieude"]  ;?></a>
									</div>
										<div class="home_slider_subtitle"><?php echo $row["mota"]  ;?></div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(https://lh3.googleusercontent.com/proxy/Wqh2fwl8WjBcq4UvNiCj4_2vmuec2zccFkTtJzNBzqYUkN6fkdIbce5x2bIM4BYKjemjcEItCGaARl5aobni36fpyWzbTPIq4HmlylD3XjRI6YMYiS36io70OgXxtGjePmQgjBTBe6s)"></div>
					</div>
				<!-- End php get dt -->
			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->
	
	
	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
	</div>
				

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Các bài học mới nhất</h2>
						<div class="section_subtitle"><p>Dưới đây là tất cả các bài học về môn Toán rời rạc luôn được cập nhập mới nhất cho bạn.</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Start php get dtdt -->

				<?php
				
				//1. connect sql
				include("./config/connect.php");
				// 2 Write sql
						$sql = "
						SELECT *
						FROM tbl_tintuc
						ORDER by id_tintuc DESC LIMIT 3
						";
				// 3. Get data on database
						$content = mysqli_query($con,$sql);
				// 4. Print results
						while ($row = mysqli_fetch_array($content)) 
						{
			;?>

			<!-- Latest event  -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image">
							<a href="./tin_tuc_chi_tiet.php?id=<?php echo $row["id_tintuc"];?>"><img src="images/<?php echo $row["anh"] ;?>" width="670px" height="250px"></a>
						</div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<div class="event_title"><a href="./tin_tuc_chi_tiet.php?id=<?php echo $row["id_tintuc"];?>"><?php echo $row["tieude"] ;?></a></div>
								<div class="event_info_container">
									<div class="event_info">
										<span>Admin   |  </span>
										<i class="fa fa-clock-o" aria-hidden="true"></i><span><?php echo $row["ngayviet"] ;?></span></div>
			
									<div class="event_text">
										<p><?php echo html_entity_decode($row["mota"]) ;?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- End php get dt -->
			<?php
				} 
			;?>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="tin_tuc.php">Xem thêm</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include("./footer.html"); ?>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>

<script src="js/load.js"></script>
</body>
</html>