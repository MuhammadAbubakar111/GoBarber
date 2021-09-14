<?php
include('UserControllerData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body id="login">
    <div class="container">
        <div>
            <img src="./img/gobarber-logo.png" alt="logo" class=" row gobarber-forget"/>
        </div>
        <div class="row">
            <div class="forget-container">
                <form action="Forgot.php" method="post" class="tm-bg-black p-5 h-100">
                <div class="input-field">
                                                <?php
                                                if (count($errors) > 0) {
                                                ?>
                                                        <div class="alert alert-danger text-center p-2">
                                                                <?php
                                                                foreach ($errors as $showerror) {
                                                                        echo $showerror.'<br>';
                                                                }
                                                                ?>
                                                        </div>
                                                <?php
                                                }
                                                ?>
                                        </div>
                    <h1 class="h2">Reset Password</h1>
                    <p>Enter your email address to reset your password</p> 
                    <div class="input-field mb-5">
                        <input placeholder="Email" id="email" name="email" type="email" class="validate" required>
                    </div>
                    <div class="tm-flex-lr">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0" name='check-email' >Continue</button>
                        
                    </div>
                    <a href="index.php" class="white-text small">Login &mdash;</a>
                    <a href="Signup.php" class="white-text small">Register</a>
                </form>
            </div>
            
        </div>
        
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                    Copyright &copy; 2021 &mdash; Go Barber
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>