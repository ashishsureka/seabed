<?php 
if(isset($_SESSION['id'])&&!empty($_SESSION['id']))
session_destroy();

session_start();
require 'connect.inc.php';
$field="abstract";

if(isset($_POST['title'])&&!empty($_POST['title']))
{
  $title1=$_POST['title'];

$query="SELECT * FROM `formdata` WHERE `title` LIKE '$title1'";
if($query_run=mysql_query($query))
    {
    
         $num_row=mysql_num_rows($query_run);
if($query_run=mysql_query($query))
    if($query_result=mysql_fetch_assoc($query_run))
      {

               foreach ($query_result as $key=>$value) {
                if($key=='id')
                  {
                  echo '<span style="font-size:25px">';
                  $_SESSION['id']=$query_result['id'];
                    echo '#'.$query_result['id'].' &nbsp;';
                  }
               
               if($key=='title')
               {
                echo $title1.'</span>';
                $_SESSION['title']=$title1;
               }
                
              if($key=='abstract')
                $abstract=$query_result['abstract'];
                $target_path=''.$query_result['targetPath'];
               $_SESSION['path']=$query_result['targetPath'];
                 if($key=='author')
                 {
                  $value;
                  $author=unserialize($value);
                  $length=$query_result['authorCount'];
                  $val=0;
                  echo '<br>';
                  echo str_repeat("&nbsp;", 15);
                  echo '<span style="color:#001f3f"> uploaded by ';

                  while($length!=0){
                    if($length==1)
                   echo $author[$val].' &nbsp; ';
                 else
                    echo $author[$val].' ,  ';
                   $val=$val+4;
                   $length=$length-1;
                  }
               
                 }
 if($key=='date')
  $date=$query_result['date'];

                   

               }

      }     

      echo '  on '.$date.'</span> &nbsp;';     

    




      // Next query from case revision

     
         
      
}
}



?>



<style type="text/css">

 .myPar table, .myPar td {
    border: 2px solid #3D9970;
    border-spacing: 2px;
    height:30px; 


}
</style>
  
    


<a href="<?php 


$result=fork(); 

echo $result;   ?>" class="btn btn-info" download style="background-color:#722040;">fork </a> 

<?php echo '<br><br><hr>'; ?>

<table align="center" class="myPar" width="570" cellpadding="0" cellspacing="0" style="margin-top:-7em; margin-right: 70px;">
 

<tr>
  
<td style="text-align:left;">
 </td>
<br/>

</tr>

<tr>
  
<td ><div style="font-style: normal; font-size: 15px;height: 100px;width: 300px;text-align:left;"><b>Abstract  :</b> <br/> <?php echo $abstract; ?> <br/></div> <br/></td>


</tr>


<tr>
  
<td style="text-align:left;"><a href="<?php echo $target_path; ?>" target="_blank">View Case</a> </td>


</tr>


  

<tr>
  
<td style="text-align:left;"><a href="<?php echo $target_path; ?>" target="_blank" download>download Case</a> </td>
<br/>

</tr>



<tr>
<td style="text-align:right;">
<?php

 

 $query=" SELECT * FROM `case_revision` WHERE `case_Id`=".$_SESSION['id']." ORDER BY `SubDate`";

      if($query_run=mysql_query($query))
    {
    
         $num_row=mysql_num_rows($query_run);
         $v=1;
         $p=1;
        
         $e=1;
    while($query_result=mysql_fetch_assoc($query_run))
      {
        if(!empty($query_result['revision']))
        {
          echo '<a href="'.$query_result['revision'].' " target="_blank"> Revision'.$v.'</a>&nbsp;';
          echo '<a href="#jus'.$v.'" class="btn btn-info" data-toggle="collapse" style="background-color:#39CCCC"> Justification'.$v.'</a> 
          
           <div id="jus'.$v.'" class="collapse"> '.$query_result['justification'].'   </div> &nbsp;';          


          $v=$v+1;

        }
        if(!empty($query_result['report']))
        {
          echo '<a href="'.$query_result['report'].' " target="_blank"> Report'.$p.'</a>&nbsp;';
          $p=$p+1;
          

        }

        if(!empty($query_result['experience']))
        {
          
          echo '<a href="#exp'.$e.'" class="btn btn-info" data-toggle="collapse" style="background-color:#7FDBFF"> Experience'.$e.'</a> 
          
           <div id="exp'.$e.'" class="collapse"> '.$query_result['experience'].'   </div>


          &nbsp;';


          $e=$e+1;

        }
          
         
          
          echo '&nbsp; &nbsp;&nbsp;&nbsp; <span style="color:brown">uploaded by '.$query_result['firstName'].' on '.$query_result['SubDate'].'</span><hr><br>';     
  }
         
        }



        ?>
        </td>

</tr>





</table>


















<?php


function create_zip($files=array(),$destination,$overwrite)

{
  

     if(file_exists($destination)&&!$overwrite) 
     {
      
      return false;
     }

   else
   {

    $valid_files=array();

    if(is_array($files))
   { 
       foreach ($files as $file) 
      { 
        if(file_exists($file))
                {  
                  $valid_files[]=$file; }

        }

       if(count($valid_files))
{
  $zip=new ZipArchive();
  
  if($zip->open($destination,true))
  {
      
foreach ($valid_files as $file) {
  
  $zip->addFile($file,$file);
}

if($zip->close())
  
return $destination;
  }
//$zip->open($destination,true);

}

  }

} 







}


function fork()
{
  
$files_to_zip=array();

$files_to_zip[0]=$_SESSION['path'];

 $query=" SELECT * FROM `case_revision` WHERE `case_Id`=".$_SESSION['id']." ORDER BY `SubDate`";

      if($query_run=mysql_query($query))
    {
    
         $num_row=mysql_num_rows($query_run);
         
         $i=1;
    while($query_result=mysql_fetch_assoc($query_run))
      {
        if(!empty($query_result['revision']))

          $files_to_zip[$i++]=$query_result['revision'];
       
        if(!empty($query_result['report']))
    
           $files_to_zip[$i++]=$query_result['report'];
            
      }

           $result=create_zip($files_to_zip,"Archive/Case".$_SESSION['id'].".zip",true);
           return $result;
                       
         
        }


}




?>