<?php
if(isset($_GET["page"]) && !empty(trim($_GET["page"])) && 
isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
  $id = $_GET["id"];
  require_once("db_users.php");
  $query = "Select * from books where id = $id";
  $result = mysqli_query($conn, $query);
  $rows = mysqli_num_rows($result);
if(mysqli_num_rows($result)<=0){
}
$rows = mysqli_fetch_assoc($result);

}
?>
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Books</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=6"  method="post" enctype='multipart/form-data'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?=$rows['name']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" name="author" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?=$rows['author']?>"> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About</label>
                    <input type="text" name="about" class="form-control" id="exampleInputEmail1" placeholder="About" value="<?=$rows['about']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="Enter year" value="<?=$rows['year']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Photo</label>
                    <input type="text" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Photo" value="<?=$rows['photo']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add_Date</label>
                    <input type="date" name="add_date" class="form-control" id="exampleInputEmail1" placeholder="Enter date" value="<?=$rows['add_date']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">File</label>
                    <input type="file" name="file" class="form-control" id="exampleInputEmail1" placeholder="Select file" value="<?=$rows['file']?>">
                  </div>
                  <input type="hidden" name="id" value="<?=$id?>"><br>   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
 
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>