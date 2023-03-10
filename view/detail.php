<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .checked {
  color: orange;
}
  </style>
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
 include('header.php');
 ?>
 <div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">?????t Ph??ng</h1>
            <p class="text-white"></p>
          </div>
        </div>
      </div>
    </div>
  </div>  
 
  </div>
  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-single dots-absolute owl-carousel">
            <img src="../images/slider-1.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
            <img src="../images/slider-2.jpg"  class="img-fluid rounded-20">
            <img src="../images/slider-3.jpg"  class="img-fluid rounded-20">
            <img src="../images/slider-4.jpg"  class="img-fluid rounded-20">
            <img src="../images/slider-5.jpg"  class="img-fluid rounded-20">
          </div>
        </div>
        <div class="col-lg-5 pl-lg-5 ml-auto">
          
          <?php
          include 'format.php';
          include'../model/product.php';
          $Product=new product("","","","");
          $data = $Product->getProductByID();
          foreach($data as $item){
echo'          <form action="../controller/order_controller.php" method="POST">';
echo'          <h2 class="section-title mb-4">New World Hotel '.$item['name'].'</h2>';
echo'          <h3 style="color: Red;">'.format($item['price']).'</h3>';
echo'          <p>Th???i gian ?????t ph??ng</p>';
echo'          <button type="submit" name="order_action" value="add" class="btn btn-primary btn-block">?????t ph??ng</button>';
echo'             <input type="text" hidden  name="id" value="'.$item['id'].'">';
echo'             <input type="text" hidden  name="name" value="'.$item['name'].'">';
echo'             <input type="text" hidden  name="price" value="'.$item['price'].'">';
echo'          </form>'; 
          }
          ?>
          <br>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <p>New World Saigon Hotel t???a l???c t???i m???t v??? tr?? l?? t?????ng ??? trung t??m thu???c Th??nh ph??? H??? Ch?? Minh, gi???a khu ph??? s???m u???t v???i c??c nh?? h??ng 
          v?? ?????a ??i???m gi???i tr??. Ch??? ngh??? n??y n???m trong kho???ng c??ch ??i b??? t??? c??c ch???, b???o t??ng v?? ?????a ??i???m tham quan v??n h??a.</p>
          <ul class="list-unstyled two-col clearfix">
            <li>H??? B??i</li>
            <li>Wi-Fi mi????n phi??</li>
            <li>Trung t??m th???? du??c</li>
            <li>Qu???y bar</li>
            <li>Buffet</li>
            <li>Trung chuy???n</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 <div class="col-12">
								<form class="form" action="../controller/order_controller.php" method=" POST">
                <h1>Ch???n lo???i ph??ng v?? d???ch v???</h1>
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                    <p>Lo???i Ph??ng</p>
											<select name="" id="" class="form-control custom-select">
												<option value="">Ph??ng ????n</option>
												<option value="">Ph??ng ????i</option>
												<option value="">Ph??ng 4</option>
											</select>
										</div>
                    
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                    <p>Th???i gian ?????t ph??ng</p>
											<input type="text" class="form-control" name="daterange">
										</div>
                    
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <p>S??? l?????ng ng?????i</p>
											<input type="number" class="form-control">
										</div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-1">
                    <label class="control control--checkbox mt-3">
                      <span class="caption">Spa</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
										</div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-1">
                    <label class="control control--checkbox mt-3">
												<span class="caption">buffet</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
										</div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-1">
                    <label class="control control--checkbox mt-3">
												<span class="caption">Gi???t ???i</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
										</div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-2">
                    <label class="control control--checkbox mt-3">
                        <span class="caption">Trung chuy???n</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
										</div>

									</div>    
									<div class="row align-items-center">
										<div class="col-sm-6 col-md-6 mb-3 mb-lg-0 col-lg-4" style="margin:auto; display:block;">
											<input type="submit" class="btn btn-primary btn-block" name="order_action " value="add">
										</div>
									</div>
								</form>
							</div>


  <div class="untree_co-section testimonial-section mt-5">
    <div class="container">
      
  </div>

  <?php
  include('footer.php')
  ?>


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
