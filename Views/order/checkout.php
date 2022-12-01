<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Trang chủ</a></li>
                <li class='active'>Thanh toán</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">


                <div class="col-md-5 col-sm-12 cart-shopping-total">
                    <h3>ĐỊA CHỈ GIAO HÀNG</h3>
                    <table class="table">
                        <form action="./?act=checkout&xuli=save" method="POST">
                            <thead>
                                <tr>
                                    <th>
                                        Tên người nhận : <br>
                                        <div class="cart-sub-total">
                                            <div class="cart-sub-total">
                                                <input type="text" name="NguoiNhan" class="form-control text-input" placeholder="Người nhận" required value="<?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten']  ?>" />
                                            </div>
                                        </div>
                                        <div class="cart-sub-total">
                                            <input type="hidden" name="Email" class="form-control text-input" placeholder="Địa chỉ email" required value="<?= $_SESSION['login']['Email'] ?>" />
                                        </div>
                                        Số điện thoại : <br>
                                        <div class="cart-sub-total">
                                            <input type="text" name="SDT" class="form-control text-input" placeholder="Số điện thoại" required pattern="[0-9]+" minlength="10" value="<?= $_SESSION['login']['SDT'] ?>" />
                                        </div>
                                        Tỉnh/Tp : <br>
                                        <div class="cart-sub-total">
                                            <select class="form-control" name="ThanhPho" title="Tỉnh/Thành Phố">
                                                <option> Chọn Tỉnh/Tp</option>
                                                <option> Tp. Đà Nẵng</option>
                                            </select>
                                        </div>
                                        Quận : <br>
                                        <div class="cart-sub-total">
                                            <select class="form-control" name="DiaChi" title="Quận">
                                                <option value="Quận Hải Châu"> Quận Hải Châu</option>
                                                <option value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
                                                <option value="Quận Thanh Khê"> Quận Thanh Khê</option>
                                                <option value="Quận Liên Chiểu"> Quận Liên Chiểu</option>
                                                <option value="Quận Ngũ Hành Sơn"> Quận Ngũ Hành Sơn</option>
                                                <option value="Quận Sơn Trà"> Quận Sơn Trà</option>
                                                <option value="Huyện Hòa Vang"> Huyện Hòa Vang</option>
                                                <option value="Huyện Hoàng Sa"> Huyện Hoàng Sa</option>

                                            </select>
                                        </div>
                                        Số nhà/đường, Phường : <br>
                                        <div class="cart-sub-total">
                                            <div class="cart-sub-total">
                                                <input name="Phuong" type="text" class="form-control" placeholder="Số nhà/đường,Phường" />
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <button type="submit" class="btn btn-primary checkout-btn">Đặt hàng</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </form>
                    </table><!-- /table -->
                </div><!-- /.cart-shopping-total -->
                <div class="col-md-2 col-sm-6 estimate-ship-tax">
                </div><!-- /.estimate-ship-tax -->
                <div class="col-md-4 col-sm-12 cart-shopping-total">
					<h3>CHI TIẾT ĐƠN HÀNG</h3>
					<table class="table">
						<form action="./?act=checkout" method="POST">
							<thead>
								<tr>
									<th>
										<div class="cart-sub-total">
											<li>Tổng Tiền: <span class="inner-left-md"><?= number_format($count) ?>đ</span></li>
										</div>
										<div class="cart-sub-total">
											<li> Giảm giá: <span class="inner-left-md">0đ</span></li>
										</div>
										<div class="cart-sub-total">
											<li>Vận chuyển: <span class="inner-left-md">15.000đ</span></li>
										</div>
										<div class="cart-sub-total">
											<li>Vat<span >0đ</span></li>
										</div>
										<div class="cart-grand-total">
											<li>Tổng tiền: <span class="inner-left-md"><?= number_format($count + 15000) ?>đ</span></li>
										</div>
									</th>
								</tr>
							</thead><!-- /thead -->
							
						</form>
					</table><!-- /table -->
				</div><!-- /.cart-shopping-total -->
            </div><!-- /.shopping-cart -->
        </div> <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->