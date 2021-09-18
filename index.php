<?php
require('UserControllerData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/styles.css">
</head>

<body id="login">
        <div class="container">
                <div>
                        <img src="./img/gobarber-logo.png" alt="logo" class=" row gobarber" />
                </div>
                <div class="row tm-register-row tm-mb-35">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                                <form action9*9="index.php" method="post" class="tm-bg-black p-5 h-100">
                                        <div class="input-field">
                                                <?php
                                                if (count($errors) > 0) {
                                                        
                                                ?>
                                                        <div class="alert alert-danger text-center p-2">
                                                                <?php
                                                                foreach ($errors as $showerror) {
                                                                        echo $showerror;
                                                                }
                                                                ?>
                                                        </div>
                                                <?php
                                                }
                                                ?>
                                        </div>
                                        <div class="input-field">
                                                <input placeholder="UserEmail" id="UserEmail" name="UserEmail" type="email" class="validate" required>
                                        </div>
                                        <div class="input-field mb-5">
                                                <input placeholder="UserPassword" id="UserPassword" name="UserPassword" type="password" class="validate" required>
                                        </div>
                                        <div class="tm-flex-lr">
                                                <a href="Forgot.php" class="white-text small">Forgot Password?</a>
                                                <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0" name='Login'>Login</button>
                                        </div>
                                </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                                <header class="font-weight-300 tm-bg-black p-5 h-100">
                                        <h1 class="h2">Go Barber</h1>
                                        <p>Go Barber is an all inclusive space, offering a wide collection of styling services for all ages and genders.</p>
                                        <p>Need an account?</p>
                                        <a href="Signup.php" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Register</a>

                                </header>
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
                $(document).ready(function() {
                        $('select').formSelect();
                });
        </script>
</body>

</html>