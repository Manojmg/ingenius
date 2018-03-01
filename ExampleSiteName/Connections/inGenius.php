<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_inGenius = "http://localhost:8080:ExampleSiteName";
$database_inGenius = "mydatabase";
$username_inGenius = "root";
$password_inGenius = "inGenius";
$inGenius = mysql_pconnect($hostname_inGenius, $username_inGenius, $password_inGenius) or trigger_error(mysql_error(),E_USER_ERROR); 
?>