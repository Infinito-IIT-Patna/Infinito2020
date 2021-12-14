<?php
session_start();
include 'connect.php';
$infid = $_SESSION['infid'];
$correct_otp = $_SESSION['otp'];

if(isset($_POST['validate'])){
    $user_otp = $_POST['user_otp']; 
    if($user_otp == $correct_otp)
    {
        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%;" >
                            <strong>Success!! OTP Validated.'.
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            </div>';
        $_SESSION['infid'] = $infid;
        header('location:updatePassword.php');
    }
    else{
        //If worng OTP entered
        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020;" >
            <strong>OTP you entered is wrong.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
            </button>
            </div>';
    }
}