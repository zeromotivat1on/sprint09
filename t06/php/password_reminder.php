<?php

    $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'sword');
    $sql = 'SELECT password, status FROM users WHERE login = \''. $_POST['login'] . '\'';
    $table_password = $conn->connection->query($sql);
    $fetch = $table_password->fetch(PDO::FETCH_ASSOC);
    $password = $fetch['password'];

    if(isset($_POST['remindpswd_button'])) {

        mail('lyannoy.alexander@gmail.com', 'Your Password', $password);

    }

?>
