<?php 
session_start();

$_SESSION['captcha']=0;
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
      	$_SESSION['captcha']=1;
      }
     else
      die('Captcha mismatch. <a href="'.$http_referer.'">Please try again </a>');

}










$try=$_POST['boxes2'];
$_SESSION['try']=$try;

 $_SESSION['author_details']= serialize( $_POST['boxes2'] );


if(isset($_POST['notification'])&&!empty($_POST['notification']))
 $notify="ON";
else
$notify="OFF";

$_SESSION['notify']=$notify;

?>