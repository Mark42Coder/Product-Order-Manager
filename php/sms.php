<?php

    include_once("helper.php");

    $api = $config["sms"]["settings"]["apiKey"];
    $language = $config["sms"]["settings"]["language"];

    if(isset($_POST["message"]) && !empty($_POST["message"]) && isset($_POST["contacts"]) && !empty($_POST["contacts"])) {
        $message = $_POST["message"];
        $contacts = json_decode($_POST["contacts"], true);
        dispatch($message, $contacts);
    }

    function dispatch($template, $contacts) {
        if (contains($template, "<name>") || contains($template, "<years>") || contains($template, "<date>")) {
            foreach($contacts as $contact) {
                if(is_valid_phone($contact["number"])) {
                    $message = str_replace("<name>", $contact["name"], $template);
                    $message = str_replace("<years>", get_ordinal($contact["years"]), $message);
                    $message = str_replace("<date>", $contact["date"], $message);
                    send($message, $contact["number"]);
                    //echo $message . ' - ' . $contact["number"] . '<br>';
                }
            }
        } else {
            $numbers = array();
            foreach($contacts as $contact) {
                if(is_valid_phone($contact["number"])) {
                    array_push($numbers, $contact["number"]);
                }
            }
            send($template, implode(",", $numbers));
            //echo $template . ' - ' . implode(",", $numbers) . '<br>';
        }
    };

    function send($message, $contacts) {
        global $api, $language;
        $fields = array("sender_id" => "FSTSMS", "message" => $message, "language" => $language, "route" => "p", "numbers" => $contacts);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($fields),
            CURLOPT_HTTPHEADER => array(
                "authorization: $api",
                "accept: */*",
                "cache-control: no-cache",
                "content-type: application/json"
            )
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

?>