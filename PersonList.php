<?php


$query_list = "SELECT*FROM loglist";
$list = $pdo->query($query_list);

while ($lst = $list->fetch())
     echo "<a href> $lst[login] </a>" . "<br>";

