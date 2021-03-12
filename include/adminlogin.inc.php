<?php

if (isset($_POST["submit"])){
    $adminUser = $_POST["username"];
    $adminpwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once 'function.inc.php';

    if (emptyInput($adminUser,$adminpwd) !== false){
        header("Location: ../adminlogin.php?error=emptyInput");
        exit();
    }
    if (invalidUsername($adminUser) !== false){
        header("Location: ../adminlogin.php?error=invalidUsername");
        exit();
    }
   
    $sql = "SELECT * FROM admin";
    $sqlrun = mysqli_query($conn, $sql);
    
    if($row = mysqli_fetch_assoc($sqlrun)){
        
        $user = $row["adminUsername"];
        $pwd = $row["adminPassword"];
    

        if($adminUser === $user && $adminpwd === $pwd){
            session_start();
            $_SESSION["user"] = $adminUser;
            header("Location: ../adminPanel.php?loginSuccess");
            exit();       
        }else{
            header("Location: ../adminlogin.php?error=passwordnotmatch");
            exit();
        } 
        
    }
}else{
    header("Location: ../adminlogin.php?error=enterInput");
}

