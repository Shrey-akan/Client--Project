<?php include('header.php');?>
<?php 
include('../connection.php');
if ($_GET['update_admin']) {
  $sno = $_GET['update_admin'];
  $sel = "SELECT * FROM admin_login WHERE sno='$sno'";
  $res = mysqli_query($con,$sel);
  $r = mysqli_fetch_array($res);
}
?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Admin Table</h4>
                  </div>
                  <div class="card-body">
                  <form method="POST" action="update.php" enctype="multipart/form-data">
                  <input type="hidden" name="sno" value="<?php echo $r[0]; ?>" class="form-control">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $r[1]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $r[2]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" value="<?php echo $r[3]; ?>">
                    </div>
                    <!-- <div class="form-group">m,
            		  <label>Old Image</label><br>
            		  <img src="uploads/admin/<?php echo $r[3]; ?>" height="100">
          			</div> -->
                <!-- <div class="form-group">
                      <label>Upload Image</label>
                      <input type="file" name="new_image" class="form-control"/>
                      <input type="hidden" name="old_image" value="<?php echo $r[3]; ?>" >
                   </div> -->
                    <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit" name="update_admin" value="update_admin">Submit</button>
                    <a class="btn btn-danger" href="admin.php" >Cancle</a> 
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </section>
            </div>
<?php include('footer.php');?>