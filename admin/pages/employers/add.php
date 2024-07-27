<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Users</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="pages/employers/create.php"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" name="login" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="input-group mb-5">
                <label for="roles" name="role"  class="form-control">Choose a role:</label>    
                <input list="roles" name="role" class="form-control" placeholder="Role">
                  <datalist id="roles">
                    <option value="Admin">
                    <option value="User">
                  </datalist>
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