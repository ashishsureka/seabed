<?php
//$to =$value.',veena.sainiaug2shine@gmail.com,admin@seabed.in,ashish@iiitd.ac.in,singhpv@nitj.ac.in';
$to =$email.',veena.sainiaug2shine@gmail.com,admin@seabed.in';

$first_name=$fn;
$first_name=strtoupper($first_name);
$subject = 'SEABED Case #'.$id.' Revision/Report Acknowledgement';
$from = 'SEABED <admin@seabed.in>';
// author details computation 

$details="Author Name: ".$fn." ".$ln."<br>";
$details=$details."Email Id: ".$email."<br>";
$details=$details."Affiliated to : ".$af."<br>";

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
$message .='<p>Thanks for submitting the following case to SEABED. We appreciate your valuable contributions to SEABED. </p>';
$message .= '<table align="center" width="700"cellpadding="0" cellspacing="0" style="margin-top:-7em;">
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
    <td> '.$jus.'</td>
    </tr>
    

    <tr>
    <td><b>Report Uploaded</b></td>
    <td><a href="http://seabed.in/'.$rev.'">'.$repFile_name.'</a></td>
    </tr>

    <tr>
    <td><b>Experience </b></td>
    <td>'.$exp.'</td>
    </tr>

    <tr>
    <td><b>Recommendation</b></td>
    <td>'.$rec.'</td>
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