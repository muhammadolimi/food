<div class="container-fluid">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <table class="table">
                <tr>
                    <th>№</th>
                    <th>Name</th>
                    <th>Login</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <?php
                    $i=0;
                    require_once("db_users.php");
                    $query = "Select * from users";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result))
                    {   
                        $i++;
                        ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$row['username'];?></td>
                            <td><?=$row['login'];?></td>
                            <td><?=$row['password'];?></td>
                            <td><?=$row['role'];?></td>
                            <td><a class ="btn btn-danger" href="pages/employers/delete.php?id=<?=$row['id'];?>">Delete</a></td>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <td><a href="?page=7&id=<?=$row['id']?>" class ="btn btn-success">Edit</td></a>
                        </tr>
                    <?php } ?>
            </table>
        </div>
    </div>
</div>