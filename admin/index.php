<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/TaiKhoanController.php';

// Require toàn bộ file Models
require_once 'models/TaiKhoan.php';


// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                 => (new DashboardController())->index(),

    'tai-khoans'         => (new TaiKhoanController())->index(),
    'form-them-quan-tri' => (new TaiKhoanController())->formAddQuanTri(),
    'them-quan-tri' =>(new TaiKhoanController())->postAddQuanTri(),
    'xoa-tai-khoan-quan-tri' =>(new TaiKhoanController())->deleteQuanTri(),
    'form-sua-quan-tri' =>(new TaiKhoanController())->formEditQuanTri(),
    'sua-quan-tri' =>(new TaiKhoanController())->postEditQuanTri(),

    'tai-khoan-khach-hang'=>(new TaiKhoanController())->danhsachkhachhang(),
    'form-them-khach-hang' => (new TaiKhoanController())->formAddkhachhang(),
    'xoa-tai-khoan-khach-hang' =>(new TaiKhoanController())->deleteKhachHang(),
    'form-sua-khach-hang' =>(new TaiKhoanController())->formEditKhachHang(),
    'sua-khach-hang' =>(new TaiKhoanController())->postEditKhachHang(),

    'khuyen-mais' =>(new TaiKhoanController())->danhsachma(),
    'form-them-khuyen-mai' => (new TaiKhoanController())->formAddkhuyenmai(),
    'them-khuyen-mai' => (new TaiKhoanController())->Addkhuyenmai(),
    'xoa-khuyen-mai' =>(new TaiKhoanController())->deletekhuyenmai(),
    'form-sua-khuyen-mai' =>(new TaiKhoanController())->formEditKhuyenmai(),
    'sua-khuyen-mai' =>(new TaiKhoanController())->postEditKhuyenmai(),


};