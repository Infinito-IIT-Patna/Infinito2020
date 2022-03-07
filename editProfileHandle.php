<?php
session_start();
$showerror=false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
if($_SERVER['REQUEST_METHOD']=="POST"){ 
    $name=$_POST['name'];
    $college=$_POST['clg'];
    $phno=$_POST['phno'];   
    if(isset($_POST['changePass'])){
        $password=$_POST['password'];
        $hash=password_hash($password,PASSWORD_DEFAULT);
    }
    else{
        $sql="SELECT * FROM `infinito2021php` where `InfId`='$infid'";
        $result=mysqli_query($conn,$sql);
        if ($result) {       
            $row=mysqli_fetch_assoc($result);
            $hash = $row['Password'];
        }
    }
    $sql = "UPDATE `infinito2021php` SET `Name` = '$name' , `Password`='$hash',`College`='$college',`Phone Number`='$phno' WHERE `InfId` = '$infid'";
    $result=mysqli_query($conn,$sql);

    if ($result) {
        header("location:profile.php");
    }
    else{
        $showerror="Error ! Please try again.";
    }
}
}else{
    header('location:signIn.php');
        session_unset();
        session_destroy();    
    
}
?>