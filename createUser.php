<?php
    include 'connect.php';
    if(isset($_POST['registerdata'])){
        $name = $_POST['name'];
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmPassword'];
                
        $countQuery = "SELECT COUNT(*) AS `email_count` FROM `employee_table` where `employee_email` = '$email'";
        $countRun = mysqli_query($conn, $countQuery);
        $rowCount = mysqli_fetch_assoc($countRun)['email_count'];
        if($rowCount > 0){
            echo "<script>alert('Email address is already registered')</script>";
            echo "<script>location.href='signin.php'</script>";
        } else {
            $insertQuery ="INSERT INTO employee_table VALUES (NULL,'$name',NULL,'$email',NULL,NULL,NULL,NULL,NULL,NULL,'$password')";
            if (mysqli_query($conn,$insertQuery)){
                session_start();
                $_SESSION['employee_email'] = $email;
                echo "<script>location.href='profile.php'</script>";
            } else {
                echo "<script>alert('Sorry unable to register')</script>";
                echo "<script>location.href='index.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid access..!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>