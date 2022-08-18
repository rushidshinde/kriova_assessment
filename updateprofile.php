<?php
    include 'connect.php';
    session_start();
    if(isset($_SESSION['employee_email']) && isset($_POST['updatedata'])){
        $name = $_POST['name'];        
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $email = $_SESSION['employee_email'];
        $updateQuery = "UPDATE `employee_table` SET `employee_name`='$name',`employee_dob`='$birthdate',`employee_phone`='$phone',`employee_street`='$street',`employee_city`='$city',`employee_state`='$state',`employee_country`='$country',`employee_pincode`='$pincode' WHERE `employee_email` = '$email'";
        if(mysqli_query($conn, $updateQuery)){
            echo "<script>location.href='profile.php'</script>";
            mysqli_close($conn);
        } else {
            echo "<script>alert('Sorry unable to update data..!')</script>";
            echo "<script>location.href='signin.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid access..!')</script>";
        echo "<script>location.href='signin.php'</script>";
    }
?>