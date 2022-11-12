

<div class="row mb">
         <div class="boxtrai mr">

<div class="row">
            <div class="row headeradmin"><h1>Giỏ hàng</h1></div>
            
            <div class="row formcontent">
            
                    <div class="row mbcontent frmdanhsach">
                    
                      <table>
                        <tr>
                            <th></th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                            <th></th>
                        </tr>
                        <?php 
                             $TongTien = 0;
                             $i=0;
                             foreach ($_SESSION['mycart'] as $cart) {
                              
                             
                            $hinh = "upload/".$cart[2];
                              $thanhtien = $cart[3] * $cart[4];
                              $TongTien += $thanhtien;
                              $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                             echo ' <tr>
                             <td></td>
                             <td><img src="'.$hinh.'" height="80px"></td>
                             <td>'.$cart[1].'</td>
                             <td>'.$cart[3].'</td>
                             <td>'.$cart[4].'</td>
                             <td>'.$thanhtien.'</td>
                             <td>'.$xoasp.'</td>
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
                       <a href="index.php?act=xoacart"><input type="button" value="Xóa giỏ hàng"></a> 
                        
                      
                    </div>
            </div>
           
        </div>
                        </div>
        <div class="boxphai" >
               <?php  include "view/boxright.php"; ?>
         </div>
                        </div>