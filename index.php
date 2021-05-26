<?php
require_once('pdo.php');

if (!$_POST || ($_POST['exit'] ?? NULL)) {
    require_once('MainPage.php');
} elseif ($_POST['enter'] ?? NULL) {

    require_once('Authorization.php');
    if (!@$errors)
        require_once('PersonalPage.php');
    else {

        foreach ($errors as  $value)
            echo $value . "<br>";
        require_once('MainPage.php');
    }
} elseif ($_POST['signin'] ?? NULL) {
    require_once('Registr_check.php');
    if (!@$errors) {
        require_once('PersonalPage.php');
    } else {
        foreach ($errors as  $value)
            echo $value . "<br>";
        require_once('MainPage.php');
    }
} elseif ($_POST['poisk'] ?? NULL) {
    require_once('PersonList.php');
}
