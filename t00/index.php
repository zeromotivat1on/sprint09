<?php
    session_start();

    $_SESSION['table_error'] = '';

    include 'connection/DatabaseConnection.php';

    if(isset($_POST['signup_button'])) {

        save_user($_POST['login'], $_POST['password'], $_POST['full_name'], $_POST['mail']);

    }

    function save_user($login, $password, $full_name, $mail) {

        $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'sword');

        $password = crypt($password, 'salt');

        $sql = "INSERT INTO `users` (`login`, `password`, `full_name`, `mail`) 
                    VALUES (\"$login\", \"$password\", \"$full_name\", \"$mail\")";

        if(!$conn->connection->query($sql)) {

            $_SESSION['table_error'] = 'The user is already exists';

        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>

<body>

    <form class="main_form" action="index.php" method="post">

        <span>Login</span>
        <input type="text" name="login" required></input>

        <span>Password</span>
        <input id="password" type="password" name="password" required></input>

        <span>Confirm Password</span>
        <input id="conf_password" type="password" name="confirm_password" required onchange="checkPswd()"></input>

        <span>Full Name</span>
        <input type="text" name="full_name" required></input>

        <span>E-mail</span>
        <input type="email" name="mail" required></input>

        <span id="error"></span>
        <span id="table_error"><?php echo $_SESSION['table_error']; ?></span>

        <div class="buttons">

            <input class="clear_button button" name="clear_button" type="reset" value="Clear">
            <input class="signup_button button" name="signup_button" type="submit" value="Sign Up"></input>

        </div>

    </form>

</body>

</html>

