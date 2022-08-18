<?php
    include 'connect.php';
    session_start();
    if(isset($_SESSION['employee_email'])){
        $email = $_SESSION['employee_email'];
        $readQuery = "SELECT * FROM `employee_table` WHERE employee_email = '". $email ."'";
        $readRun = mysqli_query($conn, $readQuery);
        while ($row = mysqli_fetch_array($readRun)){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- JS only -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <title>Profile</title>
</head>
<body>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent navbarClass">
            <div class="container-fluid">
                <a class="navbar-brand h1 text-white text-uppercase text-decoration-none ms-5">Kriova</a>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">                    
                    <a href="destroySession.php" class="btn btn-light">Sign out</a>
                </div>                
            </div>
        </nav>
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-5 d-flex align-items-center"
            style="min-height: 300px; background-image: url(./pexels-j-u-n-e-1767434.jpg); background-size: cover; background-position: center bottom;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="display-2 text-white">Hello, <?=$row['employee_name'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>                                
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="./updateprofile.php" method="post">
                                <h6 class="heading-small text-muted mb-4">Employee information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empName">Name</label>
                                                <input type="text" name="name" id="empName" class="form-control form-control-alternative text-capitalize" value="<?=$row['employee_name'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="empEmail">Email address</label>
                                                <input type="email" name="email" id="empEmail" class="form-control form-control-alternative" value="<?=$row['employee_email'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empDob">Date of Birth</label>
                                                <input type="date" name="birthdate" id="empDob" class="form-control form-control-alternative" value="<?=$row['employee_dob'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empPhone">Phone Number</label>
                                                <input type="number" name="phone" id="empPhone" maxlength="10" class="form-control form-control-alternative" value="<?=$row['employee_phone'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empStreet">Street</label>
                                                <input id="empStreet" name="street" class="form-control form-control-alternative" value="<?=$row['employee_street'] ?>" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empCity">City</label>
                                                <input id="empCity" name="city" class="form-control form-control-alternative" value="<?=$row['employee_city'] ?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empState">State</label>
                                                <input type="text" name="state" id="empState" class="form-control form-control-alternative" value="<?=$row['employee_state'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="empCountry">Country</label>
                                                <input type="text" name="country" id="empCountry" class="form-control form-control-alternative" value="<?=$row['employee_country'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="empPincode">Postal code</label>
                                                <input type="number" name="pincode" id="empPincode" class="form-control form-control-alternative" value="<?=$row['employee_pincode'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex flex-row justify-content-end mb-4">
                                                <button type="submit" name="updatedata" class="btn btn-primary ms-auto">Update Profile </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="d-flex flex-wrap align-items-center justify-content-xl-between mx-5 py-3 border-top">
        
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 my-md-3 text-white">© 2022 Kriova</span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="link-primary" href="#"><i class="bi bi-twitter"></i></a>
            </li>
            <li class="ms-3">
                <a class="link-primary" href="#"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="ms-3">
                <a class="link-primary" href="#"><i class="bi bi-instagram"></i></a>
            </li>
        </ul>
    </footer>
    <canvas class="background"></canvas>
    <script>
        var particles = Particles.init({
            selector: '.background',
            color: ['#DA0463', '#404B69', '#DBEDF3'],
            connectParticles: true
        });
        Particles.init({
            selector:'.background',
            maxParticles:450,
            color: ['#DA0463', '#48F2E3'],
            responsive: [
                {
                    breakpoint:768,
                    options: {
                        maxParticles:200,
                        connectParticles:true
                    }
                }, {
                    breakpoint:425,
                    options: {
                        maxParticles:100,
                        connectParticles:true
                    }
                }, {
                    breakpoint:320,
                    options: {
                        maxParticles:100,
                        connectParticles: false
                    }
                }
            ]
        });
    </script>
</body>
</html>
<?php
        }
    } else {
        echo "<script>alert('Invalid access..!')</script>";
        echo "<script>location.href='signin.php'</script>";
    }        
?>