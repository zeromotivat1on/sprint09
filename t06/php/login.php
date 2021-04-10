<?php
 
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