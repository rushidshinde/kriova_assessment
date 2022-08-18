<?php
    require 'PHPMailer/class.phpmailer.php';
    include 'connect.php';
    if(isset($_POST['send'])){
        $email = $_POST['email'];
        $countQuery = "SELECT COUNT(*) AS `email_count` FROM `employee_table` where `employee_email` = '$email'";
        $countRun = mysqli_query($conn, $countQuery);
        $rowCount = mysqli_fetch_assoc($countRun)['email_count'];
        if(!($rowCount == 1)){
            echo "<script>alert('Email address does not exist in database')</script>";
            echo "<script>location.href='forgotpassword.php'</script>";
        } else {
            $readQuery = "SELECT * FROM employee_table WHERE employee_email ='$email'";
            $readRun = mysqli_query($conn, $readQuery);
            while ($row = mysqli_fetch_array($readRun)){
                    $password = $row['employee_password'];
                $name = "Kriova";
                $msg = "Please use this password to login : " . $password;
                $subject="Password recovery email for your account";
            
                $mail = new PHPMailer(true); 
            
            	$mail->IsSMTP();                           
            	$mail->SMTPAuth   = false;                 
            	$mail->Port       = 25;                    
            	$mail->Host       = "localhost"; 
            	$mail->Username   = "mayur@awesomestore.app";   
            	$mail->Password   = "9975888110";            
            
            	$mail->IsSendmail();  
            
            	$mail->From       = "mayur@awesomestore.app";
            	$mail->FromName   = "Kriova";
            
            	$mail->AddAddress($email);
                $mail->Subject  = $subject;
            	$mail->WordWrap   = 80; 
            
                $mail->MsgHTML($msg);
            	$mail->IsHTML(true); 
                     
                if(!$mail->Send()){
                        echo "<script>alert('Failed to Recover your password, try again')</script>";
                        echo "<script>location.href='forgotpassword.php'</script>";
                } else {
                   	echo "<script>alert('Email sent successfully to".$email."')</script>";
                    echo "<script>location.href='signin.php'</script>";
                }
            }
        }
    } else {
        echo "<script>alert('Invalid access..!')</script>";
        echo "<script>location.href='forgotpassword.php'</script>";
    }
?>