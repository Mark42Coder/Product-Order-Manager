<?php

    include_once("helper.php");

    $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $hour = (int) $date->format("h");
    $session = $date->format("A");

    include("sms.php");
    include("email.php");
    
    $test = array();
    array_push($test, array("number" => "9500013352"));
    dispatch("Cron::" . $hour . $session, $test);

    if ($config["sms"]["birthday"]["autoNotify"] && $config["sms"]["birthday"]["preferredTime"] == $hour && $config["sms"]["birthday"]["preferredSession"] == $session) {
        prepare_sms("dob", "birthday");
    }

    if ($config["sms"]["anniversary"]["autoNotify"] && $config["sms"]["anniversary"]["preferredTime"] == $hour && $config["sms"]["anniversary"]["preferredSession"] == $session) {
        prepare_sms("dom", "anniversary");
    }

    if ($config["email"]["birthday"]["autoNotify"] && $config["email"]["birthday"]["preferredTime"] == $hour && $config["email"]["birthday"]["preferredSession"] == $session) {
        prepare_mail("dob", "birthday");
    }

    if ($config["email"]["anniversary"]["autoNotify"] && $config["email"]["anniversary"]["preferredTime"] == $hour && $config["email"]["anniversary"]["preferredSession"] == $session) {
        prepare_mail("dom", "anniversary");
    }

    function prepare_sms($field, $message_type) {
        global $config;
        $sql = "SELECT name, mobile_no as number, DATE_FORMAT($field, '%d-%m-%Y') as date, TIMESTAMPDIFF(YEAR, $field, CURDATE()) AS years FROM members WHERE DAY($field)=DAY(CURDATE()) and MONTH($field)=MONTH(CURDATE())";
        $template = $config["sms"][$message_type]["messageTemplate"];

        include("db.php");
        $contacts = array();
        if ($result = $con->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                array_push($contacts, $row);
            }
        }
        $result->free();
        $con->close();
        print_r($contacts);
        dispatch($template, $contacts);
    }

    function prepare_mail($field, $message_type) {
        global $config;
        $sql = "SELECT name, email, DATE_FORMAT($field, '%d-%m-%Y') as date, TIMESTAMPDIFF(YEAR, $field, CURDATE()) AS years FROM members WHERE DAY($field)=DAY(CURDATE()) and MONTH($field)=MONTH(CURDATE())";
        $subject = $config["email"][$message_type]["subject"];
        $message = $config["email"][$message_type]["messageTemplate"];

        include("db.php");
        $contacts = array();
        if ($result = $con->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                array_push($contacts, $row);
            }
        }
        $result->free();
        $con->close();
        dispatch_mail($subject, $message, $contacts);
    }

?>