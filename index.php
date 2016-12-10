<?php
require 'connect.inc.php';
require 'core.inc.php';


if(loggedIn())
	{ 
		
	  include 'UserLoginPage.php';

	}
else
	include 'index.html';

?>