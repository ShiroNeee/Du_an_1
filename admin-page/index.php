<?php
session_start();

// Đây là file chạy chính, 
// là nơi ta require tất cả các file mà hệ thống sử dụng
require_once '../common/env.php'; // Khai báo các biến môi trường
require_once '../common/function.php'; // Khai báo các hàm dùng chung

// Kết nối cơ sở dữ liệu
$conn = connectDB();

require_once './router.php';
$router = new Router();
require_once '../controllers/AdminController.php';

// Tạo các đường dẫn để thực hiện điều hướng
$act = $_GET['act'] ?? '/';

$router->add('/', 'AdminController', 'index');

$router->dispatch($act);