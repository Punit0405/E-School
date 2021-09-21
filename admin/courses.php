<?php
include('../admin/header.php');
?>

<div class="col-sm-9 mt-5">


    <!-- Table  -->
    <p class="bg-dark text-white p-2"> List Of Courses</p>
    <?php 
    $tablesql="SELECT * FROM course";
    $result=$conn->query($tablesql);
    if($result->num_rows > 0){
    ?>
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()){?>
                <tr>
                    <th scope="row"><?php echo $row['course_id'];?></th>
                    <td ><?php echo $row['course_name'];?></td>
                    <td ><?php echo $row['course_author'];?></td>
                    <td ><?php echo $row['course_price'];?></td>
                    <td>
                    <form action="editcourse.php" class="d-inline" method="GET">
                    <input type="hidden" name="course_id" <?php echo "value=\"".$row['course_id']."\"";?>>    
                    <button type="submit" class="btn btn-info mr-3"   name="view" value="View"><i class="fas fa-pen"></i></button>
                    </form>

                    <form action="" method="post" class="d-inline">
                        <input type="hidden" name="course_id" <?php echo "value=\"".$row['course_id']."\"";?>>
                    <button type="submit" class="btn btn-del btn-secondary mr-3"  name="delete" value="Delete"><i class="fas fa-trash"></i></button></form></td>
                </tr>
                <?php }?>
            <!-- dynamic data  -->
        </tbody>
    </table>
    <?php }else{echo '0 Results';}?>
</div>
</div>
<div>
    <a href="../admin/addcourse.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<?php 
if(isset($_POST['delete'])){
    $deletesql="DELETE FROM course WHERE course_id={$_POST['course_id']}";
    if($conn->query($deletesql)){
        echo '<meta http-equiv ="refresh" content="0;URL=?deleted"/>';
    }else{
        echo "Unable To Delete Data";
    }
}
?>
<?php
include('../admin/footer.php');
?>