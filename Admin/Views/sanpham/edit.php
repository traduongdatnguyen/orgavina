<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=sanpham&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaSP" value="<?= $data['MaSP'] ?>">
        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="MaDM" class="form-control">
                <?php foreach ($data_dm as $row) { ?>
                    <option <?= ($row['MaDM'] == $data['MaDM']) ? 'selected' : '' ?> value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="MaLSP" class="form-control">
                <?php foreach ($data_lsp as $row) { ?>
                    <option <?= ($row['MaLSP'] == $data['MaLSP']) ? 'selected' : '' ?> value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenSP" value="<?= $data['TenSP'] ?>">
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="DonGia" value="<?= $data['DonGia'] ?>">
        </div>
        <div class="form-group">
            <label for="">Đơn giá cũ</label>
            <input type="text" class="form-control" id="" placeholder="" name="DonGiaCu" value="<?= $data['DonGiaCu'] ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="" name="SoLuong" value="<?= $data['SoLuong'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 1</label>
            <img src="../public/images/products/<?= $data['HinhAnh1'] ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1" value="<?= $data['HinhAnh1'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 2</label>
            <img src="../public/images/products/<?= $data['HinhAnh2'] ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2" value="<?= $data['HinhAnh2'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 3</label>
            <img src="../public/images/products/<?= $data['HinhAnh3'] ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3" value="<?= $data['HinhAnh3'] ?>">
        </div>
        <div class="form-group">
            <label for="cars">Mã khuyến mãi </label>
            <select id="" name="MaKM" class="form-control">
                <?php foreach ($data_km as $row) { ?>
                    <option <?= ($row['MaKM'] == $data['MaKM']) ? 'selected' : '' ?> value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Giảm giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="GiamGiaSP" value="<?= $data['GiamGiaSP'] ?>">
        </div>
        <div class="form-group">
            <label for="">Thông tin</label>
            <input type="text" class="form-control" id="" placeholder="" name="KieuDang" value="<?= $data['KieuDang'] ?>">
        </div>

        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote1" placeholder="" name="MoTa"><?= $data['MoTa'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <input <?= ($data['TrangThai'] == 1) ? 'checked' : '' ?> type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
        <script>
        $(document).ready(function() {
            $('#summernote1').summernote();
        });
    </script>