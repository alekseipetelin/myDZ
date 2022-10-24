<?php
/*
if (isset($_POST['exit'])){

    header('location: index.php');
} else {

    if (isset($_POST['registration'])){

        echo 'вы зарегистрированы!!!';
        header('location: app/notUser.php');
    }

}

*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../public/css/style.css">

</head>
<body>
<div class="container">

    <div class="login">
        <h3>Регистрация</h3>
        <div class="loginBody">
            <input name="login" type="text" placeholder="Login">
            <input name="pass" type="password" placeholder="Password">

        </div>

        <div class="loginButtons">
            <form action="" method="POST">
<!--                <input name="registration" type="submit" value="Выполнить" />-->
                <a href="aut.php"> зарегистрироваться </a>
                <br><br>
<!--                <input name="registration" type="submit" <a href="registration.php"> нажмите для регистрации</a> />-->
                <!--                <input name="exit" type="submit" value="Выход" />-->
                <a href="/index.php"> выход </a>
            </form>
        </div>

    </div>

</div>

</body>
</html>
