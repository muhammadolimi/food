<?php
if( isset($_GET["id"]) && !empty($_GET["id"])){
$id = $_GET["id"];
require_once("db_users.php");
$query = "Select * from users where id = $id";
$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result);
if(mysqli_num_rows($result)<=0){
}
$rows = mysqli_fetch_assoc($result);
}
?>

<div class="container col-sm-9">    
    <form action="?page=8" method="post">
        Name
        <input class='form-control' type="text" name="username" value="<?=$rows['username']?>" id="">
        Login
        <input class='form-control' type="text" name="login" value="<?=$rows['login']?>" id="">
        Password
        <input class='form-control' type="text" name="password" value="<?=$rows['password']?>" id="">
        <input type="hidden" name="id" value="<?=$id?>"><br>
        <div class="input-group mb-3">
        <label for="roles" name="role"  class="form-control">Choose a role:</label>    
        <input list="roles" name="role" class="form-control" placeholder="Role">
          <datalist id="roles">
            <option value="Admin">
            <option value="User">
          </datalist>
      </div>
        <input class="btn btn-success" type="submit" value="Изменить" name="edit">
        
    </form>
</div>