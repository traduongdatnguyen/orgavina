<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Trang chủ</a></li>
                <li class='active'>Theo dõi đơn hàng</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class="container">
        <div>
            <h3>
                <center>
                    <p>Cảm ơn bạn. Đơn đặt hàng của bạn đã được nhận; Đã nhận được đơn đặt hàng của bạn.</p>
                    <p>Vui Lòng Chờ Xét Duyệt</p>
                </center>
            </h3>
        </div>
        <div class="row ">
            <div class="shopping-cart">
                <div class="col-md-5 col-sm-12 cart-shopping-total">
                    <h3>Thông tin người nhận</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="cart-sub-total">
                                        <div class="cart-sub-total">
                                            Tên người nhận: <?= $viewcheckoutnew['NguoiNhan'] ?>
                                        </div>
                                    </div>

                                    <div class="cart-sub-total">
                                        Số điện thoại: <?= $viewcheckoutnew['SDT'] ?>
                                    </div>
                                    <div class="cart-sub-total">
                                        Địa chỉ giao hàng: <?= $viewcheckoutnew['Phuong'] . ", " . $viewcheckoutnew['DiaChi'] ?>
                                    </div>
                                </th>
                            </tr>
                        </thead><!-- /thead -->
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