


<a href="<?=  "$_SERVER[PHP_SELF]?name=myname"  ?>" >Ref </a>


<?php
//проверка работы get
if($_GET['name'] ?? NULL)
echo "toto";
else 
echo "Not";
