<?php 
$host = '127.0.0.1'; //127.0.0.1
$user = 'root';
$pass = '';
$db	  = 'login';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
?>