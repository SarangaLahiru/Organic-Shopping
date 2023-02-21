<?php

function emptyInput1($email,$pass){
    $value;
    if(empty($email)||empty($pass)){
        $value=true;
    }
    else{
        $value=false;

    }
    return $value;
}

function emptyInput($name,$email,$pass,$repass){
    $value;
    if(empty($name)||empty($email)||empty($pass)||empty($repass)){
        $value=true;
    }
    else{
        $value=false;

    }
    return $value;
}

function invalidName($name){
    $value;
    if(!preg_match('/^[a-zA-Z]+$/',$name)){
        $value=true;
    }
    else{
        $value=false;

    }
    return $value;
}
function invalidpass($pass,$repass){
    $value;
    if($pass!==$repass){
        $value=true;
    }
    else{
        $value=false;

    }
    return $value;
}
?>