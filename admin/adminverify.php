<?php 

if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php'); 

if(!isset($_SESSION['is_login'])){

    if(isset($_POST['checklogemail']) && isset($_POST['adminlogemail']) && isset($_POST['adminlogpass'])){
        $adminlogemail= $_POST['adminlogemail'];
        $adminlogpassword= $_POST['adminlogpass'];
    
    $loginsql="SELECT admin_email,admin_pass FROM admin WHERE admin_email='".$adminlogemail."' AND admin_pass='".$adminlogpassword."'";
    
    $result=$conn->query($loginsql);
    $row = $result->num_rows;
    if($row === 1){
        $_SESSION['is_admin_login'] = true;
        $_SESSION['adminlogemail'] = $adminlogemail;
        echo json_encode($row);
    
    }else if($row === 0){
        echo json_encode($row);
    }else{echo json_encode("nothing");}
    
    }
}
?>