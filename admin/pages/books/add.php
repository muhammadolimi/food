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
              <form action="pages/books/create.php"  method="post" enctype='multipart/form-data'>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input type="text" name="author" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About</label>
                    <input type="text" name="about" class="form-control" id="exampleInputEmail1" placeholder="About">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="Enter year">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Photo</label>
                    <input type="text" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Photo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add_Date</label>
                    <input type="date" name="add_date" class="form-control" id="exampleInputEmail1" placeholder="Enter date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">File</label>
                    <input type="file" name="file" class="form-control" id="exampleInputEmail1" placeholder="Select file">
                  </div>          
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