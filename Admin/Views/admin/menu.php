 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->

   <!-- Nav Item - Pages Collapse Menu -->
   <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
     <li class="nav-item">
       <a class="nav-link" href="?mod=home">

         <span>Trang chủ</span></a>
     </li>
   <?php } ?>
   <li class="nav-item">
     <a class="nav-link" href="?mod=danhmuc">

       <span>Quản lý Danh Mục</span></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="?mod=loaisanpham">

       <span>Quản lý danh mục sản phẩm</span></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="?mod=sanpham">

       <span>Quản lý Sản Phẩm</span></a>
   </li>
   <!-- Nav Item - Charts -->
   <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
     <li class="nav-item">
       <a class="nav-link" href="?mod=nguoidung">

         <span>Quản lý Tài khoản</span></a>
     </li>
   <?php } ?>
   <!-- Nav Item - Tables -->

   <li class="nav-item">
     <a class="nav-link" href="?mod=hoadon">

       <span>Xét duyệt hóa đơn</span></a>
   </li>





   <li class="nav-item">
     <a class="nav-link" href="?mod=khuyenmai">

       <span>Quản lý khuyến mãi</span></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="../?act=home">

       <span>Trở về ORGAVINA</span></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="../?act=taikhoan&xuli=dangxuat">

       <span>Đăng xuất</span></a>
   </li>
   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
     <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

 </ul>
 <!-- End of Sidebar -->