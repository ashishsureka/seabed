<?php
ob_start();
session_start();

$current_file=$_SERVER['SCRIPT_NAME'];
function loggedIn()
{
  if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{   
	  return true;
	}
	else
		return false;

} 


function getUserField($field)
{
	$query="SELECT `$field` from `regdata` WHERE `id`=' ".$_SESSION['user_id']." '";

	if($query_run=mysql_query($query))
		if($query_result=mysql_result($query_run,0,$field))
			return $query_result;
	else
		echo mysql_error();
}


?>