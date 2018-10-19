<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add news</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_news" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Title</label>
                  <input type="text" class="form-control" placeholder="Enter title" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Body</label>
                  <input type="text" class="form-control" placeholder="Enter body" name="body">
                </div>
                
            
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_news">ADD NEWS</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>