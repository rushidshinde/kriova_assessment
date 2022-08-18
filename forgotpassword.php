<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <title>Forgot Password</title>
</head>

<body>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent navbarClass">
            <div class="container-fluid">
                <a class="navbar-brand h1 text-white text-uppercase text-decoration-none ms-5">Kriova</a>
            </div>
        </nav>
        <!-- Body -->
        <div class="row signSection">
            <div class="col-md-12 col-sm-12">
                <section class="vh-100" style="background: transparent;">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">
                                <div class="card text-black" style="border-radius: 25px;">
                                    <div class="card-body p-md-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                                <p class="text-center h2 fw-bold mb-1 mx-1 mx-md-4 mt-4">Forgot your password?</p>
                                                <p class="text-center mb-5 mx-1 mx-md-4">Please enter the email you use to sign in to Kriova</p>
                                                <form class="mx-1 mx-md-4" action="handler.php" method="post">                                                
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <input type="email" name="email" placeholder="Email" id="empEmail" class="form-control" required />
                                                        </div>
                                                    </div>                                                
                                                    <div class="d-flex flex-row align-items-center mb-4">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <button type="submit" name="send" class="form-control btn btn-primary">Recover Password</button>
                                                        </div>
                                                    </div>
                                                    <p class="text-center mb-5 mx-1 mx-md-4"><a href="./signin.php" class="text-decoration-none">Back to Sign in</a></p>
                                                </form>
                                            </div>
                                            <div
                                                class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
            selector: '.background',
            maxParticles: 450,
            color: ['#DA0463', '#48F2E3'],
            responsive: [
                {
                    breakpoint: 768,
                    options: {
                        maxParticles: 200,
                        connectParticles: true
                    }
                }, {
                    breakpoint: 425,
                    options: {
                        maxParticles: 100,
                        connectParticles: true
                    }
                }, {
                    breakpoint: 320,
                    options: {
                        maxParticles: 100,
                        connectParticles: false
                    }
                }
            ]
        });
    </script>
</body>

</html>