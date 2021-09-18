<?php 

if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

// checking email in database 



// insert student 
if(isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupassword'])){

    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stupassword=$_POST['stupassword'];



    $sql = "INSERT INTO student(stu_name,studentemail,stu_password) VALUES ('$stuname','$stuemail','$stupassword')";

    if($conn->query($sql) == TRUE){
        echo json_encode("OK");
    }else{
        echo json_encode("Failed");
    }
}

// studet log in verification
if(!isset($_SESSION['is_login'])){

    if(isset($_POST['checklogemail']) && isset($_POST['stulogemail']) && isset($_POST['stulogpass'])){
        $stulogemail= $_POST['stulogemail'];
        $stulogpassword= $_POST['stulogpass'];
    
    $loginsql="SELECT studentemail,stu_password FROM student WHERE studentemail='".$stulogemail."' AND stu_password='".$stulogpassword."'";
    
    $result=$conn->query($loginsql);
    $row = $result->num_rows;
    if($row === 1){
        $_SESSION['is_login'] = true;
        $_SESSION['stulogemail'] = $stulogemail;
        echo json_encode($row);
    
    }else if($row === 0){
        echo json_encode($row);
    }else{echo json_encode("nothing");}
    
    }
}


?>