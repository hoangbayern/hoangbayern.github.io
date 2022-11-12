

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

   <form action="index.php?act=forgot" method="post">
      <h3>Forgot Password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="submit" name="forgot" value="Send mail" class="form-btn">
      <p>Don't have an account? <a href="index.php?act=dangky">Register now</a></p>
      <p>Do you already have an account? <a href="index.php?act=dangnhap">Login now</a></p>
   </form>

</div>

</body>
</html>