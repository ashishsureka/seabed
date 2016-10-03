<?php
{

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

$title = $_POST['title'];
$author = $_POST['author'];
$selectOption = $_POST['fields'];
$date = $_POST['date'];
$email = $_POST['email'];
$serialized_boxes = serialize( $_POST['boxes'] );

$profileImg = $_FILES['profileImg'];
$key = $_POST['tagsinputbox'];

$imname=$_FILES["profileImg"]["name"];

$sourcePath = $_FILES['profileImg']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['profileImg']['name']; // Target path where file is to be stored

move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
//echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";

/*if(mysql_query( "INSERT INTO finaldata VALUES ('" . mysql_real_escape_string( $serialized_boxes ) . "')" ))
	
echo"<h6> Thanks For Submission." ;*/

if(mysql_query("INSERT INTO formdata VALUES('','$title','$author','$selectOption','$date','$email','$profileImg','$imname','$targetPath','$key','" . mysql_real_escape_string( $serialized_boxes ) . "')"))
{   
	echo"<h6> Thanks For Submission. After verification your case will be uploaded.</h6>";}

else
	echo "Insertion failed";


?>
<style>
table,td {
    border: 2px solid #3498db;
	border-spacing: 2px;
	height:30px;
	
}
input[type=submit]{
  width: 20%;
  height: 40px;
  border: 1px solid #DBDBDB;
  padding-left: 1px;
  text-align: center;
margin: auto;
line-height:2px;
font-weight:bold;
font-size:15px;
 }

</style>

 <table align="center" width="700"cellpadding="0" cellspacing="0" style="margin-top:-7em;">
 <col width="200">
  <col width="200">
    
    <tr>
    <td colspan="2"><b><h6>Please Find The Details Entered<h6></b></td>
    </tr>
    
    
	<tr>
    <td><b>Title</b></td>
    <td><?php echo $title; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Author(s)</b></td>
    <td><?php echo $author; ?></td>
    </tr><br/>
	
	 <tr>
    <td><b>Submission Date</b></td>
    <td><?php echo $date; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Field</b></td>
    <td><?php echo $selectOption; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Email Address</b></td>
    <td><?php echo $email; ?></td>
    </tr><br>
	
	 <tr>
    <td><b>File Uploaded</b></td>
    <td><?php echo $imname; ?></td>
    </tr><br/>
	
	<tr>
    <td><b>Key Terms</b></td>
    <td><?php echo $key; ?></td>
    </tr><br/>
	
	<tr>
    <td><b>Boxes</b></td>
    <td><?php echo $serialized_boxes; ?></td>
    </tr><br/>
	
	</table>
	<br/>

    <input type="submit" value="Go Back" onclick="location.href='http://seabed.in';" />

	
 <?php
	
}

?>