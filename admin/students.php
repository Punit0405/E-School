<?php
include('../admin/header.php');
?>

<div class="col-sm-9 mt-5">


    <!-- Table  -->
    <p class="bg-dark text-white p-2"> List Of Students</p>
    <?php 
    $tablesql="SELECT * FROM student";
    $result=$conn->query($tablesql);
    if($result->num_rows > 0){
    ?>
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Student ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$result->fetch_assoc()){?>
                <tr>
                    <th scope="row"><?php echo $row['stu_id'];?></th>
                    <td ><?php echo $row['stu_name'];?></td>
                    <td ><?php echo $row['studentemail'];?></td>
                    <td>
                    <form action="editstudent.php" class="d-inline" method="GET">
                    <input type="hidden" name="stu_id" <?php echo "value=\"".$row['stu_id']."\"";?>>    
                    <button type="submit" class="btn btn-info mr-3"   name="viewstudent" value="Viewstudent"><i class="fas fa-pen"></i></button>
                    </form>

                    <form action="" method="post" class="d-inline">
                        <input type="hidden" name="stu_id" <?php echo "value=\"".$row['stu_id']."\"";?>>
                    <button type="submit" class="btn btn-del btn-secondary mr-3"  name="deletestudent" value="Delete"><i class="fas fa-trash"></i></button></form></td>
                </tr>
                <?php }?>
            <!-- dynamic data  -->
        </tbody>
    </table>
    <?php }else{echo '0 Results';}?>
</div>
</div>
<div>
    <a href="../admin/addstudent.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<?php 
if(isset($_POST['deletestudent'])){
    $deletesql="DELETE FROM student WHERE stu_id={$_POST['stu_id']}";
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