<header class="header-style-1">
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="."><span></span> ORGAVINA</a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area search-box">
            <form action="?act=shop" method="post" class="search-box">
              <div class="control-group search-box">
                <input type="search" class="search-field" autocomplete="off" placeholder="Tìm kiếm sản phẩm" name="keyword">
                <button class="search-button" type="submit"></button>
              </div>
            </form>
            <div class="result"></div>
          </div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class="dropdown dropdown-cart">
            <?php
            $soluong = 0;
            $thanhtien = 0;
            if (isset($_SESSION['sanpham'])) {
              foreach ($_SESSION['sanpham'] as $value) {
                $soluong += 1;
                $thanhtien += $value['ThanhTien'];
              }
            }
            ?>
            <a href="?act=cart" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
              <div class="items-cart-inner">
                <h5>Giỏ hàng của bạn</h5>
                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                <div class="basket-item-count"><span class="count"><?= $soluong ?></span></div>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <center>
                  <h3>Giỏ hàng</h3>
                </center>
                <?php if (isset($_SESSION['sanpham'])) {
                  foreach ($_SESSION['sanpham'] as $value) { ?>
                    <div class="cart-item product-summary">
                      <div class="row">
                        <div class="col-xs-4">
                          <div class="image"> <a href="?act=cart"><img src="public\images\products/<?= $value['HinhAnh1'] ?>" alt=""></a> </div>
                        </div>
                        <div class="col-xs-7">
                          <h3 class="name"><a href="?act=cart"><?= $value['TenSP'] ?></a></h3>
                          <div class="price"><?= number_format($value['ThanhTien']) ?> VNĐ</div>
                        </div>
                        <div class="col-xs-1 action"> <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="fa fa-trash"></i></a> </div>
                      </div>
                    </div>
                <?php }
                } ?>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Tổng tiền :</span><span class='price'><?= number_format($thanhtien) ?></span> </div>
                  <div class="clearfix"></div>
                  <a href="giohang" class="btn btn-upper btn-primary btn-block m-t-20">Thanh toán</a>
                </div>
                <!-- /.cart-total-->

              </li>
            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
        </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="?act=home">Trang chủ</a> </li>
                <li class="dropdown"> <a href="thiheo-bo-ga" class="dropdown-toggle">Thịt bò - heo - gà</a>
                </li>
                <li class="dropdown"> <a href="haisantuoi" class="dropdown-toggle">HẢI SẢN TƯƠI</a>
                </li>
                <li class="dropdown"> <a href="raucuqua" class="dropdown-toggle">RAU CỦ QUẢ</a>
                </li>
                <li class="dropdown"> <a href="dauan-giavi" class="dropdown-toggle">DẦU ĂN - GIA VỊ</a>
                </li>
                <?php if (isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])) { ?>
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Xin Chào <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a id="sdsd_menu" href="admin/">Trang quản lý</a></li>
                                <li><a id="sdsd_menu" href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                <?php } elseif (isset($_SESSION['isLogin'])) { ?>
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Xin Chào <?= $_SESSION['login']['Ten'] ?></a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a id="sdsd_menu" href="?act=taikhoan&xuli=account">Tài khoản cá nhân</a></li>
                                <li><a id="sdsd_menu" href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                <?php } else { ?>
                  <li class="dropdown  navbar-right special-menu"> <a href="?act=taikhoan">Đăng nhập</a> </li>
                <?php } ?>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>