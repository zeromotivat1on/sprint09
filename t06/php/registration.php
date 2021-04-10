<?php

    $_SESSION['table_error'] = '';

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

        } else {

            $_SESSION['success_add'] = 'User added successfully';
        }
        
    }

?>