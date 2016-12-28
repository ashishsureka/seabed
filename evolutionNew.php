<?php 
session_start();
require 'connect.inc.php';

if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];

///  Captcha verification

if($_SESSION['captcha']==0)
{
   die('<span style="font-size:30px;color:red">Captcha Mismatch. Please </span><a href="'.$http_referer.'"style="font-size:30px">try again.</a>');
}

// captcha verification ends


//$title=$_SESSION['title'];


$title='';

if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];








if(isset($_FILES['revision'])&&!empty($_FILES['revision'])&&isset($_FILES['jus'])&&!empty($_FILES['jus']))
{
  
    $revFile_name=$_FILES["revision"]["name"];
    $sourcePath = $_FILES['revision']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['revision']['name']; // Target path where file is to be stored

 if(move_uploaded_file($sourcePath,$targetPath))
     $rev=$targetPath;
    
     $jusFile_name=$_FILES["jus"]["name"];
    $sourcePath = $_FILES['jus']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['jus']['name']; // Target path where file is to be stored

 if(move_uploaded_file($sourcePath,$targetPath))
     $jus=$targetPath;
    

    
     
    
}
else
{
    $rev='';
    $revFile_name=" ";
     $jusFile_name='';
     $jus='';
    
}

// author details

// author details

$author_details= $_SESSION['author_details'];
//$arr1=array();
//echo $arr1=$_SESSION['try'];
$arr=$_SESSION['try'];


// counting number of authors
$count=0;
 $authorCount=0;
 $num=0;
foreach ($arr as $key => $value) {
        $count=$count+1;
      $val=$count%4;
if($val==0)
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



$author_details=mysql_real_escape_string($author_details);
  
Global $count;

$count=0;


 

$val1=rand(10000000,99999999);

$rep='';
$ref='';
$rec='';
 $exp=''; 


$id=$_POST['case_evolve'];
$notify=$_SESSION['notify'];
 $date1=$_SESSION['date'];

$query1="SELECT `title` FROM `formdata` WHERE `id` = '".$id."' ";


  if($query_run1=mysql_query($query1))
    if($query_result1=mysql_result($query_run1,0,'title'))
      $title=$query_result1;
  else
    die('<span style="font-size:30px;color:red">Could not connect.</span> <a href="'.$http_referer.'" style="font-size:30px">Please try again.</a>');


$title=mysql_real_escape_string($title);

$query="INSERT INTO `case_revision` (`id`, `case_Id`, `revision`, `justification`, `report`, `experience`, `recommendation`, `notification`, `SubDate`, `allow`, `ref`, `authorCount`, `author`) VALUES ('$val1', '$id', '$rev', '$jus', '$rep', '$exp', '$rec', '$notify', '$date1', '0', '$ref', '$authorCount', 'author_details')";

if($query_run=mysql_query($query))
{

  //echo 'query executed successfully';
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
           include 'revMail.php';
            }

}

else
  die('<span style="font-size:30px;color:red">Could not connect. Please try after sometime. </span> <a href="'.$http_referer.'" style="font-size:30px">Go back</a>');


die('<span style="color:green;font-size:30px">Thank you for submission. Please check your mail to get the acknowledgement <br></span><a href="'.$http_referer.'" style="font-size:30px">Go back</a>');



 ?>


 