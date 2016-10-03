<?php

 
    
$dbhost = 'localhost:3036';
$dbuser = 'seabegxq_yukti';
$dbpass = 'yukti';




$link = mysql_connect($dbhost, $dbuser, $dbpass);
   
if(! $link )
{
   die('Could not connect: ' . mysql_error());
}
else
	//echo"connection established";

$db=mysql_select_db('seabegxq_demo');
if(db)
	//echo"database found";
if (isset($_POST['Login'])) {
	    $username = $_POST["username"]; 
        $password = $_POST["password"]; 
		$x=0;

        $result1 = mysql_query("SELECT username, password FROM regdata WHERE username = '".$username."' AND  password = '".$password."'");
		

        if(mysql_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            echo"Logged in successfully <br/>";
			
			$sql = "select imname from formdata";
		 $retval = mysql_query( $sql, $link );
		 
		  if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }


   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	   
		
		 echo "<b>Filename</b> :{$row['imname']}  "."<a href='".$row['targetPath']."'>Open File</a>";
		
		
		// $sql1="select id from formdata where imname={$row['imname']}";
		 //$name={$row['imname']};
		 //echo $name;
		 //echo $sql1;
		
		
		 
		
		 // "--------------------------------<br>";
		echo'<span class="likebtn-wrapper" data-white_label="true" data-identifier=""></span><br><br>';
		
		
		//echo'<fb:like href="http://example.com" send="false" layout="button_count" show_faces="false"></fb:like>';
		
		

		

		//echo'<div class=”fb-like” data-href=”seabed.in/finaltest/index.html” data-layout=”standard” data-action=”like” data-show-faces=”true” data-share=”true”></div>';
		
		
   }
   
   }
        
	else
        {
            echo 'The username or password are incorrect!';
        }
		
    }
	
	
elseif (isset($_POST['Register'])) 
{    
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if(mysql_query("INSERT INTO regdata VALUES('','$fullname','$email','$username','$password')"))
	
echo"<h6> Thanks For Registration. Please login with your credentials.</h6>";
	   
	   
}
?>
<html>
<body>
<!--
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({appId: 'http://seabed.in/finaltest/index.html', status: true, cookie: true, xfbml: true});
};
(function() {
    var e = document.createElement('script');
    e.async = true;
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
}());
</script>

</body>-->

<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>


<!-- LikeBtn.com END -->
</body>
</html>