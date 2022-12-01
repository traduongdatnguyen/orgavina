<?php
require_once("Models/home.php");
class HomeController
{
    var $home_model;
    public function __construct()
    {
       $this->home_model = new Home();
    }
    
    function list()
    {
        $data_danhmuc = $this->home_model->danhmuc();

        $data_chitietDM = array();

        $data_limit1 = $this->home_model->limit(0,10);

        $data_sanpham1 = $this->home_model->sanpham_danhmuc(0,8,1);
        $data_sanpham2 = $this->home_model->sanpham_danhmuc(0,8,2);
        $data_sanpham3 = $this->home_model->sanpham_danhmuc(0,8,3);
        $data_sanpham4 = $this->home_model->sanpham_danhmuc(0,8,4);
        $data_sanpham5= $this->home_model->sanpham_danhmuc(0,8,5);
        $data_sanpham6 = $this->home_model->sanpham_danhmuc(0,8,6);
        
        $thuonghieu = $this->home_model->thuonghieu();
        require_once('Views/index.php');
    }
}