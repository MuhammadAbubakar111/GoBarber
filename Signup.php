<?php
include('UserControllerData.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body id="register">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <header class="mb-5">
                    <h3 class="mt-0 white-text">Sign-up</h3>
                    <p class="grey-text mb-4">Our Master Barbers utilise the best quality tools for the continuously-evolving contemporary precision cuts, as well as traditional barber services, including hot towel shaves, beard trimming and styling. </p>
                    <p class="grey-text">Our clients receive the highest quality barbering and grooming services from well-trained, professional barbers, with all services tailored to the specific needs of each of our clients.  
                    </p>
                </header>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form action="Signup.php" method="post" class="tm-signup-form">
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
                    <div class="input-field">
                        <input placeholder="UserName" id="UserName" name="UserName" type="text" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Email" id="UserEmail" name="UserEmail" type="email" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Password" id="UserPassword" name="UserPassword" type="password" class="validate" required>
                    </div>
                    <div class="input-field">
                        <input placeholder="Re-type Password" id="ConfirmUserPassword" name="ConfirmUserPassword" type="password" class="validate" required>
                    </div>
                    <div class="text-left mt-4">
                        <button type="submit" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-0" name="UserRegister">Register</button>
                        
                    </div>
                    <div class="text-left mt-4">
                        <p>Already have an account?</p>
                        <a href="index.php" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Login</a>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
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