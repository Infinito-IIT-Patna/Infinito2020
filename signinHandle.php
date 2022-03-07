<?php
$showerror=false;
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    header('location:profile.php');   
}
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $infcode=$_POST['infid'];
    $pass=$_POST['password'];

    include 'connect.php';

    $sql="SELECT * FROM `infinito2021php` WHERE `InfId`='$infcode'";
     $result=mysqli_query($conn,$sql);

     $num=mysqli_num_rows($result);
     
     if ($num==1) {
         $row=mysqli_fetch_assoc($result);
         $hash=$row['Password'];
         
         $verification=password_verify($pass,$hash);

         if ($verification) {

             session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['infid']=$infcode;

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
