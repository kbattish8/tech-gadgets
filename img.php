<?php
$img=imagecreate(500,300);
$bgcolor=imagecolorallocate($img,120,110,20);
$fontcolor=imagecolorallocate($img,150,250,180);
imagestring($img,12,150,120,"demo text1",$fontcolor);
imagestring($img,10,170,120,"demo text2",$fontcolor);
header("content-type:image/png");
imagepng($img);
imagedestroy($img);


?>