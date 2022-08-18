<?php
    include 'connect.php';
    session_start();

    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    if(isset($_SESSION['employee_email'])){
        echo "<script>location.href='profile.php'</script>";
    } elseif(!(isset($_POST['email']))){
        echo "<script>alert('Invalid access..!')</script>";
        echo "<script>location.href='signin.php'</script>";
    } else {
        $readQuery = "SELECT * FROM `employee_table` WHERE employee_email = '".$email."';";
        $readRun = mysqli_query($conn, $readQuery);
        $rowCount = mysqli_num_rows($readRun);
        if($rowCount > 0){
            while ($row = mysqli_fetch_array($readRun)){
                if($password == $row["employee_password"]){                    
                    $_SESSION['employee_email'] = $row['employee_email'];
                    // fetch all fields from emp_table
                    echo "<script>location.href='profile.php'</script>";
                    mysqli_close($conn);
                } else {
                    echo "<script>alert('Invalid password..!')</script>";
                    echo "<script>location.href='signin.php'</script>";    
                }                                         
            }
        } else {
            echo "<script>alert('User not registerd..!')</script>";
            echo "<script>location.href='signin.php'</script>";
        }                       
    }
?>