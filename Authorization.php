<?php
try {
    $query = "SELECT*FROM loglist WHERE login= :login";
    $log = $pdo->prepare($query);
    $log->execute(['login' => $_POST['enter_login']]);
    $password = $log->fetch()['password'];
} catch (PDOException $e) {
    echo $e->getMessage();
}
if ($password !== $_POST['enter_password'])
    $errors[] = "Неправильный пароль или имя";
