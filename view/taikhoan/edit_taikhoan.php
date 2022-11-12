<section class="home">
       <div class="box-container">
        
       <h1 class="heading"> Cập nhập <span>tài khoản</span></h1>
                    <div>
                        <?php
                              if(isset($_SESSION['user'])&&is_array($_SESSION['user'])){
                                extract($_SESSION['user']);
                              }
                              $hinhpath = "upload/".$img_user;
                              if(is_file($hinhpath)){
                                    $img = "<img src='".$hinhpath."' height='80px'>";
                                  }
                                  else{
                                    $img = "no photo";
                                      }
                        ?>
                        <form action="index.php?act=edit_taikhoan" method="post"  enctype="multipart/form-data">
                            <div class="box">
                            <span> <label for="">Email:</label> </span>
                            <input type="email" name="email" class="txt" value="<?=$email?>">
                            </div>
                            <div class="box">
                               <span> <label for="">Tài khoản:</label> </span>
                            <input type="text" name="user" class="txt" value="<?=$user?>">
                            </div>
                            <div class="box">
                              <span> <label for="">Mật khẩu:</label> </span>
                            <input type="password" name="pass" class="txt" value="<?=$pass?>">
                            </div>
                            <div class="box">
                               <span> <label for="">Địa chỉ:</label> </span>
                            <input type="text" name="address" class="txt" value="<?=$address?>">
                            </div>
                            <div class="box">
                               <span> <label for="">Số điện thoại:</label> </span>
                            <input type="text" name="tel" class="txt" value="<?=$tel?>">
                            </div>
                            <div class="box">
                                   <span><label for="">Img user:</label></span> 
                                   <input type="file" name="imguser" class="txt">
                                   <span> <?=$img?> </span>
                           </div>
                            <input type="hidden" name="id" value="<?=$id_user?>">
                            <input type="submit" value="Cập nhập" name="capnhap" class="btn btn-primary">
                            
                            <input type="reset" value="Nhập lại" class="btn btn-secondary">
                            
                            
                        </form>
                        <?php 
                               if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                               }
                        ?>
           
           
            </div>       
        
</div>
                            </div>
                            </section>