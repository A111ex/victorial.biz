<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
$text_title = 'Привет';
$title = '' . $text_title . '';
$text = "
            Имя: <br />   
            Телефон: <br/>
            Откуда: victorial.biz<br/>";
$to = "MasterV12@ya.ru";
//    $to = "vic@victorial.biz";
$subject = "=?utf-8?B?" . base64_encode("$title") . "?=";
$header = "From:  victorial.biz";
$header.="\nContent-type: text/html; charset=\"utf-8\"";
$message = "$text";

mail($to, $subject, $message, $header);
