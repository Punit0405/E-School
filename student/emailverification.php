<?php 
include_once('../dbconnection.php');
if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
    $stuemail=$_POST['stuemail'];
    $sql="SELECT studentemail FROM student WHERE studentemail = '$stuemail'";
    $result= $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}

?>
