<?php
session_start();
header('content-type: image/jpeg');
$_SESSION['secure']=rand(1000,9999);
$text=$_SESSION['secure'];
$text_lenth=strlen($text);
$font_size=30;

$image_width=100;
$image_height=45;

$image=imagecreate($image_width,$image_height);
imagecolorallocate($image, 0, 0, 0);
$font_color=imagecolorallocate($image, 255,255, 255);

for($x=1;$x<=20;$x++)
{
    $x1=rand(1,90);
    $x2=rand(1,90);
    $y1=rand(1,90);
    $y2=rand(1,90);

    imageline($image, $x1, $y1, $x2, $y2, $font_color);
}


imagettftext($image,$font_size,0, 15, 30,$font_color,'fontFile.ttf', $text);
imagejpeg($image);


?>

