<?php
include('../admin/header.php');
if (isset($_POST['courseSubmitBtn'])) {
    // checkign for empty fields 
    if (($_POST['course_name'] == '') || ($_POST['course_desc'] == '') || ($_POST['course_author'] == '') || ($_POST['course_duration'] == '') || ($_POST['course_price'] == '') || ($_POST['course_original_price'] == '')) {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Fill All The Fields !</div>';
    } else {
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_price = $_POST['course_price'];
        $course_original_price = $_POST['course_original_price'];
        $course_img = $_FILES['course_img']['name'];
        $course_img_temp = $_FILES['course_img']['tmp_name'];
        $img_folder = '../image/courseimg/' . $course_img;
        move_uploaded_file($course_img_temp, $img_folder);

        $sql = "INSERT INTO course (course_name,course_desc,course_author,course_img,course_duration,course_price,course_original_price) VALUES ('$course_name','$course_desc','$course_author','$img_folder','$course_duration','$course_price','$course_original_price')";
        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Successfully !</div>';
        } else {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Add Course</div>';
        }
    }
}
?>



     <div class="col-sm-6 mt-5 mx-3 ">
      <h3 class="text-center ">Add New Courses</h3>
       <form action="" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea name="course_desc" id="course_desc" class="form-control" row=2></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Course Author</label>
            <input type="text" name="course_author" id="course_author" class="form-control">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" name="course_duration" id="course_duration" class="form-control">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" name="course_original_price" id="course_original_price" class="form-control">
        </div>
        <div class="form-group">
            <label for="course_price">Course Price</label>
            <input type="text" name="course_price" id="course_price" class="form-control">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <input type="file" name="course_img" id="course_img" class="form-control">
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-danger " id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
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




<?php
include('../admin/footer.php');
?>