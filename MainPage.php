<?php
echo "Вы уже зарегистрированы<br>";
$mainform="<form method=\"post\" action=$_SERVER[PHP_SELF]>
    <input type=\"text\" name=\"enter_login\" value=\"Имя\"><br>
    <input type=\"password\" name=\"enter_password\" value=\"Пароль\"><br>
    <input type=\"submit\" value=\"Войти\" name=\"enter\"><br><br><br>

    Зарегистрироваться<br>
    <input type=\"text\" name=\"login\" value=\"Имя\"><br>
    <input type=\"password\" name=\"password\" value=\"Пароль\"><br>
    <input type=\"submit\" value=\"Зарегистрироваться\" name=\"signin\"><br>

</form>";


echo $mainform;





