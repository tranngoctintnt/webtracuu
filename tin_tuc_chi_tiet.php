<!DOCTYPE html>
<html lang="en">
<head>
<title>Bài học chi tiết</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<LINK REL="SHORTCUT ICON" href="./images/logott.ico">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
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




<div class="super_container">

	<!-- Header -->
	<?php include("./header.php"); ?>

 <!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<li><a href="tin_tuc.php">Bài học</a></li>
								<li>Bài học chi tiết</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<?php
		// Lấy dữ liệu mã id tin tức để thực hiện câu lệnh truy vấn
		$id_tin_tuc = $_GET["id"];
			//1. Tạo ra chuỗi kết nối đến CSDL
			include("./config/connect.php");

			//2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
			$sql = "
				SELECT * 
				FROM tbl_tintuc
				WHERE id_tintuc = '".$id_tin_tuc."'
			";
			//3. Thực hiện truy vấn đẻ lấy ra các dữ liệu mong muốn
			$noi_dung_tin_tuc = mysqli_query($con, $sql);

			//4. Hiển thị dữ liệu mong muốn
			while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
	;?>

	<!-- Blog -->
	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?php echo $row["tieude"];?></div>
							<div class="blog_meta">
								<ul>
									<li>Post on <a href="#"><?php echo $row["ngayviet"];?></a></li>
									<li>By <a href="#"><?php echo $row["nguon"];?></a></li>
								</ul>
							</div>
							<p><?php echo $row["mota"];?></p>

							<div class="blog_image"><img src="./images/<?php
							if ($row["anh"]<>""){
								echo $row["anh"];
							}else {
								echo "no_image.png";
							}
						;?>" width="650px" height="auto">
							</div><br>
							<br>
							<p><?php echo $row["ghichu"];?></p>
						<p><?php echo html_entity_decode( $row["noidung"]);?></p>	
					</div>

					<div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">						
						<div class="blog_social ml-lg-auto">
							<span>Share: </span>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>


					
				</div> 
				<!-- Blog Sidebar -->

				<div class="col-lg-4">
					<div class="sidebar">
						<!-- Latest News -->

						<div style="width: 380px;" class="sidebar_section">
							<div class="sidebar_section_title">Bài học mới nhất</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<?php
									//1. Tạo ra chuỗi kết nối đến CSDL
									include("./config/connect.php");

									//2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
									$sql = "
										SELECT * FROM tbl_tintuc ORDER BY id_tintuc DESC limit 5
									";
									//3. Thực hiện truy vấn đẻ lấy ra các dữ liệu mong muốn
									$noi_dung_tin_tuc = mysqli_query($con, $sql);

									//4. Hiển thị dữ liệu mong muốn
									while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
								;?>

								<div style="height: 120px;" class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div style="width: 140px; height: 110px;"><img src="./images/<?php
										if ($row["anh"]<>""){
										echo $row["anh"];
										}else {
											echo "no_image.jpg";
										}
									;?> "></div>
									</div>
									<div class="latest_content">
										<div class="latest_title"><a href="tin_tuc_chi_tiet.php?id=<?php echo $row["id_tintuc"];?>"><?php echo $row["tieude"];?></a></div>
										<div class="latest_date"><?php echo $row["ngayviet"];?></div>
									</div>
								</div>

								<?php
									}
								;?>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php
			}
		;?>;
	<!-- Footer -->
	<?php include("./footer.html"); ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/blog_single.js"></script>
<script src="js/load.js"></script>
</body>
</html>