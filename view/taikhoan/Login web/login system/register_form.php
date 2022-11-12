

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="view/taikhoan/Login web/login system/css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="index.php?act=dangky" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your user">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="dangky" value="register now" class="form-btn">
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