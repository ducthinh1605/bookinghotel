
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
  <nav class="site-nav">
    <div class="container">
      <div class="site-navigation">
        <a href="index.php" class="logo m-0">Double T <span class="text-primary">hotel.</span></a>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>


  <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">Chào Mừng</h1>';
            <p class="text-white">Bạn đã đăng ký thành viên thành công, hãy đăng nhập để trải nghiệm dịch vụ</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="untree_co-section">
  <div class="row justify-content-center">

<div class="col-lg-4">
  <div class="custom-block" data-aos="fade-up">
    <div class="custom-accordion" id="accordion_1">
    <h2 class="section-title">Đăng nhập</h2>
    <form action="../controller/user_controler.php" method="POST" class="contact-form bg-white">
      <div class="row">
      </div>
      <div class="form-group">
        <label class="text-black" for="">Tên đăng nhập</label>
        <input type="text" class="form-control" name="txt_tendn" aria-describedby="emailHelp" required="">
      </div>
      <div class="form-group">
        <label class="text-black" for="matkhau">Mật Khẩu</label>
        <input type="password" class="form-control" name="txt_matkhau"required="">
        <a href="#"><small id="emailHelp" class="form-text text-muted">Quên mật khẩu ?</small></a>
        <small id="emailHelp" class="form-text text-muted">Độ dài mặt khẩu từ 8-32 ký tự</small>
      </div>
      <button type="submit" name="btn_action" value="login" class="btn btn-primary">Đăng nhập</button>
    </form>
  </div>
  </div> <!-- END .custom-block -->
  <div class="custom-block" data-aos="fade-up">
    <h2 class="section-title">Gallery</h2>
    <div class="row gutter-v2 gallery">
      <div class="col-4">
        <a href="../images/h1.jpg" class="gal-item" data-fancybox="gal"><img src="../images/h1.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4">
        <a href="../images/h2.jpg" class="gal-item" data-fancybox="gal"><img src="../images/h2.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4">
        <a href="../images/h3.jpg" class="gal-item" data-fancybox="gal"><img src="../images/h3.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4">
        <a href="../images/h4.jpg" class="gal-item" data-fancybox="gal"><img src="../images/h4.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4">
        <a href="../images/h5.jpg" class="gal-item" data-fancybox="gal"><img src="../images/h5.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4">
        <a href="../images/3.jpg" class="gal-item" data-fancybox="gal"><img src="../images/3.jpg" alt="Image" class="img-fluid"></a>
      </div>
    </div>
  </div> <!-- END .custom-block -->
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
