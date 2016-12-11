<?php
//echo 'welcome to author mail page<br>';
//echo 'value at mail  '.$value;

//echo 'mail value at author end '.$email[$val];
$to=$value;
//echo 'mail send to '.$to;
$subject='Case Submitted';
//$category='requirement';

//$title='sample mail';
//$file_name="casemedicine.png";
$link="http://seabed.in/upload/".$file_name;
$email='veena@example.com';
$body= ' Dear Author,
       
 Your case on title : "'.$title.'" for category: "'.$category.'" has been submitted successfully. Thanks for case submission.
 
 You will soon recieve a feedback for the case.  
       
 Regards:

 Team Seabed. ';




//$headers .= "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/HTML;charset=UTF-8" . "\r\n";


$headers ='From: SEABED <admin@seabed.in>';

if(mail($to, $subject, $body, $headers))
{
	//echo 'mail has been sent to '.$to;
	}
//else
	//echo 'mail can not be sent';


?>