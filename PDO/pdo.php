


<?php
       

function pdo_get_connection(){
    $host = "localhost";
    $dbname="project1";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;

}

function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
        }
    catch(PDOException $e){
        throw $e;
        }
    finally{
        unset($conn);
    }
}

function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
}
    catch(PDOException $e){
       throw $e;
    }
    finally{
      unset($conn);
}
}

function pdo_query_value($sql){
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
}

catch(PDOException $e){
    throw $e;
 }
 finally{
   unset($conn);
}
}
?>