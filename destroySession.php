<?php
    include 'connect.php';
    session_start();
    if(isset($_SESSION['employee_email'])){            
        session_destroy();
        echo "<script>alert('Sign out successfully!')</script>";
        echo "<script>location.href='signin.php'</script>";
    } else{
        echo "<script>alert('Invalid access..!')</script>";
        echo "<script>location.href='signin.php'</script>";
    }  
?>