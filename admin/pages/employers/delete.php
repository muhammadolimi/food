<?php

if( isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    require_once("db_users.php");
    $query = "delete from users where id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Успешно удалено!');
        window.location = '../../index.php?page=2';</script>";
    }
}
?>