<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR : END ============================================== -->
            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" style="width: 100%; height: 300px;" src="public/images/banners/slide_2.jpg" alt=""> </div>
                                <div class="strip strip-text">
                                </div>
                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">THỊT BÒ - HEO - GÀ</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <?php if ($data_sanpham1 != NULL) { ?>
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php for ($i = 0; $i < count($data_sanpham1); $i++) { ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_sanpham1[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><?= $data_sanpham1[$i]['TenSP'] ?></a></h3>
                                                            <div class="product-price"> <span class="price"><?= number_format($data_sanpham1[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_sanpham1[$i]['DonGiaCu']) ?>đ </span></div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham1['MaSP'] ?>'" class="btn btn-primary cart-btn" type="button">CHỌN MUA</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham1[$i]['MaSP'] ?>'" type="button">CHỌN MUA</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        <?php } ?>
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        <?php } ?>
                    </div>
                    <div style="margin-left: 45%;" class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left"><a href="?act=shop&sp=1">Xem tất cả</a></h3>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">HẢI SẢN TƯƠI</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <?php if ($data_sanpham2 != NULL) { ?>
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php for ($i = 0; $i < count($data_sanpham2); $i++) { ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_sanpham2[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><?= $data_sanpham2[$i]['TenSP'] ?></a></h3>
                                                            <div class="product-price"> <span class="price"><?= number_format($data_sanpham2[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_sanpham2[$i]['DonGiaCu']) ?>đ </span></div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary cart-btn" type="button">CHỌN MUA</button>
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham2[$i]['MaSP'] ?>'" type="button">CHỌN MUA</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        <?php } ?>
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        <?php } ?>
                    </div>
                    <div style="margin-left: 45%;" class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left"><a href="?act=shop&sp=2">Xem tất cả</a></h3>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">RAU CỦ TƯƠI</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <?php if ($data_sanpham3 != NULL) { ?>
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php for ($i = 0; $i < count($data_sanpham3); $i++) { ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_sanpham3[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>"><?= $data_sanpham3[$i]['TenSP'] ?></a></h3>
                                                            <div class="product-price"> <span class="price"><?= number_format($data_sanpham3[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_sanpham3[$i]['DonGiaCu']) ?>đ </span></div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham3['MaSP'] ?>'" class="btn btn-primary cart-btn" type="button">CHỌN MUA</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->
                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham3[$i]['MaSP'] ?>'" type="button">CHỌN MUA</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        <?php } ?>
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        <?php } ?>
                    </div>
                    <div style="margin-left: 45%;" class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left"><a href="?act=shop&sp=3">Xem tất cả</a></h3>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">DẦU ĂN - GIA VỊ</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <?php if ($data_sanpham4 != NULL) { ?>
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php for ($i = 0; $i < count($data_sanpham4); $i++) { ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?act=detail&id=<?= $data_sanpham4[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_sanpham4[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham4[$i]['MaSP'] ?>"><?= $data_sanpham4[$i]['TenSP'] ?></a></h3>
                                                            <div class="product-price"> <span class="price"><?= number_format($data_sanpham4[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_sanpham4[$i]['DonGiaCu']) ?>đ </span></div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham4['MaSP'] ?>'" class="btn btn-primary cart-btn" type="button">CHỌN MUA</button>
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham4[$i]['MaSP'] ?>'" type="button">CHỌN MUA</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        <?php } ?>
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        <?php } ?>
                    </div>
                    <div style="margin-left: 45%;" class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left"><a href="?act=shop&sp=4">Xem tất cả</a></h3>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Đồ đông lạnh</h3>
                    </div>

                    <div class="tab-content outer-top-xs">
                        <?php if ($data_sanpham5 != NULL) { ?>
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        <?php for ($i = 0; $i < count($data_sanpham5); $i++) { ?>
                                            <div class="item item-carousel">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?act=detail&id=<?= $data_sanpham5[$i]['MaSP'] ?>"><img src="public\images\products\<?= $data_sanpham5[$i]['HinhAnh1'] ?>" alt=""></a> </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?act=detail&id=<?= $data_sanpham5[$i]['MaSP'] ?>"><?= $data_sanpham5[$i]['TenSP'] ?></a></h3>
                                                            <div class="product-price"> <span class="price"><?= number_format($data_sanpham5[$i]['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($data_sanpham5[$i]['DonGiaCu']) ?>đ </span></div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham5['MaSP'] ?>'" class="btn btn-primary cart-btn" type="button">CHỌN MUA</button>
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                            <!-- /.action -->
                                                        </div>
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <div class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" onclick="location.href='?act=cart&xuli=add&id=<?= $data_sanpham5[$i]['MaSP'] ?>'" type="button">CHỌN MUA</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.products -->
                                            </div>
                                            <!-- /.item -->
                                        <?php } ?>
                                    </div>
                                    <!-- /.home-owl-carousel -->
                                </div>
                                <!-- /.product-slider -->
                            </div>
                        <?php } ?>
                    </div>
                    <div style="margin-left: 45%;" class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left"><a href="?act=shop&sp=5">Xem tất cả</a></h3>
                    </div>
                    <!-- /.tab-content -->

                </div>
                <h3 class="section-title" style="text-align: center; "><a style="color: red;" href="?act=shop"> vào cửa hàng để xem nhiều hơn!</a></h3>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>