<?php
include('../admin/header.php');
$sql="SELECT * FROM course";
$result=$conn->query($sql);
?>

<div class="col-sm-9 ">

 <form action="" method="get" class="form-inline d-print-none">
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
     <button type="submit" class="btn d-inline btn-danger">Search</button> 
 </form>
</div></div></div>
<?php
include('../admin/footer.php');
?>