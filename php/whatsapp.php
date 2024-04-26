<?php
/*
$arr=json_encode(array(
	"phone"=>"919944226286",
	"body"=>"Hello "
));
$url="https://api.chat-api.com/instance246853/message?token=inbnm9ykm2k1e31i";

	"body"=>"https://upload.wikimedia.org/wikipedia/ru/3/33/NatureCover2001.jpg",
	"filename"=>"NatureCover2001.jpg"
*/

$arr=json_encode(array(
	"phone"=>"919944226286",
	"body"=>"https://acc.rmchurch.in/pdf/Quotation.pdf",
	"filename"=>"Quotation.pdf"
));


$url="https://api.chat-api.com/instance246853/sendFile?token=inbnm9ykm2k1e31i";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
	'Content-type:application/json',
	'Content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);
echo $result;


?>