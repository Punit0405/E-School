<?php
include('../admin/header.php');
if(isset($_GET['viewlesson'])){
    $lesson_id=$_GET['lesson_id'];
    $editsql="SELECT * FROM lessons WHERE lesson_id={$_GET['lesson_id']}";
    $result=$conn->query($editsql);
    $row=$result->fetch_assoc();

}
if (isset($_POST['courseEditBtn'])) {
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
        $lesson_link_folder = './image/courseimg/' . $lesson_link;
        $lesson_link_folder1 = '../image/courseimg/' . $lesson_link;
        move_uploaded_file($lesson_link_temp, $lesson_link_folder1);
        $editformsql = "UPDATE lessons SET lesson_name='$lesson_name',lesson_desc='$lesson_desc',course_id='$course_id',course_name='$course_name' WHERE lesson_id= $lesson_id";
        if ($conn->query($editformsql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Edited Successfully !</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Edit Course</div>';
        }
        header('location:lessons.php?checkid='.$course_id.'&courseidsubmit=submit');
    
    }
}?>
<div class="col-sm-6 mt-5 mx-3 ">
      <h3 class="text-center ">Edit Lesson</h3>
       <form action="" enctype="multipart/form-data"  method="post">
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" name="lesson_name" id="lesson_name"
            <?php if(isset($row['lesson_name'])){echo "value=\"".$row['lesson_name']."\"";}?> class="form-control">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea name="lesson_desc" id="lesson_desc" class="form-control"  row=2><?php if(isset($row['lesson_desc'])){ echo $row['lesson_desc'];}?>  </textarea>
        </div>
        <div class="form-group">
            <label for="lesson_id">Course ID</label>
            <input type="text" name="course_id" id="course_id" <?php if(isset($row['course_id'])){echo "value=\"".$row['course_id']."\"";}?>  class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Course Name</label>
            <input type="text" name="course_name" id="course_name" <?php if(isset($row['course_name'])){echo "value=\"".$row['course_name']."\"";}?>  class="form-control" readonly>
        </div>
        
        
        <div class="form-group">
            <label for="lesson_link">Upload Lesson(If Required)</label>
            <input type="file" name="lesson_link" id="lesson_link" class="form-control">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="lessoneditBtn" name="courseEditBtn">Edit</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
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