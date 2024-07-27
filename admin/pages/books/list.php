    <div class="container-fluid">
    <div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Books</h3>
    </div>
    <table class="table">
        <tr>
            <th>№</th>
            <th>Title</th>
            <th>Author</th>
            <th>About</th>
            <th>Year</th>
            <th>Photo</th>
            <th>Add_Date</th>
            <th>Удалить</th>
            <th>Изменить</th>
            

        </tr>
        <?php
            $i=0;
            require_once("db_users.php");
            $query = "Select * from books where is_active = 1";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result))
            {   
                $i++;
                ?>
                
                <tr>
                    <td><?=$i;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['author'];?></td>
                    <td><?=$row['about'];?></td>
                    <td><?=$row['year'];?></td>
                    <td><img src="../assets/images/<?=$row['photo'];?>" class="shadow-lg bg-black" width="50" height="80" ></td>
                    <td><?=$row['add_date'];?></td>
                    <td><a class ="btn btn-danger" href="pages/books/delete.php?id=<?=$row['id']?>">Delete</a></td>
                    <td><a class = "btn btn-success" href = "?page=10&id=<?=$row['id']?>">Add</a></td>
                </tr>
                <?php
            }
            ?>
    </table>
        </div>
        </div>
        </div>