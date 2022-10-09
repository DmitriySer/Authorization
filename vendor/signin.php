<?php
session_start();
require_once 'connect.php';

include 'function.php';
$login = cleardata($_POST['email']);
$pass = md5($_POST['pass']);

$check = mysqli_query($connect, "SELECT * FROM `guests` WHERE `login` = '$login' and `pass` = '$pass'");
if (mysqli_num_rows($check) > 0){
    $user = mysqli_fetch_assoc($check);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "email" => $user['login'],
        "citi" => $user['Citi'],
    ];
    header('Location:../profile.php');
}else {
    $_SESSION['signer'] = 'Пользователь с такими данными не найден';
    header('Location:../index.php');
}

