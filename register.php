<?php
    session_start();
    
    include 'conn.php';

    $uname = $_POST['ruser'];
    $pass = $_POST['rpass'];
    $name = $_POST['rname'];
    $hobby = $_POST['rhobby'];
    


    $msg = [];

    $sql = "INSERT INTO `account_tbl`(`username`, `password`) VALUES ('$id','$uname','$pass');";
    

    $query = $con->query($sql);

    if($query == true){
        $sql1 = "SELECT * FROM `account_tbl` WHERE `username` = '$uname';";

        $query1 = $con->query($sql1);

        if($query1->num_rows > 0){
            $row = $query1->fetch_assoc();
            $id = $row['id'];

            $sql3 = "INSERT INTO `personal_tbl`(`id`, `name`,`hobby`) VALUES ('$name','$hobby');";
            
        $query3 = $con->query($sql3);
        }

        $msg['status'] = true;
        $msg['message'] = "Successful";
    }else{
        $msg['status'] = false;
        $msg['message'] = "Failed";
    }
    echo json_encode($msg);

?>