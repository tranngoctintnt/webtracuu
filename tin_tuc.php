<!DOCTYPE html>
<html lang="en">
<head>
<title>Danh sách bài học</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<LINK REL="SHORTCUT ICON" href="./images/logott.ico">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
	<?php
	include("./config/connect.php");
	if (isset($_GET['dm'])) {
		$iddm = $_GET['dm'];
		$lenh = "SELECT * FROM tbl_loaitintuc WHERE id_loaitintuc = $iddm";
		$contentdm = mysqli_query($con,$lenh);
		$rowdm = mysqli_fetch_array($contentdm);
	}
	?>

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<?php if (isset($_GET['dm'])) { ?>
								<li>Danh sách bài học của <?php echo $rowdm['ten_loai_tin_tuc']; ?></li>
								<?php }else{?>
									<li>Danh sách bài học </li>
								<?php } ?>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_post_container">
					<?php
						//1. Tạo ra chuỗi kết nối đến CSDL
						include("./config/connect.php");
						//2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
						if (isset($_GET['dm'])) { 
						$sql = "
							SELECT * FROM `tbl_tintuc` WHERE maloaitintuc= $iddm ORDER BY id_tintuc DESC
						";
						}
						else{
							$sql = "
							SELECT * FROM `tbl_tintuc` ORDER BY id_tintuc DESC
						";
						}
						//3. Thực hiện truy vấn đẻ lấy ra các dữ liệu mong muốn
						$noi_dung_tin_tuc = mysqli_query($con, $sql);
						//4. Hiển thị dữ liệu mong muốn
						while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
					;?>
						<!-- Blog Post -->
						<div class="blog_post trans_200" style="width: 350px;height: 550px;">
								<div class="blog_post_image"><img src="./images/<?php
								if ($row["anh"]<>""){
									echo $row["anh"];
								}else {
									echo "no_image.jpg";
								}
								;?> " width="100%" height="250px"> 
							</div>
								<div class="blog_post_body">
									<div class="blog_post_title"><a href="tin_tuc_chi_tiet.php?id=<?php echo $row["id_tintuc"];?>"><?php echo $row["tieude"];?></a></div>
									<div class="blog_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#"><?php echo $row["ngayviet"];?></a></li>
										</ul>
									</div>
									<div class="blog_post_text">
										<p><?php echo html_entity_decode($row["mota"]) ;?></p>
									</div>
								</div>

							</div>
							<?php
								}
							;?>;
					</div>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>
<script src="js/load.js"></script>
</body>
</html>