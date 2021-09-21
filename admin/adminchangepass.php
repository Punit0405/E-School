<?php
include('../admin/header.php');
?>
<div class="col-sm-6 mt-5 mx-3 ">
      <h3 class="text-center ">Change Password</h3>
       <form action="" enctype="multipart/form-data"  method="post">
        
        <div class="form-group">
            <label for="studentemail">Admin Email</label>
            <input type="email" name="studentemail" id="studentemail" <?php if(isset($row['stu_name'])){echo "value=\"".$row['studentemail']."\"";}?> class="form-control"  readonly>
        </div>
        <div class="form-group">
            <label for="stu_password">Admin Password</label>
            <input type="text" name="stu_password" id="stu_password" <?php if(isset($row['stu_password'])){echo "value=\"".$row['stu_password']."\"";}?>  class="form-control">
        </div>
        
        
       
       
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="studentEditBtn" name="studentEditBtn">Change Password</button>
            <a href="admindashboard.php" class="btn btn-secondary">Close</a>
        </div><?php
        if (isset($msg)) {

            echo $msg;
        }
        ?></form>
    </div>
<?php
include('../admin/footer.php');
?>