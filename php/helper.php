<?php

	ob_start();
    $config = json_decode(json_decode(file_get_contents('communication_config.json'), true), true);
	
	function contains($string, $substring) {
        return strpos($string, $substring) !== false;
    }

    function get_ordinal($years) {
        $years = (int) $years;
        $digit = abs($years) % 10;
        $ext = 'th';
        $ext = ((abs($years) %100 < 21 && abs($years) %100 > 4) ? 'th' : (($digit < 4) ? ($digit < 3) ? ($digit < 2) ? ($digit < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
        return $years.$ext;
    }

    function is_valid_phone($number) {
    	return strlen($number) == 10 ? TRUE : FALSE;
    }

    function is_valid_email($email) {
    	return filter_var($email, FILTER_VALIDATE_EMAIL) ? TRUE : FALSE;
    }

?>