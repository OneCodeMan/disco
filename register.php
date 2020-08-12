<?php 
require 'config/config.php';
require 'includes/handlers/forms/register_handler.php';
require 'includes/handlers/forms/login_handler.php';
?>

<html>
<head>
    <title>OdyTuts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>

    <?php 
        if(isset($_POST['register_button'])) {
            echo '
            <script>
            $(document).ready(function() {
                $("#welcome-container").hide();
                $("#register-container").show();
            });
            </script>
            ';
        }

        if(isset($_POST['login_button'])) {
            echo '
            <script>
            $(document).ready(function() {
                $("#welcome-container").hide();
                $("#login-container").show();
            });
            </script>
            ';
        }
    ?>
    <div class="container">
        <div class="title">
            <h1>OdyTuts</h1>
        </div>
        <div id="welcome-container" class="col-5 component-container">
            <h2 id="welcome-title">
                Learn anything.
            </h2>
            <p id="welcome-message">
                Life is too short to spend all that time 
                on your phone, wallowing about past failures and 
                failed relationships.
                Your knees may be weakening, 
                your beer gut may be growing, and your hairline may be receding,
                but your heart is still beating. 
                So hop on.
                While there is life, there is hope.
                We offer online courses for achievers. 
                <strong>We take you seriously, because that's what you deserve.</strong>
                Your time and attention are valuable to us. 
                Sign up now. 
                Because if not now, then when?
                Let's get smart. 
            </p>
            <button type="button" id="register-page-btn" class="btn">Register</button>
            <button type="button" id="login-page-btn" class="btn">Login</button>
        </div>
        <div class="col-5 hidden component-container" id="register-container">
            <form action="register.php" method="POST">
                <h1 class="form-title">Register</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="first_name" placeholder="First Name" minlength="1" maxlength="60" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="last_name" placeholder="Last Name" minlength="1" maxlength="60" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="confirm_email" placeholder="Confirm Email" required>
                    </div>
                    <?php if(in_array("Emails don't match!<br>", $errors)) echo "Emails don't match!<br>"?>
                    <?php if(in_array("Email already in use<br>", $errors)) echo "Email already in use<br>"?>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="password" name="password" placeholder="Password" minlength="5" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" minlength="5" required>
                    </div>
                    <?php if(in_array("Your passwords do not match!<br>", $errors)) echo "Your passwords do not match!<br>"?>
                    <?php if(in_array("Your password can only contain english characters or numbers<br>", $errors)) echo "Your password can only contain english characters or numbers<br>"?>
                </div>

                <input type="submit" name="register_button" value="Register" class="btn btn-dark" required>
            </form>
            <a href="#" id="register-back-to-welcome">Go Back</a>
        </div>
        
        <div class="col-5 hidden component-container" id="login-container">
            <form action="register.php", method="POST">
                <h1 class="form-title">Log In</h1>
                
                <div class="form-group">
                    <input type="email" name="login_email" placeholder="Email" value="" required>
                </div>
            
                <div class="form-group">
                    <input type="password" name="login_password" placeholder="Password">
                </div>
                <?php if(in_array("Email or password incorrect<br>", $errors)) echo "Email or password incorrect<br>"?>
                <input type="submit" name="login_button" value="Login" class="btn btn-dark"> 
            </form>
            <a href="#" id="login-back-to-welcome">Go Back</a>
        </div>

    </div>

</body>
</html>