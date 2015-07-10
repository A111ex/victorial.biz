<?php
global $fileMassivPath, $minCnt, $maxCnt;
require($_SERVER['DOCUMENT_ROOT'].'/init.php');
$fileMassivPath=__DIR__.'/count.txt';
$minCnt = 1;
$maxCnt = 20;

if ($_POST) { // если передан массив POST

    $json = array(); // подготовим массив ответа
    $name = $_POST['name'];
    $phone = $_POST['phone'];          
    $text_title = $_POST['title'];          
    $title = ''.$text_title.'';     
    $text = "Консультация 500р<br>
            Имя: $name<br />   
            Телефон: $phone<br/>
            Откуда: victorial.biz<br/>";    
    /* $to = "masterv12@ya.ru"; */
    $to = "vic@victorial.biz, advokatkrasnodar@yandex.ru";
	$subject="=?utf-8?B?". base64_encode("$title"). "?=";
	$header="From:  victorial.biz"; 
	$header.="\nContent-type: text/html; charset=\"utf-8\"";
	$message = "$text";
	
	mail($to, $subject, $message, $header);

    $json['error'] = 0; // ошибок не было
    incCount();
    echo json_encode($json); // выводим массив ответа
} else { // если массив POST не был передан
    echo 'GET LOST!'; // высылаем
}