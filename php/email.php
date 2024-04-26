<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';

	include_once("helper.php");

	$host = $config["email"]["settings"]["host"];
	$port = (int) $config["email"]["settings"]["port"];
	$username = $config["email"]["settings"]["username"];
	$password = $config["email"]["settings"]["password"];

	if(isset($_POST["subject"]) && !empty($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["message"]) && isset($_POST["contacts"]) && !empty($_POST["contacts"])) {
		$subject = $_POST["subject"];
        $message = $_POST["message"];
        $contacts = json_decode($_POST["contacts"], true);
        dispatch_mail($subject, $message, $contacts);
    }

	function dispatch_mail($subject_template, $msg_template, $contacts) {
        foreach($contacts as $contact) {
            if(is_valid_email($contact["email"])) {
                $subject = str_replace("<name>", $contact["name"], $subject_template);
                $subject = str_replace("<years>", get_ordinal($contact["years"]), $subject);
                $subject = str_replace("<date>", $contact["date"], $subject);

                $message = str_replace("<name>", $contact["name"], $msg_template);
                $message = str_replace("<years>", get_ordinal($contact["years"]), $message);
                $message = str_replace("<date>", $contact["date"], $message);

                send_mail($subject, $message, $contact["email"], $contact['name']);
            }
        }
	}

	function send_mail($subject, $message, $to, $name) {
		global $host, $port, $username, $password;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";

		$mail->SMTPDebug  = 1;
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPSecure = "tls";
		$mail->Port       = $port;
		$mail->Host       = $host;
		$mail->Username   = $username;
		$mail->Password   = $password;

		$mail->IsHTML(true);
		$mail->AddAddress($to, $name);
		$mail->SetFrom($username, "RM Church");
		$mail->AddReplyTo($username, "RM Church");
		$mail->Subject = $subject;
		$content = nl2br($message);

		$mail->MsgHTML($content); 
		if(!$mail->Send()) {
			echo "Error while sending Email.";
			var_dump($mail);
		} else {
			echo "Email sent successfully";
		}
	}

/*

 Email Settings:

 - Before sending emails using the Gmail's SMTP Server, you to make some of the security and permission level settings under your Google Account Security Settings.

 - Make sure that 2-Step-Verification is disabled.

 - Turn ON the "Less Secure App" access or click here.

 - If 2-step-verification is enabled, then you will have to create app password for your application or device.

 - For security measures, Google may require you to complete this additional step while signing-in. Click here to allow access to your Google account using the new device/app.

*/
 ?>