<?php
include('../admin/header.php');
$sql="SELECT * FROM admin";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if(isset($_POST['adminchangepassword'])){
    if (($_POST['admin_email'] == '') || ($_POST['admin_pass'] == '')) {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Fill All The Fields !</div>';
        
    }else{
        $adminpass=$_POST['admin_pass'];
        $admin_id=$row['admin_id'];
        $updatesql="UPDATE admin SET admin_pass='$adminpass' WHERE admin_id='$admin_id'";
        if($conn->query($updatesql)){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Password Changed Successfully !</div>';
            header('location:admindashboard.php');
        }else{
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Change Password</div>';
        }
    }

}
?>
<div class="col-sm-6 mt-5 mx-3 ">
      <h3 class="text-center ">Change Password</h3>
       <form action=""   method="post">
        
        <div class="form-group">
            <label for="admin_email">Admin Email</label>
            <input type="email" name="admin_email" id="admin_email" <?php if(isset($row['admin_email'])){echo "value=\"".$row['admin_email']."\"";}?> class="form-control"  readonly>
        </div>
        <div class="form-group">
            <label for="admin_pass">Admin Password</label>
            <input type="text" name="admin_pass" id="admin_pass" <?php if(isset($row['admin_pass'])){echo "value=\"".$row['admin_pass']."\"";}?>  class="form-control">
        </div>
        
        
       
       
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="adminchangepassword" name="adminchangepassword">Change Password</button>
            <a href="admindashboard.php" class="btn btn-secondary">Close</a>
        </div><?php
        if (isset($msg)) {

            echo $msg;
        }
        ?>
        
        </form>
    </div>
<?php
include('../admin/footer.php');
?>