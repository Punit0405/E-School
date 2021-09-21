<?php
include('../admin/header.php');
if (isset($_POST['studentaddBtn'])) {
    // checkign for empty fields 
    if (($_POST['stu_name'] == '') || ($_POST['studentemail'] == '') || ($_POST['stu_password'] == '') ) {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Fill All The Fields !</div>';
    } else {
        $stu_name = $_POST['stu_name'];
        $studentemail = $_POST['studentemail'];
        $stu_password = $_POST['stu_password'];
      

        $sql = "INSERT INTO student (stu_name,studentemail,stu_password ) VALUES ('$stu_name','$studentemail','$stu_password')";
        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully !</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Add Course</div>';
        }
    }
}
?>



     <div class="col-sm-6 mt-5 mx-3 ">
      <h3 class="text-center ">Add New Student</h3>
       <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="stu_name">Studnet Name</label>
            <input type="text" name="stu_name" id="stu_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="studentemail">Student Email</label>
            <input type="email" name="studentemail" id="studentemail" class="form-control" >
            <small id="statusmsg2"></small>
        </div>
        <div class="form-group">
            <label for="stu_password">Student Password</label>
            <input type="text" name="stu_password" id="stu_password" class="form-control">
        </div>
        
        
        
        
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="studentaddBtn" name="studentaddBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php
        if (isset($msg)) {

            echo $msg;
        }
        ?>
    </form>
</div>
</div>
</div>


<script src="../js/jquery.js"></script>
<script src="../js/addstudentcheck.js"></script>
<?php
include('../admin/footer.php');
?>