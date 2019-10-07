<?php

session_start();

$_SESSION['name'] = 'TEST';

?>
<html>
<head>
</head>
<body>
GETメソッド<br>
<form action="get.php" method="get">
	<input type="text" name="para" value="">
	<input type="submit">
</form>
<br>
<a href="get.php?para=11111">リンク</a>
<br>
POSTメソッド<br>
<form action="post.php" method="post">
	<input type="text" name="para" value="">
	<input type="submit">
</form>
<br>
<a href="get.php?para=あああああああ">リンク</a>
</body>
</html>