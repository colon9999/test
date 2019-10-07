<?php

session_start();

echo "送られたパラメータの値は<font color=\"red\">" . $_GET['para'] . "</font>です。<br>";

echo "あなたのお名前は" . $_SESSION['name'] . "さんです。";

?>