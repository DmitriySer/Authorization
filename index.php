<!DOCTYPE html>
<?php
session_start();
error_reporting(0);

if($_SESSION['user']){
    header('Location:profile.php');
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
                <h1 class="display-6">Вход на страницу</h1>
                <div>
                <?php
                if($_SESSION['signer']) {
                    echo '<p class="display-9" style="color: red">' . $_SESSION['signer'] . '</p>';
                }
                unset($_SESSION['signer']);
                ?>
                </div>
                <form action="vendor/signin.php" method="POST" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите вашу электронную почту..." required>
                        <div class="invalid-feedback">
                            Пожалуйста укажите почту
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль..." required>
                        <div class="invalid-feedback">
                            Пожалуйста укажите пароль
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Войти</button>
                    <br>
                    <div class="mb-3">
                        <p class="reg">Если вы здесь впервые, то выполните <a href="reg.php">регистрацию</a>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="vendor/main.js"></script>
</html>