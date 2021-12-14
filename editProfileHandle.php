<?php
$showerror=false;

if($_SERVER['REQUEST_METHOD']=="POST"){ 
    $name=$_POST['name'];
    $college=$_POST['clg'];
    $phno=$_POST['phno'];
    $password=$_POST['password'];
    $hash=password_hash($password,PASSWORD_DEFAULT);

    $sql = "UPDATE `infinito2021php` SET `Name` = '$name' , `Password`='$hash',`College`='$college',`Phone Number`='$phno' WHERE `InfId` = '$infid'";
    $result=mysqli_query($conn,$sql);

    if ($result) {
        header("location:profile.php");
    }
    else{
        $showerror="Error ! Please try again.";
    }
}
?>