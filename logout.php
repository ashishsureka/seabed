<?php
//require 'core.inc.php';
$http_referer=$_SERVER['HTTP_REFERER'];
//echo 'Welcome to logout page';
session_destroy();
//header('Location: '.$http_referer);
header('Location: index.html');
?>