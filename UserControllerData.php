<?php
require_once("Connection.php");
session_start();
$errors = array();
$success = array();

 //Login
if (isset($_POST['Login'])) {
 
       
        $UserEmail = mysqli_real_escape_string($con, $_POST['UserEmail']);
        $UserPassword = mysqli_real_escape_string($con, $_POST['UserPassword']);
         
           
          $check_email = "SELECT * FROM users_tb WHERE UserEmail = '$UserEmail'";
          $res = mysqli_query($con, $check_email);

          if (mysqli_num_rows($res) > 0) {
              $fetch = mysqli_fetch_assoc($res);
              $fetch_pass = $fetch['UserPassword'];
              if (password_verify($UserPassword, $fetch_pass)) { 
                      $_SESSION['name'] = $fetch['UserName'];
                      $_SESSION['email'] = $UserEmail;
                      $_SESSION['type'] = 'Barber';
                      $_SESSION['password'] = $UserPassword;

                      header("location: Barber.php");
                  } 
               else {
                  $errors['email'] = "Incorrect user password!";
              }
          } else {
              $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
          }
        }
//Signup
        if (isset($_POST['UserRegister'])) {

                $UserName = mysqli_real_escape_string($con, $_POST['UserName']);
                $UserEmail = mysqli_real_escape_string($con, $_POST['UserEmail']);
                $UserPassword = mysqli_real_escape_string($con, $_POST['UserPassword']);
                $ConfirmUserPassword = mysqli_real_escape_string($con, $_POST['ConfirmUserPassword']);
              
              
              
                $UserNameQuery = "SELECT * FROM users_tb  WHERE UserName = '$UserName'";
                $ResultUserName = mysqli_query($con, $UserNameQuery);
              
                $UserEmailQuery = "SELECT * FROM users_tb  WHERE UserEmail = '$UserEmail'";
                $ResultUserEmail = mysqli_query($con, $UserEmailQuery);
              
              
                if (mysqli_num_rows($ResultUserName) > 0) {
                  $errors['UserName'] = "UserName  that you have entered is already exist.";
                  if (mysqli_num_rows($ResultUserEmail) > 0)
                    $errors['UserEmail'] = "UserEmail  that you have entered is already exist.";
                  if ($UserPassword !== $ConfirmUserPassword)
                    $errors['UserPassword'] = "Password does't matched.";
                } else 
                 if (mysqli_num_rows($ResultUserEmail) > 0) {
                  $errors['UserEmail'] = "UserEmail  that you have entered is already used.";
                  if ($UserPassword !== $ConfirmUserPassword)
                    $errors['UserPassword'] = "Password does't matched.";
                } else if ($UserPassword !== $ConfirmUserPassword) {
                  $errors['UserPassword'] = "Password does't matched.";
                } else {
              
                  $UserPassword = password_hash($UserPassword, PASSWORD_BCRYPT);
                  $InsertQuery = " INSERT INTO `users_tb`
                   (`UserId`, `UserName`, `UserEmail`, `UserPassword`, `UserCode`) 
                   VALUES (NULL, '$UserName', '$UserEmail', '$UserPassword', '0')";
                  $CheckQuery = mysqli_query($con, $InsertQuery);
              
                  if ($CheckQuery) {
                    $_SESSION['name'] = $UserName;
                    $_SESSION['email'] = $UserEmail;
                    $_SESSION['password'] = $UserPassword;
                    $_SESSION['type'] = 'Barber';
                    header("location: Home.php");
                  } else {
                    $errors['db-error'] = "Failed while inserting data into database!";
                  }
                }
              }

//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
        echo 'Forgot';
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM users_tb WHERE UserEmail='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if (mysqli_num_rows($run_sql) > 0) {
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users_tb SET UserCode = $code WHERE UserEmail = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if ($run_query) {
                $_SESSION['email'] = $email;
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                //change
                $sender = "f180207@nu.edu.pk";
                if (mail($email, $subject, $message, $sender)) {
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: ResetCode.php');
                    exit();
                } else {
                    $errors['otp-error'] = "Failed while sending code!";
                }
            } else {
                $errors['db-error'] = "Something went wrong!";
            }
        } else {
            $errors['email'] = "This email address does not exist!";
        }
      }
      
      //if user click verification code submit button
if (isset($_POST['check-code'])) {
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM users_tb WHERE UserCode = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if (mysqli_num_rows($code_res) > 0) {
      
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['UserCode'];
            $email = $fetch_data['UserEmail'];
         
            $code = 0;
            //change status to verified
            $update_otp = "UPDATE users_tb SET UserCode = $code WHERE UserCode = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if ($update_res) {
              $_SESSION['name'] = $fetch_data['UserName'];
                $info = "Please create a new password that you don't use on any other site.";
              $_SESSION['info'] = $info;
                header("location: NewPassword.php");
            } else {
                $errors['otp-error'] = "Failed while updating code!" . $update_otp;
            }
        } else {
            $errors['otp-error'] = "You've entered incorrect code!";
        }
      }


      //if user click change password button
if (isset($_POST['change-password'])) {
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if ($password !== $cpassword) {
            $errors['password'] = "Confirm Password does't matched.";
        } else {
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $password = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE users_tb SET UserCode = $code, UserPassword = '$password' WHERE UserEmail = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if ($run_query) {
              $_SESSION['email'] = $email;
              $_SESSION['type'] = 'Barber';
              $_SESSION['password'] = $password;
                header('Location: Barber.php');
            } else {
                $errors['db-error'] = "Failed to change your password!";
            }
        }
      }
?>
