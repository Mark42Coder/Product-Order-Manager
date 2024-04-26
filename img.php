<?php 
$imagick = new Imagick(); 
$imagick->readImage('test.pdf'); 
$imagick->writeImage('output.jpg'); 
echo 'sd';
?> 