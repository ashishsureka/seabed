<?php 
session_start();
require 'connect.inc.php';
$title=$_SESSION['title'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
$http_referer=$_SERVER['HTTP_REFERER'];

if(isset($_POST['recommendations'])&&!empty($_POST['recommendations']))
 $rec=$_POST['recommendations'];
else
$rec='';

if(isset($_POST['notification'])&&!empty($_POST['notification']))
 $notify="ON";
else
$notify="OFF";





if(isset($_POST['experience'])&&!empty($_POST['experience']))
$exp=$_POST['experience'];
else
$exp='';

if(isset($_FILES['revision'])&&!empty($_FILES['revision'])&&isset($_POST['justification'])&&!empty($_POST['justification']))
{
  
    $revFile_name=$_FILES["revision"]["name"];
    $sourcePath = $_FILES['revision']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['revision']['name']; // Target path where file is to be stored

 if(move_uploaded_file($sourcePath,$targetPath))
     $rev=$targetPath;
    
      
     $jus=$_POST['justification'];
    
}
else
{
    $rev='';
    $revFile_name=" ";
    $jus='';

}

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
    
  
 $fn=$_POST['firstName'];
$ln=$_POST['lastName'];
 $email=$_POST['email'];
 $af=$_POST['affiliation'];
 $date1=$_POST['date'];
$val1=rand(10000000,99999999);

 $id=$_SESSION['id'];

$query="INSERT INTO `case_revision` (`id`, `case_Id`, `revision`, `justification`, `report`, `experience`, `recommendation`, `firstName`, `lastName`, `email`, `affiliation`, `notification`,`SubDate`) VALUES ('$val1', ".$id.", '$rev', '$jus', '$rep', '$exp', '$rec', '$fn', '$ln', '$email', '$af','$notify','$date1')";





if($query_run=mysql_query($query))
{

  //echo 'query executed successfully';
  include 'revMail.php';

}

else
  die('Could not coonect. Please try after sometime.<a href="'.$http_referer.'">Go back</a>');





 ?>


 <style>
.ev table, .ev td {
    border: 2px solid #3498db;
    border-spacing: 2px;
    height:30px;
    text-align: center;
    
}

</style>

<table align="center" width="400"cellpadding="0" class="ev" cellspacing="0" style="margin-top:-7em;">
 <col width="150">
  
    
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
     <td><?php echo 'Author Name: '.$fn.' '.$ln.'<br>';
        
               echo 'Email Id: '.$email.'<br>';
               echo 'Affilated to : '.$af.'<br>';


       ?></td>
    </tr><br/>

<tr>
    <td><b> Submission Date </b></td>
    <td><?php echo $date1; ?></td>
    </tr><br/>

    <tr>
    <td><b>Revision Uploaded</b></td>
    <td><a href="<?php echo ''.$rev; ?>" target="_blank"><?php echo $revFile_name; ?></a></td>
    </tr><br/>

    <tr>
    <td><b>Justification for the Revision </b></td>
    <td><?php echo $jus; ?></td>
    </tr><br/>
    

    <tr>
    <td><b>Report Uploaded</b></td>
    <td><a href="<?php echo ''.$rep; ?>" target="_blank"><?php echo $repFile_name; ?></a></td>
    </tr><br/>

    <tr>
    <td><b>Experience </b></td>
    <td><?php echo $exp; ?></td>
    </tr><br/>

    <tr>
    <td><b>Recommendation</b></td>
    <td><?php echo $rec; ?></td>
    </tr><br/>


    <tr>
    <td><b>Notification</b></td>
    <td><?php echo $notify; ?></td>
    </tr><br/>

</table>
    <br/>

    <?php die('Thank you for submission.<a href="'.$http_referer.'">Go back</a>')  ?>


