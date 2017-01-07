<?php 
session_start();
require 'connect.inc.php';

if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];

///  Captcha verification

if($_SESSION['captcha']==0)
{
   die('<span style="font-size:30px;color:red">Captcha Mismatch. Please</span><a href="'.$http_referer.'"style="font-size:30px"> try again.</a>');
}


// captcha verification ends


//$title=$_SESSION['title'];








$notify=$_SESSION['notify'];



if(isset($_FILES['report'])&&!empty($_FILES['report']))
{
  $rep='';
  $repFile_name='';

  $repFile_name=$_FILES["report"]["name"];
  $sourcePath = $_FILES['report']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['report']['name']; // Target path where file is to be stored
 if(move_uploaded_file($sourcePath,$targetPath))
    $rep=$targetPath;  
  else
  {

  }

}
else   
{
    $rep='';
    $repFile_name='';

}

if(isset($_FILES['rec'])&&!empty($_FILES['rec']))
{
  $rec='';
  $recFile_name='';

  $recFile_name=$_FILES["rec"]["name"];
  $sourcePath = $_FILES['rec']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['rec']['name']; // Target path where file is to be stored
 if(move_uploaded_file($sourcePath,$targetPath))
    $rec=$targetPath;  
  else
  {

  }

}
else   
{
    $rec='';
    $recFile_name='';

}

if(isset($_FILES['ref'])&&!empty($_FILES['ref']))
{
  $ref='';
  $refFile_name='';

  $refFile_name=$_FILES["ref"]["name"];
  $sourcePath = $_FILES['ref']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['ref']['name']; // Target path where file is to be stored
 if(move_uploaded_file($sourcePath,$targetPath))
    $ref=$targetPath;  
  else
   {

  }

}
else   
{
    $ref='';
    $refFile_name='';

}
    
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

$title='';

$author_details=mysql_real_escape_string($author_details);
  
Global $count;

$count=0;






 $time=time();

$actual_time=date('d M Y ', $time);


 $date1=$actual_time;
$val1=rand(10000000,99999999);
$exp=" ";

 $id=$_POST['case_evolve2'];

$title='';


$rev='';
$jus='';



$query1="SELECT `title` FROM `formdata` WHERE `id` = '".$id."' ";


  if($query_run1=mysql_query($query1))
    if($query_result1=mysql_result($query_run1,0,'title'))
      $title=$query_result1;
  else
     die('<span style="font-size:30px;color:red">Could not connect.</span> <a href="'.$http_referer.'" style="font-size:30px">Please try again.</a>');

$title=mysql_real_escape_string($title);









$query="INSERT INTO `case_revision` (`id`, `case_Id`, `revision`, `justification`, `report`, `notification`, `SubDate`, `allow`, `authorCount`, `author`) VALUES ('$val1', '$id', '$rev', '$jus', '$rep','$notify', '$date1', '0', '$authorCount', '$author_details')";




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
           include 'repMail.php';
            }
            

}

else
  die('<span style="font-size:30px;color:red">Could not connect.</span> <a href="'.$http_referer.'" style="font-size:30px">Please try again.</a>');


die('<span style="color:green;font-size:30px">Thank you for submission. Please check your mail to get the acknowledgement <br></span><a href="'.$http_referer.'" style="font-size:30px">Go back</a>');


 ?>


 
   


