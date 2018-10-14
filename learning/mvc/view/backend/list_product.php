<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Name</th>
                  <th>Price</th>
                  <th style="width: 40px">Picture</th>
                </tr>
                <?php while ($row = $listProduct->fetch_assoc()) {
                    $id = $row['id'];
                  ?>
                  <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><img src="<?php echo $row['image'] ?>"></td>


                    <td>
                    <a href="admin.php?action=edit_product&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="admin.php?action=delete_user&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                    </td>
                  </tr>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     