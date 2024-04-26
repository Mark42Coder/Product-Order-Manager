<?php
	include("session_check.php");

	$file_name = $_POST['file_name'];
	$data = $_POST['data'];

	if (isset($file_name) && isset($data) && !empty($file_name) && !empty($data)) {
		$file = fopen($file_name, 'w') or die('Unable to open file!');
		fwrite($file, json_encode($data));
		fclose($file);
	}

?>