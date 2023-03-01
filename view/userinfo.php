<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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


  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <?php
  include ('header.php');
  ?>
  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <?php
            echo '<h1 class="mb-0">Thông Tin Chi Tiết Tài Khoản '.$_SESSION["tendn"].'</h1>';
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="untree_co-section">
  <?php include'../model/user.php';
    $user=new user("","","","","","","","");
    $data=$user->getUserInfo();
    foreach ($data as $i)
  ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="fname">Họ Tên</label>
                  <input type="text" class="form-control" id="fname" name="hoten" value="<?php echo $data['HoTen'] ?>" disabled>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="text-black" for="lname">CCCD</label>
                  <input type="text" class="form-control" id="lname" name="cccd"value="<?php echo $data['cccd'] ?>" disabled>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="text-black" for="email">Tên Đăng Nhập</label>
              <input type="email" class="form-control" id="email" name="tendn"value="<?php echo $data['TenDN'] ?>" disabled>
            </div>
            <?php
            echo '<button type="submit" class="btn btn"><a href="../controller/logout.php">Đăng Xuất</a></button>'
            ?>
           
          </form>
        </div>
       
       
        <div class="col-lg-5 ml-auto">
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-house"></span>
            <address class="text">
              Địa chỉ:
              <?php echo $data['DiaChi']; ?></td>
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-phone-call"></span>
            <address class="text">
              Số điện thoại:
              <?php echo $data['SDT']; ?></td>
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-mail"></span>
            <address class="text">
              Email:
              <?php echo $data['email']; ?></td>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
 include ('footer.php');
?>

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
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
