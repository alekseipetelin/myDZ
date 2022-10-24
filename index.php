<?php
$login = 'alex';
$password = '33';

if (isset($_POST['submit']) &&
    $login == strip_tags(trim($_POST['login'])) &&
    $password == strip_tags(trim($_POST['password']))){
    header('location: app/aut.php');
    } else {

    if (isset($_POST['submit']) && $login !== $_POST['login']){
        header('location: app/notUser.php');
    };
    if (isset($_POST['submit']) && $password !== $_POST['password']){
        echo 'invalid password<br><br><br>';
    };
    ?>
     <form action="" method="POST">
       <input type="text" name="login" placeholder="enter a login"><br><br>
       <input type="password" name="password" placeholder="enter the password"><br><br>
       <input type="submit" name="submit">
     </form>
    <?php

            }


?>











