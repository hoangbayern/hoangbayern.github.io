

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

   <form action="index.php?act=xacnhan" method="post">
      <h3>Forgot Password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p class="btn-success">Hãy nhập mã xác nhận mà chúng tôi đã gửi cho bạn về Email</p>
      <input type="text" name="text" required placeholder="Nhập mã xác nhận">
      <input type="submit" name="submit" value="Gửi" class="form-btn">
      <p>Don't have an account? <a href="index.php?act=dangky">Register now</a></p>
      <p>Do you already have an account? <a href="index.php?act=dangnhap">Login now</a></p>
   </form>

</div>

</body>
</html>