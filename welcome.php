<?php

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> <?php echo  $_SESSION['fname']."".$_SESSION['lname']."".$_SESSION['address']; ?></h1>
</body>
</html>