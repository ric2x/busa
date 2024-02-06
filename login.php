<?php
    session_start();

    include 'conn.php';


    $uname = $_POST['luser'];
    $pass = $_POST['lpass'];

    $msg = [];

    $sql = "SELECT * FROM `personal_tbl` as `pi` , `account_tbl` as `at` WHERE `at`.`username` = '$uname' AND `at`.`password` = '$pass' AND `at`.`id` = `pi`.`id`;";
    // $sql = "SELECT * FROM `logreg` WHERE `username` = '$uname' AND `pass` = '$pass';";

    $query = $con->query($sql);

    if($query->num_rows > 0){
        $row = $query->fetch_assoc(); 
        $_SESSION['name'] = $row ['name'];
        $_SESSION['hobby'] = $row ['hobby'];
     

        $msg['status'] = true;
        $msg['message'] = ("Hi! I'm"." ".$row['name']."My".$row['lname']." ".$row['address']);
        
    }else{
        $msg['status'] = false;
        $msg['message'] = "Failed";
    }

    echo json_encode($msg);
?>