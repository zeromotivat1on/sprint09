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
    <title>Remind Password</title>

    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>

</head>

<body>

    <form id='mn_form' class="main_form" action="index.php" method="post">

        <span>Login</span>
        <input type="text" name="login" required></input>

        <span id="error" class="error"></span>

        <div class="buttons">

            <input class="remindpswd_button button" name="remindpswd_button" type="submit" value="Remind password">
            <input class="clear_button button" name="clear_button" type="reset" value="Clear">

        </div>

    </form>

    <?php
    

        $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'sword');

        $sql = 'SELECT password, status FROM users WHERE login ='. $_POST['login'];
        $table_password = $conn->connection->query($sql);
        $fetch = $table_password->fetch(PDO::FETCH_ASSOC);
        $password = $fetch['password'];

        if(isset($_POST['remindpswd_button'])) {

            mail('lyannoy.alexander@gmail.com', 'Your Password', $password);
    
        }
    
    ?>

</body>

</html>