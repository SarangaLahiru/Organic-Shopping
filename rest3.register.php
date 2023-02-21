<?php
include "db.inc.php";
include "rest3.validation.php";
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];

    if(emptyInput($name,$email,$pass,$repass)){
      
        header("location:rest3.user.register.php?err=emptyInput");
    }
    else if(invalidName($name)){
        header("location:rest3.user.register.php?err=invalidName");
    }
    else if(invalidPass($pass,$repass)){
        header("location:rest3.user.register.php?err=invalidpass");
    }
    else{
        register($conn,$name,$pass,$repass,$email);
    }
}


function register($conn,$name,$pass,$repass,$email){
    $sql="INSERT INTO  user3(username,email,password) VALUES (?,?,?) ";
    $stmt=mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,"sss",$name,$email,$pass);
        mysqli_stmt_execute($stmt);
        session_start();
        
        $_SESSION['user']=$name;
        header("location:rest3.sucess.php?err=Successfull");
    }
    else{
        header("location:rest3.user.register.php?err=Unsuccessfull");
    }
}
?>


<?php
if(isset($_POST['btn1'])){

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    if(emptyInput1($email,$pass)){
        header("location:rest3.login.php?err=emptyInput1");

    }
    else{
        loginuser($conn,$email,$pass);
    }

}

function loginuser($conn,$email,$pass){
    $sql="SELECT * FROM user3 WHERE email=?";
    $stmt=mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($stmt,$sql)){

        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);

        $data=mysqli_stmt_get_result($stmt);

        if($row=mysqli_fetch_assoc($data)){
            session_start();
            $_SESSION['user_name']=$row['username'];
            $_SESSION['user_email']=$row['email'];

            if($row['password']==$pass){

            header("location:rest3.php?err=welcome");

        }
        else{
            header("location:rest3.login.php?err=invalidpassword_Or_Username");
        }
    }
}
}
?>