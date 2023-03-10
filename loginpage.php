

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | CvSU One</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


    <script src="script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</head>

<!-- START OF DOUBLE NAVIGATION -->

<?php

include('navbar.php');
// include_once('includes/functions.php');


if (isset($_SESSION['student_exist'])) {
    header('Location:reqForm.php');
} else {
}

?>


<style> 
.Error {
        color: red;
    }
</style>
<section>
    <div class="general-hero-bg">
        <div class="general-hero-cont">
            <div class="left-login">

                <h3>Cavite State University - Silang Campus</h3>
                <br>
                <h1>
                    Welcome to cvsu.one, keep your documents in one place...
                </h1>
                <br>
                <a href="#">Know More!!</a>

            </div>
            <div class="right">

                <div class="login-card" id="login-tab">

                    <div class="semi-header">
                        <p>Login using your<span> <img src="assets/cvsuone-logo-black.png" alt=""></span>
                            account </p>

                            <?php include('includes/errors.php')?>
                    </div>

                    <div class="forms">
                        <div class="Error">
                            <?php
                    if(isset($_SESSION["error2"])){
                        $error2 = $_SESSION["error2"];
                        echo "<span class=error>$error2</span>";
                    } elseif(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span class=error>$error</span>";
                    }elseif(isset($_SESSION["error3"])){
                        $error3 = $_SESSION["error3"];
                        echo "<span class=error>$error3</span>";
                    }

                        ?>
                    </div>
                        <form action="includes/inc.login.php" method="post">
                            <label for="">Student Number</label>
                            <input type="text" name="studentNumber" required>
                    
                            <label for="">Email</label>
                            <input type="text" name="email" required>
                           
                            <label for="">Password</label>
                            <input type="password" name="password" required>
                       
                            <button type="submit" name="studentLogin">Login</button>    
                    </div>
                    </form>
                    <div>
                        <span>Not yet registered? <a href="pre-reg.php">Click Here</a></span>
                    </div>

                </div>





            </div>
        </div>
    </div>
</section>


<?php

include('footer.php');

?>