<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'kanchiac_db');//newswebsite
define('DB_USER','kanchiac_db');
define('DB_PASSWORD','kanchiac_db');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>