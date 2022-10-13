<?php
$showerror=false;
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    header('location:profile.php');   
}
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $infidoremail=$_POST['infid/email'];
    $pass=$_POST['password'];
    // $email=$_POST['email'];

    include 'connect.php';

    $sql="SELECT * FROM `infinito2022php` WHERE `InfId`='$infidoremail'";
     $result=mysqli_query($conn,$sql);

    $sql1="SELECT * FROM `infinito2022php` WHERE `Email`='$infidoremail'";
    $result1=mysqli_query($conn,$sql1);

    $num=mysqli_num_rows($result);

     $num1=mysqli_num_rows($result1);
     
     if ($num==1) {
         $row=mysqli_fetch_assoc($result);
         $hash=$row['Password'];
         
         $verification=password_verify($pass,$hash);

         if ($verification) {

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['infid']=$row['InfId'];
            $_SESSION['email']=$row['Email'];
            header("location:profile.php");
         }
         else{
             $showerror="Error! Wrong password";
         }
     }
     else if($num1==1){
        $row=mysqli_fetch_assoc($result1);
         $hash=$row['Password'];
         
         $verification=password_verify($pass,$hash);

         if ($verification) {

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['infid']=$row['InfId'];
            $_SESSION['email']=$row['Email'];
            header("location:profile.php");
         }
         else{
             $showerror="Error! Wrong password";
         }
     }
    else{
        $showerror= "Error! Invalid credentials";
    }

}
