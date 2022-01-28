<?php
include "connect.php";
if (isset($_POST['indiReg'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $clg = $_POST['clg'];
            $oth_clg_name = $_POST['oth_clg_name'];
            $gen = $_POST['gen'];
            $phno = $_POST['phone_no'];
            $clgid = $_POST['clgid'];
            $pass = $_POST['create_password'];
            $conf_pass = $_POST['confirm_password'];

            //Connecting to database
            // require('./connect.php');
            include "connect.php";

            // Create a connection
            // $conn = mysqli_connect($servername, $username, $password, $database);
            // Die if connection was not successful
            if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{ 
                // Sql query to be executed 
                $sql = "SELECT * FROM `infinito2021php`";
                $result = mysqli_query($conn, $sql);
                $unique = "true";
                //To check if the email is unique
                //fetching the rows from the begining and checking if same email exists
                while($check = mysqli_fetch_assoc($result))
                {
                    //$cur_email -> email of current row
                    $cur_email = $check['Email'];
                    //checking
                    if($email == $cur_email)
                    {
                        //if same email exists already then display a message
                        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020;" >
                            <strong> This Email Id is already Registered. Please use another email.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                            </button>
                            </div>';
                        $unique = "false";
                        break;
                    }
                }
                //Add the details to database if the email is unique
                if(($clg == "other" && $oth_clg_name != null) || ($clg == "IIT Patna" && $clgid != null)){
                if($pass == $conf_pass){
                if($unique == "true"){
                    
                    //query to select the last element of table so as to generate the Infinito ID
                    //$sql = "SELECT * FROM `infinito2021php` ORDER BY `Serial Number` DESC LIMIT 1";
                    //$result = mysqli_query($conn, $sql);
                    //$row = mysqli_fetch_assoc($result);
                    while(true){
                        //Generating Infinito ID
                        $infno = rand(10000,99999);
                        //Infinito ID
                        $infid = "INF". $infno;
                        $sql = "SELECT * FROM `infinito2021php`";
                        $result = mysqli_query($conn, $sql);
                        $unique = "true";
                        //To check if the email is unique
                        //fetching the rows from the begining and checking if same email exists
                        while($check = mysqli_fetch_assoc($result))
                        {
                            //$cur_infid -> email of current row
                            $cur_infid = $check['InfId'];
                            //checking
                            if($infid == $cur_infid)
                            {
                                $unique = "false";
                                break;
                            }
                        }
                        if($unique == "true")
                        {
                            break;
                        }
                    }
                    $to = $email;
                    $subject = "Infinito 2021 ID.";
                    $message = "Hello ".$name.",<br>Thank you for registering.<br>".
                                "Your Infinito 2021 ID is <strong>".$infid."</strong>".
                                "<br>Confirm your registration by entering this ID.".
                                "<br>Kindly note your Infinito ID, it will be required to register for any events.".
                                "Your Infinito ID is your unique verification ID for the fest.<br>".
                                "Wish you a great time ahead.".
                                "<br><br>".
                                "Regards,<br>".
                                "Team Infinito";
                    //$headers = 'From: testmailinfinito@gmail.com' . "\r\n" .
                                //'MIME-Version:1.0'. "\r\n" .
                                //'Content-Type: text/html; charset=utf-8';
                    require 'mail.php';

                    if(!$mail->send()) {
                        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                            <strong>Failed! </strong>'.'Try Again.<br>'.
                            'Mailer Error: ' . $mail->ErrorInfo.
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            </div>';    
                    } else {
                        echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%;" >
                            <strong>Success!</strong> You have been registered successfully!<br>'
                            .'An email has been sent to <strong>' . $to . '</strong>' .
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            </div>';

                        //**************Redirecting to the confirmation page and inserting there********//

                        session_start();
                        $_SESSION['reg_name']=$name;
                        $_SESSION['reg_email']=$email;
                        $_SESSION['reg_infid']=$infid;
                        $_SESSION['reg_clg']=$clg;
                        $_SESSION['reg_oth_clg_name']=$oth_clg_name;
                        $_SESSION['reg_gen']=$gen;
                        $_SESSION['reg_phone']=$phno;
                        $_SESSION['reg_password']=$pass;
                        $_SESSION['reg_clgid']=$clgid;
                        $_SESSION['registerPlayerActive']="active";
                        header('location:confirmation.php');
                        exit;
                        
                    }
                        
                }
            }
            else{
                //Passwords do not match
                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>Failed! Passwords do not match.</strong>'.'Try Again.'.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
            }
        }
        else{
            //College Name not entered
            if($clg == "other")
            {
            echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>College name not entered.</strong>'.'Try Again.'.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
            }
            else
            {
                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>College Id/ Roll No. not entered.</strong>'.'Try Again.'.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
            }
        }
        }
        }
          

    ?>