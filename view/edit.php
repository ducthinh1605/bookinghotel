
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">
  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <link rel="stylesheet" href="../css/aos.css">
  <link rel="stylesheet" href="../css/style.css">

  <title>THINH</title>
</head>

<body>
  
  <div class="untree_co-section">
  <div class="row justify-content-center">
<div class="col-lg-4">
  <div class="custom-block" data-aos="fade-up">
    <div class="custom-accordion" id="accordion_1">
    <h2 class="section-title">Sửa Khách Hàng</h2>
    <?php
    include '../model/user.php';
    $user = new user("","","","","","","","");
    $data = $user->getByID();

    if($data != null){

      foreach($data as $item){
          echo'   <form action="../controller/edit_controller" method="POST" class="contact-form bg-white">              ';
          echo'     <div class="row">';
          echo'     </div>';
          echo'     <div class="form-group">';
          echo'       <label class="text-black" for="">Mã khách hàng</label>';
          echo'       <input type="text" class="form-control"  name="txt_makh" aria-describedby="emailHelp" value="'.$_GET['id'].'">';
          echo'     </div>      ';
          echo'     <div class="form-group">';
          echo'       <label class="text-black" for="">Họ Tên</label>';
          echo'       <input type="text" class="form-control" name="txt_hoten" aria-describedby="emailHelp" value="'.$item['HoTen'].'">';
          echo'     </div>      ';
          echo'     <div class="form-group">';
          echo'       <label class="text-black" for="matkhau">Địa chỉ</label>';
          echo'       <input type="text" class="form-control" name="txt_diachi"required="" value="'.$item['DiaChi'].'">';
          echo'     </div>';
          echo'     <div class="form-group">';
          echo'       <label class="text-black" for="matkhau">Số Điện Thoại</label>';
          echo'       <input type="text" maxlength="11" class="form-control" name="txt_sdt"required="" value="'.$item['SDT'].'">';
          echo'     </div>';
          echo'     <div class="form-group">';
          echo'       <label class="text-black" for="matkhau">Email</label>';
          echo'       <input type="text" class="form-control" name="txt_email"required="" value="'.$item['email'].'">';
          echo'     </div>';
          echo'     <div class="form-group">';
          echo'       <label class="text-black" for="matkhau">CCCD</label>';
          echo'       <input type="text" maxlength="10" class="form-control" name="txt_cccd"required=""value="'.$item['cccd'].'">';
          echo'     </div>';
          echo'     <button type="submit" name="edit" value="edit" class="btn btn-primary">Cập Nhật</button>';
          echo'   </form>';
        }
      }
    ?>
  </div>
  </div> <!-- END .custom-block -->
      </div>
        
    </div>
  </div>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/moment.min.js"></script>
  <script src="../js/daterangepicker.js"></script>

  <script src="../js/typed.js"></script>
  
  <script src="../js/custom.js"></script>

</body>

</html>
