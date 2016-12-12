<?php
require 'connect.inc.php';
session_start();
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];
$details='';
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







if(isset($_POST['abstract'])&&isset($_POST['title'])&&isset($_POST['tagsinputbox'])&&isset($_POST['date'])&&isset($_POST['boxes'])&&isset($_FILES['profileImg']) &&isset($_POST['fields']))
    {
      if(!empty($_POST['abstract'])&&!empty($_POST['title'])&&!empty($_POST['date'])&&!empty($_POST['boxes'])&&!empty($_FILES['profileImg']) &&!empty($_POST['fields']))
      {

         


if(isset($_POST['copyright'])&&!empty($_POST['copyright']))
   {
   $copyright=$_POST['copyright'];
   }
  
 else
 die('Please provide us copyright for the case.<a href="'.$http_referer.'">Try again </a>');




$title = $_POST['title'];
$category = $_POST['fields'];
$key_terms=$_POST['tagsinputbox'];
$date = $_POST['date'];
$arr=$_POST['boxes'];
$val1=rand(1000,999999);
$id=$val1;
$author_details= serialize( $_POST['boxes'] );
$abstract=$_POST['abstract'];


 // counting number of authors
$count=0;
 $authorCount=0;
 $num=0;
foreach ($arr as $key => $value) {
        $count=$count+1;
      $val=$count%4;
if($val==3)
{   
  
 $authorCount=$authorCount+1;
 $email[$authorCount]=$value;
}

if($val==1)
{   
  
 $num=$num+1;
 $author_name[$num]=$value;
}

}
/*
foreach ($email as $key => $value) {
  
  echo $value.'<br>';

}

echo 'authorCount is '.$authorCount;
*/

// escape string section starts

$title=mysql_real_escape_string(strtolower($title));
$author_details=mysql_real_escape_string(strtolower($author_details));
 $category=mysql_real_escape_string(strtolower($category)); 
                
// escape string section ends
if($authorCount>4)
die('Please do not press submit button more than once. After submission please wait few seconds to get the acknowledgement.<a href="'.$http_referer.'">Try again </a>');

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
             $query="INSERT INTO `formdata` (`id`, `title`, `category`,`key_terms`, `date`, `fileName`, `targetPath`, `abstract`, `copyright`, `authorCount`, `author`) VALUES ('$id', '$title', '$category', '$key_terms' , '$date', '$file_name', '$targetPath', '$abstract', '$copyright', '$authorCount', '$author_details')";

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

               
          // include 're2.php';
           include 'testMail.php';
            }

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
    <td colspan="2"><b><h3 style="text-align:center">Submission Details <h3></b></td>
    </tr>
    
    <tr>
    <td><b>ID</b></td>
    <td><?php echo $id; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Title</b></td>
    <td><?php echo $title; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Authors details </b></td>
    <td><?php $enm=0;
    $link="http://seabed.in/upload/".$file_name;
    $temp=$authorCount;
    foreach ($arr as $key => $value) {
      $count=$count+1;  
      $val=$count%4;
if($val==1)
{  $enm=$enm+1;
  echo '('.$enm.') Author Name: ';
$temp=$temp-1;
}
if($val==3)
{
  echo '<br> email id: ';

}
if($val==0)
{
  echo '<br> affiliated to: ';

}
    
    if(($val!=0)&&($val!=1))
      echo $value.',';
    else
      echo $value.' ';
       
       if(($val==0)&&($temp!=0))
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
    <td><b>Key Terms </b></td>
    <td><?php echo $key_terms; ?></td>
    </tr><br/>
    
    <tr>
    <td><b>Abstract</b></td>
    <td style="text-align:center"><?php echo $abstract; ?></td>
    </tr><br/>

    <tr>
    <td><b> Allow seabed to publish this case : </b></td>
    <td><?php echo $copyright; ?></td>
    </tr><br/>
   
    
     <tr>
    <td><b>File Uploaded</b></td>
    <td><a href="<?php echo $link; ?>"><?php echo $link; ?></a></td>
    </tr><br/>
    
   
    
    
    </table>
    <br/>
      <?php die('Thank you for submission.<a href="'.$http_referer.'">Go back</a>')  ?>
   

    
 