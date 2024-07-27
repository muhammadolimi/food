<?php

if( isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    require_once("db_users.php");
    $query = "delete from books where id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Успешно deleted!');
        window.location = '../../index.php?page=4';</script>";
    }
}
?>