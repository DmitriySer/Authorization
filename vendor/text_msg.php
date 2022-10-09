<?php
session_start();
include 'connect.php';

if(isset($_POST['button_msg'])) {
    if ($_POST['msg']) {
        $msg = strip_tags($_POST['msg']);
        $id = $_SESSION['user']['id'];
        mysqli_query($connect, "UPDATE `guests` SET `text` = '$msg' WHERE `id` = '$id'");
        $_SESSION['thanks'] = 'Спасибо за ваше сообщение❣';
        header('Location:../profile.php');
    }
}




