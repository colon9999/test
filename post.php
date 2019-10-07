<?php


echo "送られたパラメータの値は<font color=\"red\">" . htmlspecialchars($_POST['para']) . "</font>です。<br>";


echo $_SERVER['HTTP_USER_AGENT']."<br>";

echo $_SERVER['HTTP_REFERER'];

header("Location: https://www.google.co.jp");

?>