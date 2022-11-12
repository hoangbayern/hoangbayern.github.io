<?php 
         if(is_array($suatk)){
            extract($suatk);
         }
?>


<section class="home">
      <div class="box-container">
      <h1 class="heading"> Cập nhập <span>tài khoản</span></h1>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post">
                    <!-- <div class="row mbcontent">
                        Id tài khoản: <br>
                        <input type="text" name="maloai" disabled>
                    </div> -->
                    <div class="box">
                        <span> Username: <br> </span>
                        <input type="text" name="user" class="txt" value="<?php if (isset($user)&&($user!="")) {
                            echo $user;
                        } ?>">
                    </div>
                    <div class="box">
                        <span> Password: <br> </span>
                        <input type="text" name="pass" class="txt" value="<?php if (isset($pass)&&($pass!="")) {
                            echo $pass;
                        } ?>">
                    </div>
                    <div class="box">
                        <span> Email: <br> </span>
                        <input type="text" name="email" class="txt" value="<?php if (isset($email)&&($email!="")) {
                            echo $email;
                        } ?>">
                    </div>
                    <div class="box">
                        <span> Địa chỉ: <br> </span>
                        <input type="text" name="address" class="txt" value="<?php if (isset($address)&&($address!="")) {
                            echo $address;
                        } ?>">
                    </div>
                    <div class="box">
                        <span>Phone: <br> </span>
                        <input type="text" name="tel" class="txt" value="<?php if (isset($tel)&&($tel!="")) {
                            echo $tel;
                        } ?>">
                    </div>
                    <div class="box">
                        <span> Cấp độ: <br> </span>
                        <input type="text" name="role" class="txt" value="<?=$role?>">
                    </div>
                    <div class="mbcontent">
                        <input type="hidden" name="id" value="<?php if (isset($id_user)&&($id_user>0)) {
                            echo $id_user;
                        } ?>">
                        <input type="submit" name="capnhap" value="Cập nhập" class="btn btn-success">
                        <input type="reset" value="Nhập lại" class="btn btn-secondary">
                       <a href="index.php?act=dskh"> <input type="button" value="Danh sách" class="btn btn-primary"> </a>
                    </div>
                    <?php
    
                    if(isset($thongbao)&&($thongbao!="")){
                     echo '<div class="alert alert-success">
                     <strong>Success!</strong>Cập nhập thành công.
                   </div>';
                    }
            
                    ?>
                </form>
            </div>
        </div>
                </div>
                </section>
</body>
</html>