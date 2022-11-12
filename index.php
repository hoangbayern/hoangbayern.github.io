<?php
    //  ob_start();
     session_start();
      include "PDO/pdo.php";
      include "PDO/sanpham.php";
      include "PDO/danhmuc.php";
      include "PDO/taikhoan.php";
      include "view/header.php";
      include "mail/PHPMailer-master/index.php";

      $mail = new Mailer();
      
     

    // Kiểm tra có tồn tại Session giỏ hàng không
        if(!isset($_SESSION['mycart'])){
            $_SESSION['mycart']=[];
        }



       $spnew = list_sanpham_home();
       $dsdm = list_danhmuc();
       $dssptop5 = list_sanpham_top5(); 
       if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
             switch ($act) {
                case 'sanphamct':
                    if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                        $id = $_GET['idsp'];
                        $onesp = sua_sanpham($id);
                        extract($onesp);
                        $spcungloai = sanpham_cungloai($id,$id_danhmuc);
                        include "view/sanphamct.php";
                    }
                    else{
                        include "view/home.php";
                    }
                    break;
                case 'sanpham':

                    if (isset($_POST['kyw'])&&($_POST['kyw']!="")) {
                        $kyw = $_POST['kyw'];
                    }
                    else{
                        $kyw ="";
                    }
                    if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                        $iddm = $_GET['iddm'];
                    }
                    else{
                        $iddm = 0;
                    }
                        $tendm = loadone_tendanhmuc($iddm);
                        $dssp = list_sanpham($kyw,$iddm);
                        include "view/sptheodm.php";
                    break;
                case 'dangky':
                    if(isset($_POST['dangky'])){
                        $user = $_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        $cpass = $_POST['cpassword'];
                        if($pass != $cpass){
                            $error[] = 'Mật khẩu nhập lại không đúng!';
                        }
                        else{
                        insert_taikhoan($user,$pass,$email);
                        $thongbao = "Đăng Ký thành công!";
                        // header('location:index.php?act=dangnhap');
                        }
                    }
                    include "view/taikhoan/Login web/login system/register_form.php";
                    break;
                case 'dangnhap':
                    if(isset($_POST['submit'])&&($_POST['submit'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $checkuser =  check_user($email,$password);
                        if(is_array($checkuser)){
                            $_SESSION['user'] = $checkuser;
                            echo "<script> window.location.href='index.php';</script>";
                            // header('location:index.php');
                        }
                        else{
                            $error[] = 'incorrect email or password!';
                            // $thongbao = "Đăng nhập thất bại";
                        }
                        }
                        include "view/taikhoan/Login web/login system/login_form.php";
                        break;
                case 'edit_taikhoan':
                    if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                            $email = $_POST['email'];
                            $username = $_POST['user'];
                            $password = $_POST['pass'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            $id = $_POST['id'];
                            $filename = $_FILES['imguser']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["imguser"]["name"]);
                            if (move_uploaded_file($_FILES["imguser"]["tmp_name"], $target_file)) {
                                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                              } else {
                                // echo "Sorry, there was an error uploading your file.";
                              }
                            update_taikhoan($id,$email,$username,$password,$address,$tel,$filename);
                            $thongbao = "Cập nhập thành công";
                            $_SESSION['user'] = check_user($username,$password,$filename);
                            header('location:index.php?act=edit_taikhoan');
                            }
                            include "view/taikhoan/edit_taikhoan.php";
                            break;
                case 'thoat':
                        session_unset();
                        echo "<script> window.location.href='index.php';</script>";
                    break;
                case 'forgot':
                    if(isset($_POST['forgot'])&&($_POST['forgot'])){
                        $email = $_POST['email'];
                        $checkemail =  check_email($email);
                        
                         if(is_array($checkemail)){
                            // if(is_array($checkemail)){
                                
                            //     echo "<script> window.location.href='index.php?act=xacnhan';</script>";
                            // }
                            // else{
                            //     $error[] = 'incorrect email!';
                            // }
                            $code = substr(rand(0,999999),0,6);
                            // echo $code;
                            $tittle = "Quên mật khẩu";
                            $content = "Mã xác nhận của bạn là: <span style='color:green'>".$code."</span>";
                            $mail->sendMail($tittle,$content,$email);
                            $_SESSION['mail'] = $email;
                            $_SESSION['code'] = $code;
                            echo "<script> window.location.href='index.php?act=xacnhan';</script>";
                        }
                        else{
                            $error[] = 'incorrect email!';
                        }
                    }
                    include "view/taikhoan/Login web/login system/forgot_pass.php";        
                    break;
                case 'xacnhan':
                    if(isset($_POST['submit'])&&($_POST['submit'])){
                        if($_POST['text'] != $_SESSION['code']){
                            $error[] = 'Mã xác nhận không hợp lệ!';
                        }
                        else{
                            echo "<script> window.location.href='index.php?act=reset_pass';</script>";
                        }
                    }
                    include "view/taikhoan/Login web/login system/Verification.php";
                    break;
                case 'reset_pass':
                    if(isset($_POST['submit'])&&($_POST['submit'])){
                        $newpass = $_POST['newpass'];
                        $repass = $_POST['repass'];
                        if($newpass != $repass){
                            $error[] = 'Mật khẩu nhập lại không đúng!';
                        }
                        else{
                            $thongbao = "Đổi mật khẩu thành công!";
                            update_pass($newpass,$_SESSION['mail']);
                            // echo "<script> window.location.href='index.php?act=dangnhap';</script>";
                        }
                    }
                    include "view/taikhoan/Login web/login system/reset_pass.php";
                    break;
                case 'addtocart':
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                         $id = $_POST['id'];
                         $name = $_POST['name'];
                         $img = $_POST['img'];
                         $price = $_POST['price'];
                         $soluong = 1;
                         $thanhtien = $price * $soluong;
                         $spadd = [$id,$name,$img,$price,$soluong,$thanhtien];
                         array_push($_SESSION['mycart'],$spadd);
                    }
                    include "view/cart/viewcart.php";
                    break;
                case 'delcart':
                    if(isset($_GET['idcart'])){
                          array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    }
                    else{
                       $_SESSION['mycart']= [];
                    }
                    header('location:index.php?act=viewcart');
                    break;
                case 'xoacart':
                    unset($_SESSION['mycart']);
                    header('location:index.php?act=viewcart');
                    break;
                case 'viewcart':
                    include "view/cart/viewcart.php";
                    break;
                case 'product':
                    
                    include "view/web/shop.php";
                    break;
                case 'chitiet_product':
                    if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                        $id = $_GET['idsp'];
                        $onesp = sua_sanpham($id);
                        extract($onesp);
                        $spcungloai = sanpham_cungloai($id,$id_danhmuc);
                        include "view/web/single.php";
                    }
                    include "view/web/single.php";
                    break;
                case 'bill':
                    include "view/cart/bill.php";
                    break;
                case 'gioithieu':
                    include "view/gioithieu.php";
                    break;
                case 'lienhe':
                    include "view/lienhe.php";
                    break;
                case 'gopy':
                    include "view/gopy.php";
                    break;
                
                default:
                    include "view/home.php"; 
                    break;
             }
       }
       else{
        include "view/home.php";
       }


       
       include "view/footer.php";

      
?>