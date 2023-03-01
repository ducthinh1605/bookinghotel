<div class="row justify-content-center">

        <div class="col-lg-4">
          <div class="custom-block" data-aos="fade-up">
            <div class="custom-accordion" id="accordion_1">
            <h2 class="section-title">Đăng nhập</h2>
            <form action="./controller/user_controler.php" method="POST" class="contact-form bg-white">
              <div class="row">
              </div>
              <div class="form-group">
                <label class="text-black" for="">Tên đăng nhập</label>
                <input type="text" maxlength="32" class="form-control" name="txt_tendn" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label class="text-black" for="matkhau">Mật Khẩu</label>
                <input type="password" maxlength="32" class="form-control" name="txt_matkhau"required="">
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
                <a href="images/h1.jpg" class="gal-item" data-fancybox="gal"><img src="images/h1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/h2.jpg" class="gal-item" data-fancybox="gal"><img src="images/h2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/h3.jpg" class="gal-item" data-fancybox="gal"><img src="images/h3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/h4.jpg" class="gal-item" data-fancybox="gal"><img src="images/h4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="images/h5.jpg" class="gal-item" data-fancybox="gal"><img src="images/h5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4">
                <a href="./images/3.jpg" class="gal-item" data-fancybox="gal"><img src="images/3.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div> <!-- END .custom-block -->