<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <br>
    <br>
    <form action="controller.php?page=login" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email">
        <br>

        <label for="pass">Password</label>
        <input type="password" name="pass">

        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>