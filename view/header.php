
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./anh-icon.png" type="image/x-icon">
    <title>Web Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>
<body>
    <!-- header starts -->
    <header class="header">
        <a href="#" class="logo">
            <i class="fas fa-shopping-basket"></i>Groco
        </a>
        <nav class="navbar">
            <a href="index.php">Trang chủ</a>
            <a href="index.php?act=product">Sản Phẩm</a>
            <a href="index.php?act=gioithieu">Giới thiệu</a>
            <a href="index.php?act=lienhe">Liên hệ</a>
            <a href="index.php?act=review">Review</a>
            <a href="index.php?act=blogs">Blogs</a>
        </nav>
        <div class="icons">
           
            <?php
                     if (isset($_SESSION['user'])) {
                      extract($_SESSION['user']);
                      $img = "upload/".$img_user;
                      ?>
                    <span style="font-size: 1.5rem;" class="navbar">Xin chào <?=$user ?></span>
                    <div class="fas fa-bars" id="menu-btn"></div>
                    <div class="fas fa-search" id="search-btn"></div>
                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                    <p class="img-user" id="login-btn">
                   <?php echo '<img src="'.$img.'" alt="">'; ?>
                    </p>
                    <!-- <div class="form-user">
                          <li>
                                  <a class="nav-link" href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a>
                          </li> 
                          <li>
                                  <a class="nav-link" href="index.php?act=thoat">Thoát</a>
                         </li>  -->
                     </div>
                   <?php 
                     }else{
                   ?>
              <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
           <a href="index.php?act=dangnhap" class="fas fa-user" id ="user-btn"></a>
            <?php } ?>
        </div>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
        <div class="shopping-cart">
            <div class="box">
                <img src="./image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
                <i class="fas fa-trash clear"></i>
            </div>
            <div class="box">
                <img src="./image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
                <i class="fas fa-trash clear"></i>
            </div>
            <div class="box">
                <img src="./image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
                <i class="fas fa-trash clear"></i>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="#" class="btn">checkout</a>
        </div>
        <div class="form-user">
                          <li>
                                  <a class="nav-link" href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a>
                          </li> 
                          <li>
                                  <a class="nav-link" href="index.php?act=thoat">Thoát</a>
                         </li> 
                     </div>
    </header>

    <script src="./js/script.js"></script>




       