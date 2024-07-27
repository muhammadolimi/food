
<?php
if(isset($_GET["page"]) && !empty(trim($_GET["page"])) && 
isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
  $id = $_GET["id"];
  require_once("db_users.php");
  $query = "UPDATE books SET `is_active` = 1 WHERE `id` = '$id';";    
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