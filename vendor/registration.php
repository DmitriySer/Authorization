<?php
error_reporting(0);
session_start();



include 'function.php';

$name = cleardata($_POST['user']);
$login = cleardata($_POST['email']);
$citi = cleardata($_POST['citi']);
$pass = ($_POST['pass']);
$pass_con =($_POST['pass_con']);


if ($citi == 'Выберете в') {
    $citi = 'не указан';
} elseif ($citi == '1') {
    $citi = 'Ижевск';
} elseif ($citi == '2') {
    $citi = 'Глазов';
} elseif ($citi == '3') {
    $citi = 'Можга';
} elseif ($citi == '4') {
    $citi = 'Сарапул';
} elseif ($citi == '5') {
    $citi = 'Воткинск';
} elseif ($citi == '6') {
    $citi = 'Камбарка';
}


include 'connect.php';

if (isset($_POST['sub'])) {
    if ($pass != $pass_con){
        header('Location:../reg.php');
        echo $_SESSION['alarm'] = 'Ваши пароли не совпадают';
    }else{
        $pass_hash = md5($pass);
        mysqli_query($connect, "INSERT INTO `guests` (`id`, `login`, `pass`, `name`, `Citi`) VALUES (NULL, '$login', '$pass_hash', '$name', '$citi')");
        header('Location:../reg.php');
        $_SESSION['msg']='Регистрация прошла успешно';
    }
}