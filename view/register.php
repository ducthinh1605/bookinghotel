<div class="col-lg-4">
          <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
            <h2 class="section-title">Đăng ký</h2>
            <form action="./controller/user_controler.php" method="POST" class="contact-form bg-white">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="hoten">Họ Tên</label>
                    <input type="text" class="form-control" name="txt_hoten" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="sdt">Số điện thoại</label>
                    <input type="text" class="form-control" name="txt_sdt" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="cccd">Số CCCD</label>
                    <input type="text" class="form-control" name="txt_cccd" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" class="form-control" name="txt_email" required="">
                    <small id="emailHelp" class="form-text text-muted">Địa chỉ email của bạn sẽ không được tiết lộ</small>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="text-black" for="diachi">Địa chỉ</label>
                <input type="text" class="form-control" name="txt_diachi" aria-describedby="emailHelp" required="">
                
              </div>
              <div class="form-group">
                <label class="text-black" for="tendn">Tên đăng nhập</label>
                <input type="text" class="form-control" name="txt_tendn" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label class="text-black" for="matkhau">Mật Khẩu</label>
                <input type="password" class="form-control" name="txt_matkhau" required="">
                <small id="emailHelp" class="form-text text-muted">Độ dài mặt khẩu từ 8-32 ký tự</small >
              </div>
              <button type="submit" name="btn_action" value="register" class="btn btn-primary">Đăng Ký</button>
            </form>
          </div>

          <div class="custom-block" data-aos="fade-up">
            <h2 class="section-title">Social Icons</h2>
            <ul class="list-unstyled social-icons light">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-google"></span></a></li>
              <li><a href="#"><span class="icon-play"></span></a></li>
            </ul>
          </div> <!-- END .custom-block -->