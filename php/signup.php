<?php

if(isset($_POST['fname']) &&
    isset($_POST['uname']) &&
    isset($_POST['pass'])){
        
    $fname = $_POST['fname'];
    $uname  = $_POST['uname'];
    $pass = $_POST['pass'];

    if(empty($fname)){
        $em = "full name is required";
        header("Location:../index.php?error=$em");
        exit;
    }else if(empty($uname)){
        $em = "User name is required";
        header("Location:../index.php?error=$em");
        exit;
    }else if(empty($pass)){
        $em = "Password is required";
        header("Location:../index.php?error=$em");
        exit;
    }else{
        echo "nice";
    }
}
else{
    header("location:../index.php?error=error");
    exit;
}