<?php
$x=180;$y=110;
$img=imagecreatetruecolor($x,$y);
$red=imagecolorallocate($img,255,0,0);
imagefilledrectangle($img,0,0,$x,$y,$red);
header("content-type:img.png");
imagepng($img);
imagedestroy($img);

?>