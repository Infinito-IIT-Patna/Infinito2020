<?php
include "connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
                // Submit record to a database
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
                    //Inserting into the table
                    //$sql = "INSERT INTO `infinito2021php` (`Serial Number`,`InfId`, `Name`, `Email`,`Password`, `College`, `ID`, `Phone Number`, `Gender`, `dt`) VALUES (NULL, '$infid' , '$name', '$email', '$pass', '$clg', '$clgid', '$phno', '$gen', current_timestamp())";
                    //$result = mysqli_query($conn, $sql);
                    //Send a mail
                    
                        //Fetching the Last Record
                        $sql = "SELECT * FROM `credentials`";                        
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        $sourceEmail = $row['Email'];
                        $passEmail = $row['Password'];
                            $to = $email;
                            $subject = "Infinito 2021 Registration Complete.";
                            $message = "Hello ".$name.",<br>Thank you for registering.<br>You have successfully completed the registration process.<br>".
                                       "Your Infinito 2021 ID is <strong>".$infid."</strong>".
                                       "<br>Kindly note your Infinito ID, it will be required to register for any events.".
                                        "Your Infinito ID is your unique verification ID for the fest.<br>".
                                        "Wish you a great time ahead.".
                                        "<br><br>".
                                        "Regards,<br>".
                                        "Team Infinito";
                            //$headers = 'From: testmailinfinito@gmail.com' . "\r\n" .
                                        //'MIME-Version:1.0'. "\r\n" .
                                        //'Content-Type: text/html; charset=utf-8';
                            require 'PHPMailerAutoload.php';
                            $mail = new PHPMailer;
                            //$mail->SMTPDebug = 4;                               // Enable verbose debug output
                            $mail->isSMTP();                                      // Set mailer to use SMTP
                            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                            $mail->Username = $sourceEmail;                 // SMTP username
                            $mail->Password = $passEmail;                           // SMTP password
                            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                            $mail->Port = 587;                                    // TCP port to connect to

                            $mail->setFrom($sourceEmail, 'Infinito');
                            $mail->addAddress($email, $name );     // Add a recipient
                            //$mail->addAddress('ellen@example.com');               // Name is optional
                            $mail->addReplyTo($sourceEmail, 'Information');
                            //$mail->addCC('cc@example.com');
                            //$mail->addBCC('bcc@example.com');

                            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                            $mail->isHTML(true);                                  // Set email format to HTML

                            $mail->Subject = $subject;
                            $mail->Body    = $message;
                            $mail->AltBody = 'You have been successfully registered.';

                            if(!$mail->send()) {
                                echo '<div class="alert alert-success alert-dismissible show" role="alert" style="position:absolute; top:75px; width:100%; color:red; background: #ff000020; " >
                                    <strong>Failed! </strong>'.'Try Again.<br>'.
                                    'Mailer Error: ' . $mail->ErrorInfo.
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    </div>';
                                    //$sql = "DELETE FROM `infinito2021php` WHERE `InfId` = '$infid'";
                                   // $result = mysqli_query($conn, $sql);
                                    
                                
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
                                $_SESSION['name']=$name;
                                $_SESSION['email']=$email;
                                $_SESSION['infid']=$infid;
                                $_SESSION['clg']=$clg;
                                $_SESSION['oth_clg_name']=$oth_clg_name;
                                $_SESSION['gen']=$gen;
                                $_SESSION['phone']=$phno;
                                $_SESSION['password']=$pass;
                                $_SESSION['clgid']=$clgid;

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