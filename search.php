<?php
$dbhost = 'localhost:3036';
$dbuser = 'seabegxq_yukti';
$dbpass = 'yukti';
$link = mysql_connect($dbhost, $dbuser, $dbpass);
   
if(! $link )
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("seabegxq_demo",$link); 

$term1 = $_POST['term1'];
$option1=$_POST['option1'];
$term2 = $_POST['term2'];
$option2=$_POST['option2'];
$condition = $_POST['condition'];

//$sql = "select * from formdata where ($option1='$term1') $condition ($option2='$term2')";
$sql = "select * from formdata where (lower($option1) LIKE lower('%$term1%')) $condition (lower($option2) LIKE lower('%$term2%'))";

$retval = mysql_query($sql,$link );
if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
echo "<table>";
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	echo "<b>Title</b> :{$row['title']}  <br> ".
    "<b>Author</b> : {$row['author']} <br> ".
    "<b>File Name</b> : {$row['imname']} <br> ".
	"--------------------------------<br>";
    echo "<a href='".$row['targetPath']."'>Open File</a><br/>";
	}
echo "</table>";
$count=mysql_num_rows($retval);
if($count==0){echo "<b>No results found</b>";}
mysql_close($link);
?>

