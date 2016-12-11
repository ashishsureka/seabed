<?php
require 'connect.inc.php';
session_start();
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];

if(isset($_POST['g-recaptcha-response'])&&!empty($_POST['g-recaptcha-response']))
{
    
    $secret="6LfocQ4UAAAAAMjnIA3De1ZMLqBVHRpqLHsmUCx7";
    $ip=$_SERVER['REMOTE_ADDR'];
    $captcha=$_POST['g-recaptcha-response'];

    $rsp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
     
    
   $arr=json_decode($rsp,TRUE);

     if($arr['success'])
     	{
     	   //echo 'success';
     	}
     else
     	die('Captcha mismatch. <a href="'.$http_referer.'">Please try again </a>');

}







if(isset($_POST['abstract'])&&isset($_POST['title'])&&isset($_POST['date'])&&isset($_POST['boxes'])&&isset($_FILES['profileImg']) &&isset($_POST['fields']))
    {
      if(!empty($_POST['abstract'])&&!empty($_POST['title'])&&!empty($_POST['date'])&&!empty($_POST['boxes'])&&!empty($_FILES['profileImg']) &&!empty($_POST['fields']))
      {

         


if(isset($_POST['copyright'])&&!empty($_POST['copyright']))
   
   $copyright=$_POST['copyright'];
 else
  $copyright="No";




$title = $_POST['title'];
$category = $_POST['fields'];
$date = $_POST['date'];
$arr=$_POST['boxes'];
$val1=rand(1000,9999);
$id=$val1;
$author_details= serialize( $_POST['boxes'] );
$abstract=$_POST['abstract'];


 // counting number of authors
$count=0;
 $authorCount=0;
foreach ($arr as $key => $value) {
        $count=$count+1;
      $val=$count%3;
if($val==2)
{   
  
 $authorCount=$authorCount+1;
 $email[$authorCount]=$value;
}

}
/*
foreach ($email as $key => $value) {
  
  echo $value.'<br>';

}

echo 'authorCount is '.$authorCount;
*/

// escape string section starts

$title=mysql_real_escape_string($title);
$author_details=mysql_real_escape_string($author_details);
 $category=mysql_real_escape_string($category); 
                
// escape string section ends

Global $count;

$count=0;

//$email = $_POST['email'];

//$profileImg = $_FILES['profileImg'];
//$key = $_POST['tagsinputbox'];

$file_name=$_FILES["profileImg"]["name"];
$file_size=$_FILES["profileImg"]["size"];

$sourcePath = $_FILES['profileImg']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['profileImg']['name']; // Target path where file is to be stored

$max_size=1048576;

$file_extension=strtolower(substr($file_name,strpos($file_name,'.')+1));

if($file_extension=='pdf')
{
  if($file_size<=$max_size)
  {
        if(move_uploaded_file($sourcePath,$targetPath))
          {
              //echo 'file uploaded successfully';
             $query="INSERT INTO `formdata` (`id`, `title`, `category`, `date`, `fileName`, `targetPath`, `abstract`, `copyright`, `authorCount`, `author`) VALUES ('$id', '$title', '$category', '$date', '$file_name', '$targetPath', '$abstract', '$copyright', '$authorCount', '$author_details')";

            if($query_run=mysql_query($query))
            {
              $mailLoop='';
              $flag2=0;
              

              foreach ($email as $key => $value) {
  

                 if($flag2!=0)
                  $mailLoop=$mailLoop.' ,'.$value;

                if($flag2==0)
                {
                 $mailLoop=$mailLoop.' '.$value;
                 $flag2=1;
                }

               
           include 're2.php'; }

            include 're1.php'; 

            }
              
              
              //include 're2.php';
            
                     //echo '<br> query success';   
             else
                 die('<a href="'.$http_referer.'">Try again </a>');

          }
  }
  else
   {

     die('File size exceeding max limit.<a href="'.$http_referer.'">Try again </a>');
   }

}

else
     die('File format not appropriate. <a href="'.$http_referer.'">Try again </a>');

        }

          else
          {
            
            die('Please fill all fields.<a href="'.$http_referer.'">Try again </a>');
          }

   }    



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
    <td><b>Authors details </b></td>
    <td><?php foreach ($arr as $key => $value) {
      $count=$count+1;  
      $val=$count%3;
if($val==1)
{
  echo 'Author name: ';

}
if($val==2)
{
  echo 'email id: ';

}
if($val==0)
{
  echo 'Author affiliated to: ';

}
    
    if($val!=0)
      echo $value.',';
    else
      echo $value;
       
       if($val==0)
        echo '<hr>';
} ?></td>
    </tr><br/>
   
    
     <tr>
    <td><b>Submission Date</b></td>
    <td><?php echo $date; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Field</b></td>
    <td><?php echo $category; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Abstract</b></td>
    <td><?php echo $abstract; ?></td>
    </tr><br/>

    <tr>
    <td><b> Allow seabed to publish this case : </b></td>
    <td><?php echo $copyright; ?></td>
    </tr><br/>
   
    
     <tr>
    <td><b>File Uploaded</b></td>
    <td><?php echo $file_name; ?></td>
    </tr><br/>
    
   
    
    
    </table>
    <br/>
      <?php die('Thank you for submission.<a href="'.$http_referer.'">Go back</a>')  ?>
   

    
 