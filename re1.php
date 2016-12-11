<?php
//echo '<br> welcome to admain mail page <br>';

//Global $mailLoop;
//echo 'at mail server value of mailLoop is :'.$mailLoop;
$to='veena.sainiaug2shine@gmail.com,ashish@iiitd.ac.in,singhpv@nitj.ac.in';
$subject='Case Submitted';


//$category='requirement';

//$title='sample mail';
//$file_name="casemedicine.png";
$link="http://seabed.in/upload/".$file_name;
//$email='veena@example.com';
$body= ' Dear Admin,
       
 A case has been submitted by :'.$mailLoop.' on title : "'.$title.'" for category: "'.$category.'". 
 
 Please click here to view the case '.$link.'
       
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