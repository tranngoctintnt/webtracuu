<!DOCTYPE html>
<html lang="en">
<head>
<title>Tìm Kiếm</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<LINK REL="SHORTCUT ICON" href="./images/logott.ico">
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
	<?php $nd =$_POST['ndtk'];?> 

	<div class="homett" >
		<div class="breadcrumbs_container">
			<div class="container"  >
				<div class="row">
					<div class="col">
						<div class="breadcrumbs" >
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<li>Tìm kiếm</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- L finding School -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Kết quả tìm kiếm cho: <?php echo $nd;?></h2>
						<!-- <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div> -->
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
			<!-- Start php get dt -->
			<?php
                     
				//1. connect sql
				include("./config/connect.php");

                // 2 Write sql
                // if ($dk === "Truong") {
                //     $sql = "
				// 		SELECT *
				// 		FROM tbl_truongdaihoc
				// 		WHERE tentruong LIKE '%".$nd."%'
				// 		";
                // } else {
                //     $sql = "
				// 		SELECT *
				// 		FROM tbl_truongdaihoc
				// 		WHERE diemchuan <= '".$nd."'
				// 		";
				// }
				
				$sql = "
						SELECT *
						FROM tbl_tintuc 
						WHERE tieude LIKE '%$nd%'
						";
				
				// 3. Get data on database
                        $content = mysqli_query($con,$sql);
                // 4. Print results
						while ($row = mysqli_fetch_array($content)) 
						{
?>

				<!-- Course -->
				
				<div class="col-lg-4 course_col" style="width: 350px;height: 550px;">
					<div class="course">
						<div class="course_image"><img style="width: 100%;height: 250px;" src="images/<?php echo $row["anh"] ;?>" width="670px" max-height="600px" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="tin_tuc_chi_tiet.php?id=<?php echo $row["id_tintuc"];?>"><?php echo $row["tieude"] ;?></a></h3>
							<div class="course_text">
								<p><?php echo html_entity_decode($row["mota"]) ;?></p>
							</div>
							
						</div>
						
					</div>
				</div>

			<!-- End php get dt -->
			<?php
                } 
			?>

			</div>
		</div>
	</div>
    

    
    

	<!-- Footer -->
	<?php include("./footer.html"); ?>

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