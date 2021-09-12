<?php
if(isset($_POST['login-submit'])){
require 'dbh.inc.php';
$mailuid=$_POST['mailuid'];
$password=$_POST['psw'];


if(empty($mailuid)|| empty($password)){
header("Location: ../index.php?error=emptyfeilds");
exit();
}

else{
    $sql="SELECT * FROM users WHERE uidUsers=? OR emialusers=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        
        header("Location: ../index.php?error=sqlerror" ); 
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
        mysqli_stmt_execute($stmt);
     
        $result=mysqli_stmt_get_result($stmt);
       if($row=mysqli_fetch_assoc($result)) {
$pwdcheck=password_verify($password,$row['pwdUsers']);
if($pwdcheck==false){
    
    header("Location: ..//index.php?error=wrongpassword");
    $alert="<script >alert('Wrong User Name Or Password Try Again!'); </script>";
    echo $alert;
exit();
}
else if( $pwdcheck==true){

session_start();
$_SESSION['userid']=$row['idUsers'];
$_SESSION['useruid']=$row['uidUsers'];
header("Location: ..//index.php?login=success");
}
else{
   
    $alert="<script >alert('No User found !'); </script>";
    echo $alert;
    header("Location: ..//index.php?error=nouserfound");
    exit();

}
       }
      
    }



        
       
    }
}

        