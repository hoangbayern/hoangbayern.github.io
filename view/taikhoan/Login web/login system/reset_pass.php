

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="view/taikhoan/Login web/login system/css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="index.php?act=reset_pass" method="post">
      <h3>Reset Password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p class="btn-success">Đổi mật khẩu mới tại đây.</p>
      <input type="password" name="newpass" value="<?php if(isset($_POST['newpass'])) echo $_POST['newpass'] ?>" required placeholder="Nhập mật khẩu mới">
      <input type="password" name="repass" value="<?php if(isset($_POST['repass'])) echo $_POST['repass'] ?>" required placeholder="Xác nhận mật khẩu">
      <input type="submit" name="submit" value="Gửi" class="form-btn">
      <p>Don't have an account? <a href="index.php?act=dangky">register now</a></p>
      <p>Already have an account? <a href="index.php?act=dangnhap">Login now</a></p>
   </form>
                     <?php 
                               if(isset($thongbao)&&($thongbao!="")){
                                echo "<script type='text/javascript'>alert('$thongbao');</script>";
                               }
                        ?>
</div>

</body>
</html>