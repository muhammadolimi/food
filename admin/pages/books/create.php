<?php
move_uploaded_file($_FILES['file']['tmp_name'],'C:\ospanel\domains\elibrary\assets\books\\'.$_FILES['file']['name']);
?>
<?php
if(isset($_POST["save"])){
$name = $_POST['name'];
$author = $_POST['author'];
$about = $_POST['about'];
$year = $_POST['year'];
$photo = $_POST['photo'];
$add_date = $_POST['add_date'];
$file = $_FILES['file']['name'];
$is_active = 1;
require_once('../../../db_users.php');


$query = "INSERT INTO books(`name`, `author`, `about`, `year`, `photo`, `add_date`, `file`, `is_active`)
VALUES ('$name','$author', '$about', '$year', '$photo', '$add_date', '$file', '$is_active')";


$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Successfuly added!');
    window.location = '../../index.php?page=4';</script>";
}
}
?>