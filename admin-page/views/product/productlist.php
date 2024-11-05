<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/admin/admin-page/public/style.css">
    <title>Admin - danh sách sản phẩm(product)</title>
</head>

<body>
    <section id="sidebar">
        <a href="/admin/index.php" class="brand">
            <i class='bx bxs-user'></i>
            <span class="text">Admin Unique Style</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Trang Chủ</span>
                </a>
            </li>
            <li>
                <a href="/client">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Cửa hàng của tôi</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Thống kê</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Tin nhắn(message)</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-list-ul'></i>
                    <span class="text">Danh sách sản phẩm</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Cài đặt</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <section id="content">
        <nav>
            <i class='bx bx-menu'></i>
            <a href="/admin/admin-page/views/category/categorylist.php" class="nav-link">Danh mục (category)</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Tìm kiếm...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">10</span>
            </a>
            <a href="#" class="profile">
                <img src="/admin/admin-page/img/logo.png">
            </a>
        </nav>
        <script src="/admin/admin-page/public/script.js"></script>
        <!-- main -->
         <!-- table -->
          <div class="table--wrapper">
            <h3 class="title">Danh sách sản phẩm</h3>
            <a href="/admin/admin-page/views/product/productadd.php"><button class="add">Thêm sản phẩm</button></a>
            <div class="table-container">
                <table style="text-align: left;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Màu sắc</th>
                            <th>Size</th>
                            <th>Mô tả</th>
                            <th>Danh mục</th>
                            <th>Tính năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>name</td>
                            <td>
                                <img src="" alt="er img" width="50" height="50"/>
                            </td>
                            <td>123</td>
                            <td>color</td>
                            <td>XL</td>
                            <td>desc</td>
                            <td>cate</td>
                            <td>
                                <a href="/admin/admin-page/views/product/productedit.php"><button class="edit">Sửa</button></a> || 
                                <button class="delete">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
        <!-- footer -->
        <footer class="footer">
            <div class="footer-content">
                <p>© 2024 Admin Unique Style. All Rights Reserved.</p>
            </div>
        </footer>