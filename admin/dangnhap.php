<?php 
  if (!session_start()) {
    session_start();
  }
  include_once('../config/connect.php');
  if(isset($_SESSION['tk'])){
    header("location:index.php?ql=thongke");
  }
  if(isset($_POST['taikhoan'])){ 
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['matkhau'];
    //Kiem tra thong tin
    if ($taikhoan == "" || $matkhau == "") {
      echo "<div class='alert alert-danger' role = 'alert'>Vui lòng nhập đủ thông tin</div>";
    }
    else{
      $sql = "SELECT * FROM `tbl_nguoidung` as t1  WHERE t1.username = '$taikhoan' AND t1.password = '$matkhau'";
      $query = $con->query($sql);
      if(mysqli_num_rows($query = $con->query($sql)) > 0){
        $row = $query->fetch_assoc();
        $_SESSION['tk']['id'] = $row['id'];
       
        $_SESSION['tk']['tenhienthi'] = $row['tenhienthi'];
        $_SESSION['tk']['username'] = $row['username'];
        $_SESSION['tk']['anh'] = $row['anh'];
        header("location:index.php?ql=thongke");
      }else{
        echo "<div class='alert alert-danger' role = 'alert'>Sai thông tin đăng nhập</div>";
      }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ĐĂNG NHẬP TRANG QUẢN TRỊ</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 ">
                <div class="image" style="text-align: center;">
                  <img src="https://lh3.googleusercontent.com/proxy/idKxBAwCcHGU4-IuiLgNDPejljFJE0w6hLnSa9U3WiDoICNUwBkzk40MqsVMVaIEBifTlCr63-JfWjSIZo_tEkq-2fow9xyTaE1Fo_ULkcT_t3T8_qUVa4wIzM4" style="width: 100%; height: auto;margin-top : 100px">
              </div>
              </div>
              <div class="col-lg-6" style="background-color: #ffd60d">
                <div class="p-5" style="position: relative; top: 12%; height: 445px;">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4"><b>Chào mừng bạn đến với trang quản trị</b></h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" name="taikhoan" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="User Name ...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="matkhau" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                    </div>
                    <button class="btn btn-google btn-user btn-block" style="background-color: green;">Đăng nhập</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
