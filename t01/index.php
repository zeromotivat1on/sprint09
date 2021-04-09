<?php

    session_start();

    include 'connection/DatabaseConnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>

</head>

<body>

    <form id='mn_form' class="main_form" action="index.php" method="post">

        <span>Login</span>
        <input type="text" name="login" required></input>

        <span>Password</span>
        <input type="password" name="password" required></input>

        <span id="error" class="error"></span>

        <div class="buttons">

            <input class="clear_button button" name="clear_button" type="reset" value="Clear">
            <input class="signin_button button" id="signin_button" name="signin_button" type="submit" value="Sign In"></input>

        </div>

    </form>
    
    <form id='log_form' class="loggedin_form hidden" action="index.php" method="post">

        <span class="status">Status: <span id="status" class="admin"></span></span>

        <div class="buttons">

            <input class="signout_button button" name="signout_button" type="submit" value="Sign out"></input>

        </div>

    </form>

    <?php
    
        if(isset($_POST['signin_button'])) {

            if(check_user($_POST['login'], $_POST['password'])) {

                echo '<script> signin(); </script>';

                if($_SESSION['status'] == 'Admin') {

                    echo '<script> statusAdmin(); </script>';

                } else if($_SESSION['status'] == 'User') {

                    echo '<script> statusUser(); </script>';

                }

            } else {

                echo '<script> error(); </script>';
            }

        }

        if(isset($_POST['signout_button'])) {

            echo '<script> signout(); </script>';
        }

        function check_user($login, $password) {

            $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'sword');

            $password = crypt($password, 'salt');
            $sql = "SELECT password, status FROM users WHERE login = \"$login\"";
            $table_password = $conn->connection->query($sql);
            $fetch = $table_password->fetch(PDO::FETCH_ASSOC);
            $table_password = $fetch['password'];
            $_SESSION['status'] = $fetch['status'];

            if($table_password != $password) {

                return false;

            } else {

                return true;

            }
            
        }
    
    ?>

</body>

</html>

