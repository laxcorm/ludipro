<?php


$check_login = "SELECT*FROM loglist WHERE login= :login";
$log = $pdo->prepare($check_login);
$log->execute(['login' => $_POST['login']]);
$password = $log->fetch()['password'];

if ($password !== NULL)
    $errors[] = "Этот логин уже зарегистрирован<br>";

else {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "INSERT INTO loglist VALUES (:login, :password)";
    $signin = $pdo->prepare($query);
    $signin->execute(['login' => $_POST['login'], 'password' => $_POST['password']]);
}





   