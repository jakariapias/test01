<?php
require 'config.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User exists, login successful
        echo '<script>alert("Login successful");</script>';
        header("location: index.html");
        // You can redirect the user to another page after successful login
        // For example, redirect to a dashboard page:
        // header("Location: dashboard.php");
    } else {
        // Invalid credentials
        echo '<script>alert("Invalid email or password");</script>';
    }
}

mysqli_close($con);
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice purpose</title>

    <!-- slick link -->
    <link rel="stylesheet" href="CSS/slick.css">
    <!-- google font start -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- google font end -->


    <!-- font awesome start -->
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <!-- font awesome end -->

    <!-- bootstrap start -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <!-- bootstrap end -->

    <!-- css start -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- css end -->

</head>

<body>




<!-- login  part start -->


<section id="login-part">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4"></div>

            <div class="col-lg-4">

               <h2 class="text-center" style="text-transform: uppercase; font-weight: 700; color: #594f72; font-family: Roboto, sans-serif;">Login form</h2>
                <form action="login.php" method="POST">

                    <div class="mt-3">
                       <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="user_email" placeholder="Enter your Email">
                    </div>

                    <div class="mt-3">
                       <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="user_password" placeholder="Enter your Password">
                    </div>

                    <div class="mt-3 mb-3">
                        <button class="btn btn-success" name="submit" type="submit">Login</button>
                    </div>

                </form>

                <h6>Not have account ? <a href="registration.php" style="text-decoration: none;">Registration Here</a></h6>

            </div>

            <div class="col-lg-4"></div>
        </div>
    </div>
</section>



<!-- login part end -->






    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>

</body>

</html>