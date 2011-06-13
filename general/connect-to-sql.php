<?php
$db = @new MySQLi(SQL_HOST, SQL_USER, SQL_PASSWORD, SQL_DATABASE);

if (mysqli_connect_errno()) {
    die('SQL Connection Error: '.mysqli_connect_error());
}
?>