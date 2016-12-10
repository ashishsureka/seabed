<?php

 $conn_error='could not connect';
    
$dbhost = 'localhost:3036';
$dbuser = 'seabegxq_yukti';
$dbpass = 'yukti';


$db=mysql_select_db('seabegxq_demo');


$link = mysql_connect($dbhost, $dbuser, $dbpass);
if(@!mysql_connect($dbhost, $dbuser, $dbpass) || @!mysql_select_db('seabegxq_demo') )
	die($conn_error);

?>