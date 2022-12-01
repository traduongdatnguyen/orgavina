<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="?act=home">Trang chủ</a></li>
				<li class='active'>Đăng nhập</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
				<div class="col-md-6 col-sm-6 sign-in">
					<h4 class="">Đăng nhập</h4>
					<p class="">Xin chào, Chào mừng đến với tài khoản của bạn.</p>
					<?php if (isset($_COOKIE['msg1'])) { ?>
						<div class="alert alert-success">
							<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
						</div>
					<?php } ?>
					<form class="register-form outer-top-xs" action="?act=taikhoan&xuli=dangnhap" id="form1" method="post" role="form">
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Tên tài khoản <span>*</span></label>
							<input type="text" name="taikhoan" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputPassword1">Mật khẩu <span>*</span></label>
							<input type="password" name="matkhau" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
						</div>
						<div class="radio outer-xs">
							<label>
								<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Ghi nhớ!
							</label>
							<a href="#" class="forgot-password pull-right">Quên mật khẩu?</a>
						</div>
						<button for="form1" name="submit" type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng nhập</button>
					</form>
				</div>
				<!-- Sign-in -->

				<!-- create a new account -->
				<div class="col-md-6 col-sm-6 create-new-account">
					<h4 class="checkout-subtitle">Đăng ký tài khoản</h4>
					<p class="text title-tag-line">Đăng ký tài khoản mới cho bạn.</p>
					<?php if (isset($_COOKIE['msg'])) { ?>
						<div class="alert alert-success">
							<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
						</div>
					<?php } ?>
					<form class="register-form outer-top-xs" action="?act=taikhoan&xuli=dangky" method="post" role="form" id="form2">
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail2">Họ<span>*</span></label>
							<input type="text" name="Ho" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Tên <span>*</span></label>
							<input type="text" name="Ten" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Tên tài khoản <span>*</span></label>
							<input type="text" name="TaiKhoan" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Địa chỉ Email<span>*</span></label>
							<input type="email" name="Email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Số điện thoại<span>*</span></label>
							<input type="text" name="SĐT" class="form-control unicase-form-control text-input" id="exampleInputEmail1" required pattern="[0-9]+" minlength="10"/>
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Mật khẩu <span>*</span></label>
							<input type="password" name="MatKhau" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
						</div>
						<div class="form-group">
							<label class="info-title" for="exampleInputEmail1">Nhập lại mật khẩu <span>*</span></label>
							<input type="password" name="check_password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
						</div>
						<button type="submit" form="form2" class="btn-upper btn btn-primary checkout-page-button">Đăng ký</button>
					</form>

				</div>
				<!-- create a new account -->
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

		<script>
			$(document).ready(function() {
				$(".changecolor").switchstylesheet({
					seperator: "color"
				});
				$('.show-theme-options').click(function() {
					$(this).parent().toggleClass('open');
					return false;
				});
			});

			$(window).bind("load", function() {
				$('.show-theme-options').delay(2000).trigger('click');
			});
		</script>
		<!-- For demo purposes – can be removed on production : End -->