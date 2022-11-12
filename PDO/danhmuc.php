<?php 

function insert_danhmuc($tenloai){
    $sql = " INSERT INTO danhmuc(name)
    VALUES('$tenloai') ";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "DELETE FROM danhmuc WHERE id_danhmuc=".$id;
    pdo_execute($sql);
}
function list_danhmuc(){
    $sql = " SELECT * FROM danhmuc ORDER BY id_danhmuc desc";
    $listdanhmuc = pdo_execute($sql);
    return $listdanhmuc;
}
function sua_danhmuc($id){
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc=".$id;
    $suadm = pdo_query_one($sql);
    return $suadm;
}
function update_danhmuc($tenloai,$id){
    $sql = " UPDATE danhmuc SET name='".$tenloai."' WHERE id_danhmuc=".$id;
    pdo_execute($sql);
}

?>