<?php
include('../admin/header.php');

if(isset($_GET['viewstudent'])){
    $stu_id=$_GET['stu_id'];
    $editsql="SELECT * FROM student WHERE stu_id={$_GET['stu_id']}";
    $result=$conn->query($editsql);
    $row=$result->fetch_assoc();

}
if (isset($_POST['studentEditBtn'])) {
    // checkign for empty fields 
    if (($_POST['stu_name'] == '') || ($_POST['studentemail'] == '') || ($_POST['stu_password'] == '')) {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Fill All The Fields !</div>';
    } else {
        $stu_name = $_POST['stu_name'];
        $studentemail = $_POST['studentemail'];
        $stu_password = $_POST['stu_password'];
        
        $editformsql = "UPDATE student SET stu_name='$stu_name',studentemail='$studentemail',stu_password='$stu_password' WHERE stu_id= $stu_id";
        if ($conn->query($editformsql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Edited Successfully !</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Edit Student</div>';
        }
        header('location:students.php');
    
    }
}

?>


    <!-- if ($conn->query($sql) == TRUE) {
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Edited Successfully !</div>';
    } else {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Edit Course</div>';
    } -->

<div class="col-sm-6 mt-5 mx-3 ">
      <h3 class="text-center ">Edit Student</h3>
       <form action="" enctype="multipart/form-data"  method="post">
        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" name="stu_name" id="stu_name"
             class="form-control" <?php if(isset($row['stu_name'])){echo "value=\"".$row['stu_name']."\"";}?>>
        </div>
        <div class="form-group">
            <label for="studentemail">Student Email</label>
            <input type="email" name="studentemail" id="studentemail" <?php if(isset($row['stu_name'])){echo "value=\"".$row['studentemail']."\"";}?> class="form-control"  readonly>
        </div>
        <div class="form-group">
            <label for="stu_password">Student Password</label>
            <input type="text" name="stu_password" id="stu_password" <?php if(isset($row['stu_password'])){echo "value=\"".$row['stu_password']."\"";}?>  class="form-control">
        </div>
        
        
       
       
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="studentEditBtn" name="studentEditBtn">Edit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div><?php
        if (isset($msg)) {

            echo $msg;
        }
        ?></form>
    </div>
</div>
</div>

<?php
include('../admin/footer.php');
?>
