<?php
//$to =$value.',veena.sainiaug2shine@gmail.com,admin@seabed.in,ashish@iiitd.ac.in,singhpv@nitj.ac.in';
$to =$value.',veena.sainiaug2shine@gmail.com,admin@seabed.in';
$index=$key;
$first_name=$author_name[$index];
$first_name=strtoupper($first_name);
$subject = 'SEABED Case #'.$id.' Revision Acknowledgement';
$from = 'SEABED <admin@seabed.in>';
// author details computation 
$details='';
$temp=$authorCount;
$enm=0;
$count=0;
foreach ($arr as $key => $value) {
      $count=$count+1;  
      $val=$count%4;
     
if($val==1)
{
$enm=$enm+1;
$temp=$temp-1;
$details=$details.'('.$enm.') Author name: ';

}
if($val==0)
{
 $details=$details.'<br>email id: ';

}if($val==3)
{
  $details=$details.'<br>affiliated to: ';

}
    
    if(($val!=0)&&($val!=1))
      $details=$details.$value.',';
    else
      $details=$details.$value.' ';
       
       if(($val==0)&&($temp!=0))
        $details=$details.'<hr>';
} 

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html> <head> <style>
table,td {
    border: 2px solid #3498db;
    border-spacing: 2px;
    height:30px;
    text-align:center
    
}


</style>
</head> <body>';
$message .='<p>Dear '.$first_name.', </p>';
$message .='<p>Thanks for submitting the Revision of the following Case to SEABED. We appreciate your valuable contributions to SEABED. </p>';
$message .= '<table align="center" width="80%"cellpadding="0" cellspacing="0" style="margin-top:-7em;">
 <col width="200">
  <col width="200">
    
    <tr>
    <td colspan="2"><b><h3 style="text-align:center">Submission Details <h3></b></td>
    </tr>
    
    <tr>
    <td><b>ID</b></td>
    <td>'.$id.'</td>
    </tr>
    

    <tr>
    <td><b>Title</b></td>
    <td>'.$title.'</td>
    </tr>
    
    <tr>
    <td><b>Authors details </b></td>
    <td>'.$details.'</td>
    </tr>
   
   <tr>
    <td><b>Submission Date</b></td>
    <td>'.$date1.'</td>
    </tr>


    <tr>
    <td><b>Revision Uploaded</b></td>
    <td><a href="http://seabed.in/'.$rev.'">'.$revFile_name.'</a></td>
    </tr>

    <tr>
    <td><b>Justification for the Revision </b></td>
    <td><a href="http://seabed.in/'.$jus.'">'.$jusFile_name.'</a></td>
    </tr>
    </tr>
    

    <tr>
    <td><b>Notification</b></td>
    <td>'.$notify.'</td>
    </tr>
    
    
    </table>
    <br/>';  
 $message .= '<p> Please send an email to Veena veena.sainiaug2shine@gmail.com and admin@seabed.in in case you have any questions. </p>';   
 $message .='<p>Thanks and Regards - SEABED <a href="seabed.in">seabed.in</a></p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    //echo'mail has been sent to'.$to;
} 
?>