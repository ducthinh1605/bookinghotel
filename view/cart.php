<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 cart - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Đơn Đặt Phòng</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Danh sách phòng &amp; chi tiết</th>
                    <th class="text-right py-3 px-4" style="width: 150px;">Giá</th>
                    <th class="text-center py-3 px-4" style="width: 150px;">Số Lượng</th>
                    <th class="text-right py-3 px-4" style="width: 150px;">Tiền</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
              <?php
              include 'format.php';
              //unset($_SESSION['cart']);
              $result = 0;
              $i = 0;
              foreach ($_SESSION['cart']as $product){   
                $thanhtien = $product[2] * $product[3];
                $result += $thanhtien;
                $i += 1;                                                                                                                          
    echo '              <tr>';
    echo '                <td class="p-4">';
    echo '                  <div class="media align-items-center">';
    echo '                    <img src="../images/img_4.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt="">';
    echo '                    <div class="media-body">';
    echo '                      <a href="#" class="d-block text-dark">New word hotel '.$product[1].'</a>';
    echo '                    </div>';
    echo '                  </div>';
    echo '                </td>';
    echo '                <td class="text-right font-weight-semibold align-middle p-4">'.format($product[2]).'</td>';
    echo '                <td class="text-right font-weight-semibold align-middle p-4">'.$product[3].'</td>';
    echo '                <td class="text-right font-weight-semibold align-middle p-4">'.format($thanhtien).'</td>';
    echo '                <td class="text-center align-middle px-0"><a href="../controller/delete_order_controller?id='.($i-1).'" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>';
    echo '              </tr>';
                }
            ?>
        
                  
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <?php
echo '                 <div class="text-large">'.format($result).'</strong></div> ';
                  ?>
                </div>
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3"><a href="trangchu.php">Trở Về</a> </button>
              <button type="button" class="btn btn-lg btn-primary mt-2">Thanh Toán</button>
            </div>
        
          </div>
      </div>
  </div>

<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>