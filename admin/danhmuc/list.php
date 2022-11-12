

<section class="home">
            <div class="box-container">
            <h1 class="heading"> quản lý <span>danh mục</span></h1>
            <div class="box">
                   
                    <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên loại</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                             foreach ($listdanhmuc as $danhmuc) {
                                 extract($danhmuc);
                                 $suadm = "index.php?act=suadm&&id=".$id_danhmuc;
                                 $xoadm = "index.php?act=xoadm&&id=".$id_danhmuc;
                                echo ' <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id_danhmuc.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" class="btn btn-primary" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                                 </tr>  ';
                             }
                             
                        ?>
    
  </tbody>
</table>

                      <!-- <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php 
                             foreach ($listdanhmuc as $danhmuc) {
                                 extract($danhmuc);
                                 $suadm = "index.php?act=suadm&&id=".$id_danhmuc;
                                 $xoadm = "index.php?act=xoadm&&id=".$id_danhmuc;
                                echo ' <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id_danhmuc.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                 </tr>  ';
                             }
                             
                        ?>
                        
                      </table> -->
                    </div>
                    <div class="mbcontent">
                        <input type="button" value="Chọn tất cả" class="btn btn-secondary">
                        <input type="button" value="Bỏ chọn tất cả" class="btn btn-dark">
                        <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
                       <a href="index.php?act=addlh"> <input type="button" value="Nhập thêm" class="btn btn-info"> </a>
                    </div>
            
                            </div>
                            </section>