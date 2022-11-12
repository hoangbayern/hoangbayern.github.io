<?php 

   function insert_taikhoan($user,$pass,$email){
    $sql = " INSERT INTO taikhoan(user,pass,email)
    VALUES('$user','$pass','$email') ";
    pdo_execute($sql);
}
   function check_user($email,$password){
    $sql = "SELECT * FROM taikhoan WHERE email='".$email."' AND pass='".$password."'";
    $suasp = pdo_query_one($sql);
    return $suasp;
}
function check_email($email){
  $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
  $suasp = pdo_query_one($sql);
  return $suasp;
}
  function update_taikhoan($id,$email,$user,$pass,$address,$tel,$filename){
    if($filename != ""){
      $sql = " UPDATE taikhoan SET email='".$email."',user='".$user."',pass='".$pass."',address='".$address."',tel='".$tel."',img_user='".$filename."' WHERE id_user=".$id;
    }
    else{
    $sql = " UPDATE taikhoan SET email='".$email."',user='".$user."',pass='".$pass."',address='".$address."',tel='".$tel."' WHERE id_user=".$id;
    }
    pdo_execute($sql);
}
function update_pass($pass,$email){
  $sql = " UPDATE taikhoan SET pass='".$pass."' WHERE email='".$email."'";
  pdo_execute($sql);
}
// Tài khoản khách hàng trong trang Admin
function list_taikhoan(){
  $sql = " SELECT * FROM taikhoan ORDER BY id_user desc";
  $listtaikhoan = pdo_execute($sql);
  return $listtaikhoan;
}
function delete_taikhoan($id){
  $sql = "DELETE FROM taikhoan WHERE id_user=".$id;
  pdo_execute($sql);
}
function sua_taikhoan($id){
  $sql = "SELECT * FROM taikhoan WHERE id_user=".$id;
  $suatk = pdo_query_one($sql);
  return $suatk;
}
function update_user($user,$pass,$email,$address,$tel,$role,$id){
  $sql = " UPDATE taikhoan SET user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."',role='".$role."' WHERE id_user=".$id;
  pdo_execute($sql);
}
?>