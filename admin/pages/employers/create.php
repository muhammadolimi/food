<?php

if(isset($_POST["save"])){
$name = $_POST['username'];
$login = $_POST['login'];
$_password = $_POST['password'];
$role = $_POST['role'];

require_once('../db_users.php');


$query = "INSERT INTO users (`username`, `login`, `password`, `role`)
VALUES ('$name', '$login', '$_password', '$role')";


$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Успешно добавлено!');
    window.location = '../../index.php?page=2';</script>";
}
}

?>