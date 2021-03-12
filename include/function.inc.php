<?php

require_once 'dbh.php';

function emptyInput($adminUser,$adminpwd){
    $result = "";
    if(empty($adminUser || $adminpwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUsername($adminUser){
    $result = "";
    if (empty($adminUser)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


