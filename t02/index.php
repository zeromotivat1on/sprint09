<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reminder</title>

    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>

</head>

<body>

    <form class="main_form" action="index.php" method="post">

    <span>Login</span>
        <input type="text" name="login" required></input>

        <span>Password</span>
        <input type="password" name="password" required></input>

        <span class="error hidden">Incorrect login or password</span>

        <div class="buttons">

            <input class="remindpswd_button button" name="remindpswd_button" type="button" value="Remind password">
            <input class="clear_button button" name="clear_button" type="reset" value="Clear">
            <input class="signin_button button" id="signin_button" name="signin_button" type="submit" value="Sign In" onclick="signin()"></input>

        </div>

    </form>

    <?php


    ?>

</body>

</html>

