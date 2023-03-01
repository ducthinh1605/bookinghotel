<nav class="site-nav">
    <div class="container">
      <div class="site-navigation">
        <a href="trangchu.php" class="logo m-0">Double T <span class="text-primary">hotel.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
          <li><a href="trangchu.php">Trang chủ</a></li>
          <li><a href="">Thông tin</a></li>
          <li><a href="cart.php">Giỏ Hàng</a></li>
          <li class="has-children">
            <a href="#">Thành viên</a>
            <ul class="dropdown">
              <?php
                session_start();
                  if(isset($_SESSION["is_user"])){
                    echo '<li><a href="userinfo.php">'.$_SESSION["tendn"].'</a></li>';
                    echo'<li><a href="../controller/logout.php">Đăng xuất</a></li>';

                    }
                  else{
                    header("location:../index.php");
                       }
               ?>
               <?php
              //  unset($_SESSION['is_user']);
               ?>
            </ul>
          </li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
        

      </div>
    </div>
  </nav>