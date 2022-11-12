

<section class="home">
   <div class="box-container">
           <h1 class="heading"> Quản lý <span>Sản phẩm</span></h1>
            <div class="box">
            <form action="#" method="post" class="mb">
                        <input type="text" name="kyw" class="txt">
                        <select name="iddm">
                         <span><option value="0">Tất cả</option> </span>
                            <?php 
                                 foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '
                                    <option value="'.$id_danhmuc.'">'.$name.'</option>
                                    ';
                                 }
                            ?>
                        </select>
                        <input type="submit" value="SEARCH" name="listok"  class="btn btn-dark">
                      </form>
            
                              
                                </div>
                                <div>
                                  

                    <div class="box">

                    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Lượt xem</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                             foreach ($listsanpham as $sanpham) {
                              extract($sanpham);
                             $suasp = "index.php?act=suasp&&id=".$id_sanpham;
                              $xoasp = "index.php?act=xoasp&&id=".$id_sanpham;
                              $hinhpath = "../upload/".$img;
                              if(is_file($hinhpath)){
                                $img = "<img src='".$hinhpath."' height='80px'>";
                              }
                              else{
                                $img = "no photo";
                              }
                             echo ' <tr>
                             <td><input type="checkbox"></td>
                             <td>'.$id_sanpham.'</td>
                             <td>'.$name.'</td>
                             <td>'.$img.'</td>
                             <td>'.$price.'</td>
                             <td>'.$mota.'</td>
                             <td>'.$luotxem.'</td>
                             <td><a href="'.$suasp.'"><input type="button" value="Sửa" class="btn btn-primary"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa" class="btn btn-danger"></a></td>
                              </tr>  ';
                          }
                             
                        ?>
  </tbody>
</table>
                    
                      <!-- <table>
                        <tr>
                            <th></th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th></th>
                        </tr>
                        <?php 
                             foreach ($listsanpham as $sanpham) {
                              extract($sanpham);
                             $suasp = "index.php?act=suasp&&id=".$id_sanpham;
                              $xoasp = "index.php?act=xoasp&&id=".$id_sanpham;
                              $hinhpath = "../upload/".$img;
                              if(is_file($hinhpath)){
                                $img = "<img src='".$hinhpath."' height='80px'>";
                              }
                              else{
                                $img = "no photo";
                              }
                             echo ' <tr>
                             <td><input type="checkbox"></td>
                             <td>'.$id_sanpham.'</td>
                             <td>'.$name.'</td>
                             <td>'.$img.'</td>
                             <td>'.$price.'</td>
                             <td>'.$mota.'</td>
                             <td>'.$luotxem.'</td>
                             <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                              </tr>  ';
                          }
                             
                        ?>
                        
                      </table> -->
                    </div>
                    <div class="mbcontent">
                        <input type="button" value="Chọn tất cả" class="btn btn-success">
                        <input type="button" value="Bỏ chọn tất cả" class="btn btn-dark">
                        <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
                       <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm" class="btn btn-primary"> </a>
                    </div>
            </div>
                        </div>
                        </section>