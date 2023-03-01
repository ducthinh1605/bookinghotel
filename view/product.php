<div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">Danh Sách Khách Sạn</h2>
		
				</div>
			</div>
			<div class="row">
			<?php	
					include 'format.php';
					$arrhinh=array('h5','h2','h3','h4');
						$index = 0;
						include '../model/product.php';
						$product = new product("","","","");
						$list = $product->getAllProduct();
						foreach($list as $a){
							echo '<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">';
							echo'<form action="../controller/order_controller.php" method="POST">';
							echo '	<div class="media-1">';
							echo '		<a href="detail.php?id='.$a['id'].'" class="d-block mb-3"><img src="../images/'.$arrhinh[$index++].'" alt="Image" class="img-fluid"></a>';
							echo '		<span class="d-flex align-items-center loc mb-2">';
							echo '			<span class="icon-room mr-3"></span>';
							echo '			<span>TP.Hồ Chí Minh</span>';
							echo '		</span>';
							echo '		<div class="d-flex align-items-center">';
							echo '			<div>';
							echo '				<h3><a href="#">'.$a['name'].'</a></h3>';
							echo '				<div class="price ml-auto">';
							echo '					<span style="color:red">'.format($a['price']).'</span>';
							echo '				</div>';
							echo '			</div>';
							echo '		</div>';
							echo '	</div>';
							echo '				<button type="submit" name="o er_action" value="add" class="btn btn-primary btn-block">Đặt phòng</button>';
							echo '             <input type="text" hidden  name="id" value="'.$a['id'].'">';
							echo '             <input type="text" hidden  name="name" value="'.$a['name'].'">';
							echo '             <input type="text" hidden  name="price" value="'.$a['price'].'">';
							echo '	</form>'; 
							echo '	</div>';
						}

			?>
			</div>
		</div>
	</div>
                