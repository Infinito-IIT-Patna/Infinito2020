<?php
include 'connect.php';
if(isset($_POST["otp"])){
    $infid = $_POST['infid'];

    $sql = "SELECT * FROM `infinito2021php`";
    $result = mysqli_query($conn, $sql);
    $unique = "false";

    while($check = mysqli_fetch_assoc($result)){
            //$cur_infid -> email of current row
            $cur_infid = $check['InfId'];
            //checking
            if($infid == $cur_infid)
            {
                $unique = "true";
                break;
            }
        }
    if($unique=="false"){
        //if Infinito ID does not exist then display a message
        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020;" >
        <strong> No such Infinito ID found.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">x</span>
        </button>
        </div>';
    }
    else{
        //sending otp if infinito id is correct
        $sql = "SELECT * FROM `infinito2021php` WHERE `InfId`='$infid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $to = $row['Email'];
        $name = $row['Name'];
        $subject = "OTP (Forgot Password)";
        $otp = rand(100000,999999);
        $message = "Your OTP is <strong>".$otp."</strong> .<br>";
        require 'mail.php';
        if($mail->send()){
            session_start();
            $_SESSION['otp']= $otp;
            $_SESSION['infid'] = $infid;
            header('location:validateOTP.php');
        }
        else{
            echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020;" >
            <strong> Sorry OTP could not be send due to technical errors. Please enter Infinito ID again.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
            </button>
            </div>';
        }
    }
    
}