<?php
move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__.'\assets\books\\'.$_FILES['filename']['name']);
if(isset($_POST["add"])){
$name = $_POST['name'];
$author = $_POST['author'];
$about = $_POST['about'];
$year = $_POST['year'];
$photo = $_POST['photo'];
$add_date = $_POST['add_date'];
$file = $_FILES['filename']['name'];
$is_active = 0;
require_once('db_users.php');


$query = "INSERT INTO books(`name`, `author`, `about`, `year`, `photo`, `add_date`, `file`, `is_active`)
VALUES ('$name','$author', '$about', '$year', '$photo', '$add_date', '$file', '$is_active')";

echo $query;

$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Request sent');
    window.location = 'books.php';</script>";
}
}
?>

