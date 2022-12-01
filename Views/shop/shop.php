<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href=".">Trang chủ</a></li>
        <li class='active'>Cửa hàng</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
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
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                  <?php
                  if (isset($data) and $data != NULL) { ?>
                    <?php foreach ($data as  $value) {
                    ?>
                      <div class="col-sm-6 col-md-4 wow fadeInUp">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image"> <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="public\images\products\<?= $value['HinhAnh1'] ?>" alt=""></a> </div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name"><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price"> <span class="price"><?= number_format($value['DonGia']) ?>đ</span> <span class="price-before-discount"><?= number_format($value['DonGiaCu']) ?>đ</span> </div>
                              <!-- /.product-price -->

                            </div>
                          </div>
                          <!-- /.product -->

                        </div>
                        <!-- /.products -->
                        <li class="add-cart-button btn-group">
                          <button onclick="location.href='?act=detail&id=<?= $value['MaSP'] ?>'" class="btn btn-primary cart-btn" type="button">CHI TIẾT</button>
                        </li>
                      </div>

                    <?php } ?>
                  <?php
                  } else {
                    echo "Không có dữ liệu";
                  } ?>
                  <!-- /.item -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="active"><a href="?act=shop&trang=1">1</a></li>
                  <?php if ($data_tong >= 9  and isset($test)) {
                    for ($i = 2; $i <= $data_tong / 9; $i++) { ?>
                      <li class="prev"><a href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
                  <?php }
                  } ?>

                </ul>
                <!-- /.list-inline -->
              </div>
              <!-- /.pagination-container -->
            </div>
            <!-- /.text-right -->

          </div>
          <!-- /.filters-container -->

        </div>
        <!-- /.search-result-container -->

      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.container -->

</div>