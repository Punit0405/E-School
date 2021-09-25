<?php
include('../admin/header.php');
$coursesql="SELECT course_name from course WHERE course_id={$_GET['course_id']}";
$result=$conn->query($coursesql);
$row=$result->fetch_assoc();

if (isset($_POST['lessonSubmitBtn'])) {
    // checkign for empty fields 
    if (($_POST['lesson_name'] == '') || ($_POST['lesson_desc'] == '') || ($_POST['course_id'] == '') || ($_POST['course_name'] == '')) {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Fill All The Fields !</div>';
    } else {
        $lesson_name = $_POST['lesson_name'];
        $lesson_desc = $_POST['lesson_desc'];
        $course_id = $_POST['course_id'];
        $course_name = $_POST['course_name'];
        
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $lesson_link_folder = './image/lessons/' . $lesson_link;
        $lesson_link_folder1 = '../image/lessons/' . $lesson_link;
        move_uploaded_file($lesson_link_temp, $lesson_link_folder1);

        $sql = "INSERT INTO lessons (lesson_name,lesson_desc,course_id,lesson_link,course_name) VALUES ('$lesson_name','$lesson_desc','$course_id','$lesson_link_folder','$course_name')";
        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson Added Successfully !</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Add Lesson</div>';
        }
    }
}
?><div class="col-sm-9 mt-5  ">
    <h3 class="text-center ">Add New Lesson</h3>
       <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" name="lesson_name" id="lesson_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea name="lesson_desc" id="lesson_desc" class="form-control" row=2></textarea>
        </div>
        <div class="form-group">
            <label for="course_id">Course id</label>
            <input type="text" name="course_id" <?php echo "value=\"".$_GET['course_id']."\"";?> id="course_id" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" <?php echo "value=\"".$row['course_name']."\"";?>  id="course_name" class="form-control" readonly>
        </div>
       
        <div class="form-group">
            <label for="lesson_link">Upload Lesson</label>
            <input type="file" name="lesson_link" id="lesson_link" class="form-control">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
        </div>
        <?php
        if (isset($msg)) {

            echo $msg;
        }
        ?>
    </form>
</div></div></div>
<?php
include('../admin/footer.php');
?>