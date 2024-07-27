<?php
move_uploaded_file($_FILES['file']['tmp_name'],'C:\ospanel\domains\elibrary\assets\books\\'.$_FILES['file']['name']);
?>
<?php
if(isset($_POST["save"])){
$id = $_POST['id'];
$name = $_POST['name'];
$author = $_POST['author'];
$about = $_POST['about'];
$year = $_POST['year'];
$photo = $_POST['photo'];
$add_date = $_POST['add_date'];
$file = $_FILES['file']['name'];
require_once('../db_users.php');
$query = "UPDATE books SET `name` = '$name',`author` = '$author',`about` = '$about',`photo` = '$photo',`year` = '$year',`add_date` = '$add_date',  `file` = '$file'
WHERE `id` = '$id';";    
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Successfuly edited!');
    window.location = '../admin/index.php?page=4';</script>";
}
else{
    echo "<script>alert('Не изменено!');
    window.location = '../admin/index.php?page=4';</script>";
}
}

?>