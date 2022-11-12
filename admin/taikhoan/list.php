<section class="home">
          <div class="box-container">
          <h1 class="heading"> danh sách <span>tài khoản</span></h1>
            <div class="row formcontent">
                   
                    <div class="row mbcontent frmdanhsach">
                      <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Id tài khoản</th>
                            <th scope="col">Ussername</th>
                            <th scope="col">Password</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Cấp độ</th>
                            <th scope="col">Thao tác</th>
                        </tr>   
                        </thead>

                        <tbody>
                        <?php 
                             foreach ($listtaikhoan as $taikhoan) {
                                 extract($taikhoan);
                                 $suatk = "index.php?act=suatk&&id=".$id_user;
                                 $xoatk = "index.php?act=xoatk&&id=".$id_user;
                                echo ' <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id_user.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suatk.'"><input type="button" value="Sửa" class="btn btn-primary"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa" class="btn btn-danger"></a></td>
                                 </tr>  ';
                             }
                             
                        ?>
                        </tbody>
                
                      </table>
                    </div>
                    <div class="mbcontent">
                        <input type="button" value="Chọn tất cả" class="btn btn-success">
                        <input type="button" value="Bỏ chọn tất cả" class="btn btn-dark">
                        <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
                       <a href="index.php?act=addlh"> <input type="button" value="Nhập thêm" class="btn btn-primary"> </a>
                    </div>
            </div>
                            </div>
                            </section>