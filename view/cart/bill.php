


<div class="row mb">
         <div class="boxtrai mr">
         
            <div class="row mb">
                    <div class="boxtitle">Thông tin đặt hàng</div>
                    <div class="boxcontent row formtaikhoan">
                        <form action="index.php?act=billconfirm" method="post">
                            <?php 
                                   if (isset($_SESSION['user'])) {
                                        $user = $_SESSION['user']['user'];
                                        $address = $_SESSION['user']['address'];
                                        $email = $_SESSION['user']['email'];
                                        $tel = $_SESSION['user']['tel'];
                                   }
                                   else{
                                        $user = "";
                                        $address = "";
                                        $email = "";
                                        $tel = "";
                                   }
                            
                            ?>
                            <div class="row mbcontent">
                            <label for="">Người đặt hàng:</label>
                            <input type="text" name="user" value="<?=$user?>">
                            </div>
                            <div class="row mbcontent">
                                <label for="">Địa chỉ:</label>
                            <input type="text" name="address" value="<?=$address?>">
                            </div>
                            <div class="row mbcontent">
                                <label for="">Email:</label>
                            <input type="text" name="email" value="<?=$email?>">
                            </div>
                            <div class="row mbcontent">
                                <label for="">Điện thoại:</label>
                            <input type="text" name="tel" value="<?=$tel?>">
                            </div>
                            
                            
                            
                        </form>
                      
                     </div>
            </div>
           
            <div class="row mb">
                    <div class="boxtitle">Phương thức thanh toán</div>
                    <div class="row boxcontent">
                        <table>
                            <tr>
                                <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                                <td><input type="radio" name="pttt">Thanh toán online</td>
                            </tr>
                        </table>
                      
                     </div>
            </div>
            
            <div class="row mb">
                    <div class="boxtitle">Thông tin giỏ hàng</div>
            <div class="row formcontent boxcontent">
            
                    <div class="row mbcontent frmdanhsach">
                    
                      <table>
                        <tr>
                            <th></th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                        <?php 
                             $TongTien = 0;
                             $i=0;
                             foreach ($_SESSION['mycart'] as $cart) {
                              
                             
                            $hinh = "upload/".$cart[2];
                              $thanhtien = $cart[3] * $cart[4];
                              $TongTien += $thanhtien;
                             echo ' <tr>
                             <td></td>
                             <td><img src="'.$hinh.'" height="80px"></td>
                             <td>'.$cart[1].'</td>
                             <td>'.$cart[3].'</td>
                             <td>'.$cart[4].'</td>
                             <td>'.$thanhtien.'</td>
                             <td></td>
                              </tr>  ';
                              $i+=1;
                          }
                          echo '
                                <tr>
                                     <td></td>
                                     <td colspan="4">Tổng đơn hàng </td>
                                     <td>'.$TongTien.' VND</td>
                                     <td></td>
                                
                                </tr>
                          ';
                             
                        ?>
                        
                      </table>
                    </div>
                    <div class="row mbcontent">
                    <a href="index.php?act=bill"> <input type="button" value="Đồng ý đặt hàng"></a>
                        
                      
                    </div>
            </div>
                        </div>
            </div>      
                         
         <div class="boxphai" >
               <?php  include "view/boxright.php"; ?>
         </div>
</div>