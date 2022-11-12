<!-- 
<div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                      

                             <div class="row mbcontent">
                                <h1>Xin chào</h1>
                            
                            </div>
                           
                              <div class="row mbcontent">
                                <li>
                                       <a href="index.php?act=thoat">Đăng xuất</a>
                            
                               </li>
                               <li>
                                       <a href="#">Quên mật khẩu</a>
                            
                               </li>
                                <li>
                                         <a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a>
                                </li>
                              
                                <li>
                                       <a href="admin/index.php">Đăng nhập Admin</a>
                            
                               </li>
                        
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mbcontent">
                                <label for="">Tên đăng nhập</label>
                              <input type="text" name="user">
                            </div>
                            <div class="row mbcontent">
                                <label for="">Mật khẩu</label>
                              <input type="password" name="pass">
                            </div>
                            <div class="row mbcontent">
                                <input type="checkbox">Ghi nhớ tài khoản?
                            </div>
                              <div class="row mbcontent">
                                <input type="submit" name="btn" value="Đăng nhập">
                              </div>
                              
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                            
                          </li>
                          <li>
                            <a href="index.php?act=dangky">Đăng kí thành viên</a>
                          </li>
                         
                    </div>
                  </div>
                  <div class="row mb">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menudoc">
                      <ul>
                        <?php 
                                foreach ($dsdm as $dm) {
                                  extract($dm);
                                  $linkdm = "index.php?act=sanpham&iddm=".$id_danhmuc;
                                  echo '
                                  <li>
                                  <a href="'.$linkdm.'">'.$name.'</a>
                                </li>
                                  ';
                                }
                             
                        ?>
                        <!-- <li>
                          <a href="#">Điện thoại</a>
                        </li>
                        <li>
                          <a href="#">Laptop</a>
                        </li>
                        <li>
                          <a href="#">Phụ kiện điện thoại,laptop</a>
                        </li>
                        <li>
                          <a href="#">Thiết bị công nghệ</a>
                        </li>
                        <li>
                          <a href="#">Tai nghe</a>
                        </li>
                        <li>
                          <a href="#">Balo</a>
                        </li> -->
                        
                      </ul>
                    </div>
                    <div class="boxfooter searchbox">
                      <form action="" method="post">
                        <input type="text" name="kyw">
                        <input type="submit" value="Search" name="Searchsp">
                      </form>
                    </div>
                  </div>
                  <div class="row mb">
                    <div class="boxtitle">Top 5 sản phẩm yêu thích</div>
                    <div class="boxcontent row">
                      <?php
                            foreach ($dssptop5 as $sp) {
                              extract($sp);
                              $img = "upload/".$img;
                              $linksp = "index.php?act=sanphamct&idsp=".$id_sanpham;
                              echo '
                              <div class="row mbcontent top10">
                              <img src="'.$img.'" alt="">
                              <a href="'.$linksp.'">'.$name.'</a>
                            </div> 
                              ';
                            }
                      ?>
                      <!-- <div class="row mbcontent top10">
                        <img src="./images/apple-12.png" alt="">
                        <a href="#">Iphone 13 Pro</a>
                      </div>
                      <div class="row mbcontent top10">
                        <img src="./images/apple-9.png" alt="">
                        <a href="#">Iphone XS MAX</a>
                      </div>
                      <div class="row mbcontent top10">
                        <img src="./images/apple-11.png" alt="">
                        <a href="#">Iphone 12 Pro</a>
                      </div>
                      <div class="row mbcontent top10">
                        <img src="./images/apple-8.png" alt="">
                        <a href="#">Iphone 11 Pro</a>
                      </div>
                      <div class="row mbcontent top10">
                        <img src="./images/apple-7.png" alt="">
                        <a href="#">Iphone 8 Pro</a>
                      </div> -->
                    </div>
                  </div> -->