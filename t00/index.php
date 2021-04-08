<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form class="main_form" action="index.php" method="post">

        <span>Login</span>
        <input type="text" name="login" required></input>

        <span>Password</span>
        <input type="password" name="password" required></input>

        <span>Confirm Password</span>
        <input type="password" name="confirm_password" required></input>

        <span>Full Name</span>
        <input type="text" name="full_name" required></input>

        <span>E-mail</span>
        <input type="email" name="mail" required></input>

        <div class="buttons">

            <input class="clear_button button" name="clear_button" type="reset" value="Clear">
            <input class="signup_button button" name="signup_button" type="submit" value="Sign Up"></input>

        </div>

    </form>

    <?php

        if(isset($_POST['signup_button'])) {

            $login = $_POST['login'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $full_name = $_POST['full_name'];
            $mail = $_POST['mail'];
            echo "$login<br>$password<br>$full_name<br>$mail";

        }

        if(isset($_POST['signup_button'])) {
        
            if($password != $confirm_password) {

                echo '<br>Error!<br>';

            }
        
        }

    ?>

    <script>
            var login = '<?php echo $login; ?>'
    </script>

</body>

</html>

