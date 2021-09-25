<?php
include('../admin/header.php');
$sql="SELECT * FROM course";
$result=$conn->query($sql);
if(isset($_GET['courseidsubmit'])){
    if(isset($_GET['checkid'])){
        $checkid=$_GET['checkid'];
        $lessonquery="SELECT * FROM LESSONS WHERE course_id ={$checkid}";
        $result1=$conn->query($lessonquery);
    }
}



?>

<div class="col-sm-9 ">

 <form action="" method="GET" class="form-inline d-print-none">
     <div class="form-group mr-3">
         <label for="checkid">Select Course:</label>
         <select class="form_contol mt-5" name="checkid" id="checkid">
         <option value="0" default>Select Course </option>
             <?php 
             while($row=$result->fetch_assoc()){
             ?>
              <option  <?php if(isset($row['course_id'])){echo "value=\"".$row['course_id']."\"";}?>><?php echo $row['course_name'];?></option>
           
             <?php }?>
         </select>
     </div>
     <button type="submit" value="submit" name="courseidsubmit" class="btn d-inline btn-danger">Search</button> 
 </form>
 <?php 
    if(isset($result1)){

    
    if($result1->num_rows >= 0){
    ?>
    
 <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Lesson ID</th>
                <th scope="col">Lesson Name</th>
                <th scope="col">Lesson Desc</th>
                <th scope="col">Lesson Link</th>
                <th scope="col">Course ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
 <?php 
 
 while($row1=$result1->fetch_assoc()){?>
                <tr>
                    <th scope="row"><?php echo $row1['lesson_id'];?></th>
                    <td ><?php echo $row1['lesson_name'];?></td>
                    <td ><?php echo $row1['lesson_desc'];?></td>
                    <td ><?php echo $row1['lesson_link'];?></td>
                    <td ><?php echo $row1['course_id'];?></td>
                    <td ><?php echo $row1['course_name'];?></td>
                    <td>
                    <form action="editlesson.php" class="d-inline" method="GET">
                    <input type="hidden" name="lesson_id" <?php echo "value=\"".$row1['lesson_id']."\"";?>>    
                    <button type="submit" class="btn btn-info mr-3"   name="viewlesson" value="Viewlesson"><i class="fas fa-pen"></i></button>
                    </form>

                    <form action="" method="post" class="d-inline">
                        <input type="hidden" name="lesson_id" <?php echo "value=\"".$row1['lesson_id']."\"";?>>
                    <button type="submit" class="btn btn-del btn-secondary mr-3"  name="deletelesson" value="Delete"><i class="fas fa-trash"></i></button></form></td>
                </tr>
                <?php }?>
                </tbody>
    </table>
    <div>
    <a <?php echo "href=\"../admin/addlesson.php?course_id=".$_GET['checkid']."\"";?> class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>
    <?php }else{echo '0 Results';}
    }
    
    ?>
</div></div></div>
<?php 
if(isset($_POST['deletelesson'])){
    $deletesql="DELETE FROM lessons WHERE lesson_id={$_POST['lesson_id']}";
    if($conn->query($deletesql)){
        echo '<meta http-equiv ="refresh" content="0;URL=?checkid='.$checkid.'&courseidsubmit=submit"/>';
    }else{
        echo "Unable To Delete Data";
    }
}
?>
<?php
include('../admin/footer.php');
?>