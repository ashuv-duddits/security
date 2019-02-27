<?php
/*
 * Простенький блог с нуля
 */
require_once "init.php";
if (!isUserAuthorized()) {
    //user not authorized
    header('Location: registerForm.php');
    die();
}
echo "Пользователь авторизован<br />";
//user authorized
echo "You ID is = " . $_SESSION['user_id'];
if (!empty($_GET['authorized'])) {
    echo "You just successfully authorized";
}
include "postForm.php";
echo "<br /><br /><br />";
include "blog.php";
