<?php
if(isset($_POST["edit"])){
$id = $_POST['id'];
$name = $_POST['username'];
$login = $_POST['login'];
$_password = $_POST['password'];
$role = $_POST['role'];
require_once('db_users.php');
$query = "UPDATE users SET `username` = '$name',`login` = '$login',`password` = '$_password', `role` = '$role'
WHERE `id` = '$id';";    
$result = mysqli_query($conn, $query);

if($result){
    echo "<script>alert('Успешно изменено!');
    window.location = '../admin/index.php?page=2';</script>";
}

}

?>