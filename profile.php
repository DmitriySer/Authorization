<?php
session_start();
error_reporting(0);
if(!$_SESSION['user']){
    header('Location:index.php');
}
?>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <title>Авторизация</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="vendor/text_msg.php" method="post">
                <h1>Добро пожаловать <?= $_SESSION['user']['name']; ?></h1>
                <div>
                    <p>Ваша почта <?= $_SESSION['user']['email'];?></p>
                        <p>Ваш город <?= $_SESSION['user']['citi'];?></p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Можете оставить свои пожелания 😀</span>
                    <textarea class="form-control" name="msg"></textarea>
                </div>
                <?php
                if ($_SESSION['thanks']) {
                    echo '<div><em><p class="h5">' . $_SESSION['thanks'] . '</p></em></div>';
                }
                unset($_SESSION['thanks']);
                ?>
                <button type="submit" class="btn btn-success" name="button_msg">Отправить</button>
                <button type="submit" class="btn btn-danger"><a href="vendor/logout.php" class="text-decoration-none link-light"">Выйти</a></button>
            </form>
        </div>
    </div>
</div>
</body>
</html>