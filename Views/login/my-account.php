<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="?act=home">Trang chủ</a></li>
                <li class='active'>Tài khoản</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="checkout-box faq-page">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">Thông tin tài khoản</h2>
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                        <span>1</span>Thông tin cá nhân
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseOne" class="panel-collapse collapse in">
                                <b>
                                    <?php if (isset($_COOKIE['doimk'])) {
                                        echo $_COOKIE['doimk'];
                                    } ?>
                                </b>
                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <table class="table">
                                        <b>
                                            <?php if (isset($_COOKIE['doimk'])) {
                                                echo $_COOKIE['doimk'];
                                            } ?>
                                        </b>
                                        <form action="?act=taikhoan&xuli=update" id="form1" method="post">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Họ :<div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <input name="Ho" type="text" value="<?= $data['Ho'] ?>" class="form-control" placeholder="Họ" />
                                                            </div>

                                                        </div>
                                                        Tên :<div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <input name="Ten" type="text" value="<?= $data['Ten'] ?>" class="form-control" placeholder="Tên" />
                                                            </div>

                                                        </div>
                                                        Giới tính :<div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <select class="form-control" name="GioiTinh" title="Giới tính">
                                                                    <option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Nam</option>
                                                                    <option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Nữ</option>
                                                                    <option <?= ($data['GioiTinh'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Khác</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        Email :<div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <input name="Email" type="email" required value="<?= $data['Email'] ?>" class="form-control" placeholder="Email" />
                                                            </div>

                                                        </div>
                                                        Số điện thoại :<div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <input name="SĐT" type="text" required pattern="[0-9]+" minlength="10" value="<?= $data['SDT'] ?>" class="form-control" placeholder="Số điện thoại" />
                                                            </div>

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
                                                                <option <?= ($data['DiaChi'] == 'Quận Hải Châu') ? 'selected' : '' ?> value="Quận Hải Châu"> Quận Hải Châu</option>
                                                                <option <?= ($data['DiaChi'] == 'Quận Cẩm Lệ') ? 'selected' : '' ?> value="Quận Cẩm Lệ">Quận Cẩm Lệ</option>
                                                                <option <?= ($data['DiaChi'] == 'Quận Thanh Khê') ? 'selected' : '' ?> value="Quận Thanh Khê"> Quận Thanh Khê</option>
                                                                <option <?= ($data['DiaChi'] == 'Quận Liên Chiểu') ? 'selected' : '' ?> value="Quận Liên Chiểu"> Quận Liên Chiểu</option>
                                                                <option <?= ($data['DiaChi'] == 'Quận Ngũ Hành Sơn') ? 'selected' : '' ?> value="Quận Ngũ Hành Sơn"> Quận Ngũ Hành Sơn</option>
                                                                <option <?= ($data['DiaChi'] == 'Quận Sơn Trà') ? 'selected' : '' ?> value="Quận Sơn Trà"> Quận Sơn Trà</option>
                                                                <option <?= ($data['DiaChi'] == 'Huyện Hòa Vang') ? 'selected' : '' ?> value="Huyện Hòa Vang"> Huyện Hòa Vang</option>
                                                                <option <?= ($data['DiaChi'] == 'Huyện Hoàng Sa') ? 'selected' : '' ?> value="Huyện Hoàng Sa"> Huyện Hoàng Sa</option>

                                                            </select>
                                                        </div>
                                                        Số nhà/đường, Phường : <br>
                                                        <div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <input name="Phuong" type="text" value="<?= $data['Phuong'] ?>" class="form-control" placeholder="Số nhà/đường,Phường" />
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead><!-- /thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="cart-checkout-btn pull-right">
                                                            <button for="form1" type="submit_tt" class="btn btn-primary checkout-btn">Lưu</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody><!-- /tbody -->
                                        </form>
                                    </table><!-- /table -->
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div>
                        <!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->
                        <div class="panel panel-default checkout-step-02">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                        <span>2</span>ĐỔI MẬT KHẨU
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <b>
                                            <?php if (isset($_COOKIE['doimk'])) {
                                                echo $_COOKIE['doimk'];
                                            } ?>
                                        </b>
                                        <form action="?act=taikhoan&xuli=update" method="post">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="cart-sub-total">
                                                            <div class="cart-sub-total">
                                                                <input type="password" class="form-control" placeholder="Mật khẩu hiện tại .. " name="MatKhau" minlength="6" required />
                                                                <input type="password" class="form-control" placeholder="Mật khẩu mới .. " name="MatKhauMoi" />
                                                                <input type="password" class="form-control" placeholder="Xác nhận lại mật khẩu .." name="MatKhauXN" />
                                                            </div>

                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead><!-- /thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="cart-checkout-btn pull-right">
                                                            <button for="form1" type="submit_pw" class="btn btn-primary checkout-btn">Đổi mật khẩu</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody><!-- /tbody -->
                                        </form>
                                    </table><!-- /table -->
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-02  -->

                    </div><!-- /.checkout-steps -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->

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