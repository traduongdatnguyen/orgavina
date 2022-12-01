<?php
session_start();
if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) {
    $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
    $act = isset($_GET['act']) ? $_GET['act'] : "admin";
    switch ($mod) {
        case 'danhmuc':
            require_once('controllers/DanhmucController.php');
            $controller_obj = new DanhmucController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'banner':
            require_once('controllers/BannerController.php');
            $controller_obj = new BannerController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'nguoidung':
            require_once('controllers/NguoiDungController.php');
            $controller_obj = new NguoiDungController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'sanpham':
            require_once('controllers/SanphamController.php');
            $controller_obj = new SanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'khuyenmai':
            require_once('controllers/KhuyenmaiController.php');
            $controller_obj = new KhuyenmaiController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'loaisanpham':
            require_once('controllers/LoaisanphamController.php');
            $controller_obj = new LoaisanphamController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'detail':
                    $controller_obj->detail();
                    break;
                case 'add':
                    $controller_obj->add();
                    break;
                case 'store':
                    $controller_obj->store();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'edit':
                    $controller_obj->edit();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
        case 'hoadon':
            require_once('controllers/HoadonController.php');
            $controller_obj = new HoadonController();
            switch ($act) {
                case 'list':
                    $controller_obj->list();
                    break;
                case 'chitiet':
                    $controller_obj->chitiet();
                    break;
                case 'delete':
                    $controller_obj->delete();
                    break;
                case 'xetduyet':
                    $controller_obj->xetduyet();
                    break;
                default:
                    $controller_obj->list();
                    break;
            }
            break;
            case 'login':
                require_once('controllers/LoginController.php');
                $controller_obj = new LoginController();
                switch ($act) {
                    case 'admin':
                        $controller_obj->admin();
                        break;
                    default:
                        $controller_obj->admin();
                        break;
                }
                break;
        default:
            header('location: ?mod=login');
    }
} else {
    if (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) {
        $mod = isset($_GET['mod']) ? $_GET['mod'] : "login";
        $act = isset($_GET['act']) ? $_GET['act'] : "admin";
        switch ($mod) {
            case 'loaisanpham':
                require_once('controllers/LoaisanphamController.php');
                $controller_obj = new LoaisanphamController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'danhmuc':
                require_once('controllers/DanhmucController.php');
                $controller_obj = new DanhmucController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'sanpham':
                require_once('controllers/SanphamController.php');
                $controller_obj = new SanphamController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            case 'khuyenmai':
                require_once('controllers/KhuyenmaiController.php');
                $controller_obj = new KhuyenmaiController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'detail':
                        $controller_obj->detail();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
                case 'login':
                    require_once('controllers/LoginController.php');
                    $controller_obj = new LoginController();
                    switch ($act) {
                        case 'admin':
                            $controller_obj->admin();
                            break;
                        default:
                            $controller_obj->admin();
                            break;
                    }
                    break;
            case 'hoadon':
                require_once('controllers/HoadonController.php');
                $controller_obj = new HoadonController();
                switch ($act) {
                    case 'list':
                        $controller_obj->list();
                        break;
                    case 'chitiet':
                        $controller_obj->chitiet();
                        break;
                    case 'delete':
                        $controller_obj->delete();
                        break;
                    case 'xetduyet':
                        $controller_obj->xetduyet();
                        break;
                    default:
                        $controller_obj->list();
                        break;
                }
                break;
            default:
            header('location: ?mod=login');
        }
    } else {
        header('location: ../?act=taikhoan');
    }
}
