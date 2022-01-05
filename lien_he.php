<?php 
include "plugins/PHPMailer-master/src/PHPMailer.php";
include "plugins/PHPMailer-master/src/Exception.php";
include "plugins/PHPMailer-master/src/OAuth.php";
include "plugins/PHPMailer-master/src/POP3.php";
include "plugins/PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  include_once('./config/connect.php');
  if (isset($_POST['gui'])) {
    $hoten = $_POST['hoten'];
    date_default_timezone_set("ASIA/HO_CHI_MINH");
    $ngaygui = date("Y/m/d h:i:s");
    $email = $_POST['email'];
    $noidung = $_POST['noidung'];
    if ($hoten == '' || $email == '' || $noidung == '') {
      echo "<div class='alert alert-success'>Vui lòng nhập đủ thông tin !</div>";
    }else{
      $sql = "INSERT INTO `tbl_lienhe`(`hoten`, `email`, `noidung`, `ngaygui`) VALUES ('$hoten','$email','$noidung','$ngaygui')";
      
      //$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try { /*
			$mail->CharSet  = "utf-8";
		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'FoodReview906@gmail.com';                 // SMTP username
		    $mail->Password = 'Huong2000';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to
		 
		    //Recipients
		    $mail->setFrom('FoodReview906@gmail.com', 'FOODREVIEW');
		    $mail->addAddress($email, $hoten);     // Add a recipien
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Thư Cảm Ơn';
		    $mail->Body    = '<table width="100%" height="100%" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
 <tbody><tr><td width="100%" align="center" valign="top" bgcolor="#E4E6E9" style="background-color:#E4E6E9; min-height: 200px;">
<table><tbody><tr><td class="table-td-wrap" align="center" width="458"><table class="table-space" height="18" style="height: 18px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="18" style="height: 18px; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table>
<table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-row" width="450" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
  <table class="table-col" align="left" width="378" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="378" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;" valign="top" align="left">
    <table class="header-row" width="378" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="header-row-td" width="378" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" valign="top" align="left">Đội ngũ Admin FoodReview</td></tr></tbody></table>
    <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
      <b style="color: #777777;">Cảm ơn bạn '.$hoten.' đã phản hồi đến chúng tôi, FoodReview sẽ hồi đáp sớm nhất đến cho bạn</b>
      </div>
  </td></tr></tbody></table>
</td></tr></tbody></table>
    
<table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>

<table class="table-row-fixed" width="450" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-row-fixed-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;" valign="top" align="left">
  <table class="table-col" align="left" width="448" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td class="table-col-td" width="448" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;"><tbody><tr><td width="100%" align="center" bgcolor="#f5f5f5" style="font-family: Arial, sans-serif; line-height: 24px; color: #bbbbbb; font-size: 13px; font-weight: normal; text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;" valign="top">
      <a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">FOODREVIEW</a>
        
    </td></tr></tbody></table>
  </td></tr></tbody></table>
</td></tr></tbody></table>
<table class="table-space" height="1" style="height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="1" style="height: 1px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td></tr></tbody></table>
<table class="table-space" height="36" style="height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="table-space-td" valign="middle" height="36" style="height: 36px; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" align="left">&nbsp;</td></tr></tbody></table></td></tr></tbody></table>
</td></tr>
 </tbody></table>';
		    $mail->send();*/
		    $con->query($sql);
		    echo $sql;
		    //header('location:http://FoodReviews.epizy.com/');
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Liên hệ</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link REL="SHORTCUT ICON" href="./images/logott.ico">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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

	<?php include("./header.php") ;?>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<li>Liên hệ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
          

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="container contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<div id="map">
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124424.7577154151!2d109.29533866786443!3d12.954331446679552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316fe52fa35c759d%3A0xead368fdbfedd0be!2zxJDDtG5nIEjDsmEsIFBow7ogWcOqbiwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1641393321965!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124424.7577154151!2d109.29533866786443!3d12.954331446679552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316fe52fa35c759d%3A0xead368fdbfedd0be!2zxJDDtG5nIEjDsmEsIFBow7ogWcOqbiwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1641393321965!5m2!1svi!2s" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Trang đóng góp ý kiến</div>
							<form class="contactform" method="POST">                  
                    <div>
									<div class="form_title">Họ tên</div>
									<input type="text" class="comment_input" required="required" name="hoten">
								</div>
                   <div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" required="required" name="email">
								</div>
                   <div>
									<div class="form_title">Phản hồi</div>
									<textarea class="comment_input comment_textarea" required="required" name="noidung"></textarea>
								</div>               
                    <p class="form-submit">
                      <input type="submit" value="Gửi phản hồi" class="mu-post-btn" name="gui" onclick="guilienhe()">
                    </p>        
                  </form>
						</div>
					</div>
                    
					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Thông tin liên hệ</div>
							<div class="contact_info_text">
								<p>Mọi đóng góp phản hồi của các bạn sẽ được chúng tôi xem xét và phản hồi sớm nhất</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">HƯỚNG DẪN SỬ DỤNG INDESIGN</div>
								<ul class="location_list">
									<li>Email: ngoctin10a11@gmail.com</li>
											<li>Điện thoại: 0368724647 </li>
											
											<li>Địa chỉ: TPHCM</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
     function guilienhe(){
      window.alert("Cảm ơn bạn đã gửi liên hệ !!!");
     }
   </script>
	<!-- Newsletter -->

	<!--Footer-->
	<?php include("./footer.html") ;?>
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