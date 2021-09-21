<?php 
include_once('../dbconnection.php');
if(isset($_POST['checkemail']) && isset($_POST['studentemail'])){
    $studentemail=$_POST['studentemail'];
    $sql="SELECT studentemail FROM student WHERE studentemail = '$studentemail'";
    $result= $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}

?>