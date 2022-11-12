

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<?php
      include "../PDO/pdo.php";
      include "../PDO/danhmuc.php";
      include "../PDO/sanpham.php";
      include "../PDO/taikhoan.php";
      include "header.php";
      
     if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            // Phần Loại hàng trong trang Admin
            case 'addlh':
                if(isset($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            // Phần danh sách trong Admin
            case 'listdanhmuc' :
                $listdanhmuc = list_danhmuc(); 
                include "danhmuc/list.php";
                break;
            // Phần xóa Loại hàng trong Admin
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = list_danhmuc(); 
                include "danhmuc/list.php";
                break;
            // Phần sửa danh mục trong Admin
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                  $suadm = sua_danhmuc($_GET['id']);
                }
                include "danhmuc/updatedm.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhap'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($tenloai,$id);
                    $thongbao = "Cập nhập thành công";
                }
                $listdanhmuc = list_danhmuc(); 
                include "danhmuc/list.php";
                break;
            

            // Phần sản phẩm
            case 'addsp' :
                if(isset($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $tensanpham = $_POST['tensanpham'];
                    $pricesanpham = $_POST['pricesanpham'];
                    $dessanpham = $_POST['dessanpham'];
                    $filename = $_FILES['imgsanpham']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["imgsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["imgsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($tensanpham,$pricesanpham,$filename,$dessanpham,$iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = list_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsanpham':
                if(isset($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }
                else{
                    $kyw = "";
                    $iddm= 0;
                }
                $listdanhmuc = list_danhmuc();
                $listsanpham = list_sanpham($kyw,$iddm); 
                include "sanpham/list.php";
                break;
            case 'xoasp':
                    $kyw = "";
                    $iddm= 0;
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham = list_sanpham($kyw,$iddm); 
                    include "sanpham/list.php";
                    break;
            case 'suasp':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                          $suasp = sua_sanpham($_GET['id']);
                        }
                        $listdanhmuc = list_danhmuc();
                        include "sanpham/updatedm.php";
                        break;
            case 'updatesp':
                        
                        if(isset($_POST['capnhap'])){
                            $id = $_POST['id'];
                            $iddm = $_POST['iddm'];
                            $tensanpham = $_POST['tensanpham'];
                            $pricesanpham = $_POST['pricesanpham'];
                            $dessanpham = $_POST['dessanpham'];
                            $filename = $_FILES['imgsanpham']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["imgsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["imgsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                            update_sanpham($id,$tensanpham,$pricesanpham,$filename,$dessanpham,$iddm);
                            $thongbao = "Cập nhập thành công";
                        }
                        $listsanpham = list_sanpham("",0); 
                        $listdanhmuc = list_danhmuc();
                        include "sanpham/list.php";
                        break;
            // Quản lý danh sách khách hàng
            case 'dskh':
                $listtaikhoan = list_taikhoan();
                include "taikhoan/list.php";
                break;
            // Phần xóa Tài khoản khách hàng trong Admin
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = list_taikhoan(); 
                include "taikhoan/list.php";
                break;
            // Phần sửa Tài khoản khách hàng trong Admin
            case 'suatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                  $suatk = sua_taikhoan($_GET['id']);
                }
                include "taikhoan/updatetk.php";
                break;
            case 'updatetk':
                if(isset($_POST['capnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    $id = $_POST['id'];
                    update_user($user,$pass,$email,$address,$tel,$role,$id);
                    $thongbao = "Cập nhập thành công";
                }
                $listtaikhoan = list_taikhoan(); 
                include "taikhoan/list.php";
                break;
            default:
                include "home.php";
                break;
        }
     }
     else{
        include "home.php";
     }
     
?>