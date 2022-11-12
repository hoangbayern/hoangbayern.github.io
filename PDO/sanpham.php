<?php 

function insert_sanpham($tensanpham,$pricesanpham,$filename,$dessanpham,$iddm){
    $sql = " INSERT INTO sanpham(name,price,img,mota,id_danhmuc)
    VALUES('$tensanpham','$pricesanpham','$filename','$dessanpham','$iddm') ";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "DELETE FROM sanpham WHERE id_sanpham=".$id;
    pdo_execute($sql);
}
function list_sanpham($kyw,$iddm){
    $sql = " SELECT * FROM sanpham WHERE 1";
    if($kyw!=""){
        $sql.= " and name LIKE  '%".$kyw."%'";
    }
    if($iddm!=0){
        $sql.=" and id_danhmuc='".$iddm."' ";
    }
    $sql.=" ORDER BY id_sanpham desc";
    $listsanpham = pdo_execute($sql);
    return $listsanpham;
}
function list_sanpham_home(){
    $sql = " SELECT * FROM sanpham WHERE 1 ORDER BY id_sanpham desc limit 0,9";
    $listsanpham = pdo_execute($sql);
    return $listsanpham;
}
function list_sanpham_top5(){
    $sql = " SELECT * FROM sanpham WHERE 1 ORDER BY luotxem desc limit 0,5";
    $listsanpham = pdo_execute($sql);
    return $listsanpham;
}
function sanpham_cungloai($id,$id_danhmuc){
    $sql = "SELECT * FROM sanpham WHERE id_danhmuc=".$id_danhmuc." AND id_sanpham<>".$id;
    $listsanpham = pdo_execute($sql);
    return $listsanpham;
}
function sua_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id_sanpham=".$id;
    $suasp = pdo_query_one($sql);
    return $suasp;
}
function loadone_tendanhmuc($iddm){
    if($iddm>0){
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc=".$iddm;
    $tendanhmuc = pdo_query_one($sql);
    extract($tendanhmuc);
    return $name;
    }
    else{
        return "";
    }
}

function update_sanpham($id,$tensanpham,$pricesanpham,$filename,$dessanpham,$iddm){
    if($filename!=""){
        $sql = " UPDATE sanpham SET name='".$tensanpham."',price='".$pricesanpham."',img='".$filename."',mota='".$dessanpham."',id_danhmuc='".$iddm."' WHERE id_sanpham=".$id;
    }
    else{
    $sql = " UPDATE sanpham SET name='".$tensanpham."',price='".$pricesanpham."',mota='".$dessanpham."',id_danhmuc='".$iddm."' WHERE id_sanpham=".$id;
    }
    pdo_execute($sql);
}

?>