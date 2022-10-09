<?php
require_once __DIR__ . '/vendor/registration.php';
if($_SESSION['user']){
    header('Location:profile.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <title>Регистрация</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="display-6">Регистрация</h1>
            <?php

            if ($_SESSION['msg']){
                echo '<h3 class="display-9" style="color: #06b16b">' . $_SESSION['msg'] . '</h3>';
            }
            unset($_SESSION['msg'])
            ?>
            <form action="vendor/registration.php" method="POST" class="needs-validation" novalidate>
                <div class="mb-3">
                    <p class="form-label">Имя</p>
                    <input name="user" class="form-control" placeholder="Как к вам обращаться?" required>
                    <div class="invalid-feedback">
                        Пожалуйста введите имя
                    </div>
                </div>
                <div class="mb-3">
                    <p class="folm-label">Место проживания</p>
                    <select class="form-select" name="citi" aria-label="Default select example">
                        <option selected>Выберете ваш город:</option>
                        <option value="1">Ижевск</option>
                        <option value="2">Глазов</option>
                        <option value="3">Можга</option>
                        <option value="4">Сарапул</option>
                        <option value="5">Воткинск</option>
                        <option value="6">Камбарка</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Введите вашу электронную почту..." required>
                    <div class="invalid-feedback">
                        Пожалуйста укажите почту
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                           placeholder="Введите пароль..." required>
                    <div class="invalid-feedback">
                        Пожалуйста укажите пароль
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                    <input type="password" name="pass_con" class="form-control" id="exampleInputPassword1"
                           placeholder="Повторите пароль..." required>
                    <div>
                        <?php
                        if($_SESSION['alarm']){
                            echo '<p class="display-8" style="color: red">' . $_SESSION['alarm'] . '</p>';
                        }
                        unset($_SESSION['alarm'])
                        ?>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="mark" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-label" for="exampleCheck1">Я согласен с обработкой персональных данных</label>
                    <div class="invalid-feedback">
                        Поставьте галочку
                    </div>
                </div>
                <button type="submit" name="sub" class="btn btn-success">Зарегистрироваться</button>
                <button class="btn btn-primary"><a href="index.php" class="text-decoration-none link-light">Вернуться
                        назад</a></button>
                <button type="reset" class="btn btn-warning">↺</button>
            </form>
        </div>
    </div>
    </div>

</body>
<script src="vendor/main.js"></script>
</html>
