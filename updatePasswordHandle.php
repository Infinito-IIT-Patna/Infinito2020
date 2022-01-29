<?php
require 'connect.php';
session_start();
$infid = $_SESSION['infid'];
if($_SESSION['validOtp']=="active"){
if(isset($_POST['updatePass'])){
    $newPass = $_POST['newPass'];
    $confNewPass = $_POST['confNewPass'];
    if($newPass == $confNewPass){
        $hash=password_hash($newPass,PASSWORD_DEFAULT);
        $sql = "UPDATE `infinito2021php` SET `Password`='$hash' WHERE `InfId` = '$infid'";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:signIn.php');
            session_unset();
            session_destroy();
        }else{
            echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
        <strong>Error!!</strong>'.'Could not update the password due to technical glitches. Please try again.'.
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
        </div>';
        }
    }else{
        //Passwords do not match
        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
        <strong>Failed! Passwords do not match.</strong>'.'Try Again.'.
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
        </button>
        </div>';
    }
}
}
else{
    header('location:forgotPassword.php');
}