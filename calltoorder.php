<?php
header('Content-Type: text/html; charset=utf-8');

require("init.php");
global $fileMassivPath, $minCnt, $maxCnt;
$fileMassivPath=dir(__FILE__).'/count.txt';
$minCnt = 1;
$maxCnt = 20;

if (isset($_POST['namecall'])) { $namecall = $_POST['namecall'];}
if (isset($_POST['telcall'])) { $telcall = $_POST['telcall'];}

if(isset($namecall) && isset($telcall)){
	if ($namecall) {trim($namecall);} else { $namecall = ""; }
	if ($telcall) {trim($telcall);} else { $telcall = ""; }
	
    $mail = "vic@victorial.biz, advokatkrasnodar@yandex.ru";
    $title_mass  = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=\"utf-8\"\r\n";
    //$title_mass  .= "Bcc: alexdamir@mail.ru\r\n";
    $title_mass  .= "From: victorial.biz"; 
    if($_POST['metrika']=='akcia') {
      $title = "Акция - заявка.";
	}   elseif($_POST['metrika']=='zayavka') {
      $title = "Оставить  - заявку.";
    }	elseif($_POST['metrika']=='is_quest') {
      $title = "Остались вопросы.";
    } else {
      $title = "Заказан обратный звонок.";
    }
	$message = "\nКонсультация 500 рублей\nФИО: ".$namecall."\nТелефон: ".$telcall ."\n";
    if($_POST['metrika']=='vopros') {
      $emailcall = ( isset($_POST['emailcall'])? $_POST['emailcall']:'' ); 
      $messagecall = ( isset($_POST['messagecall'])? $_POST['messagecall']:'' );
      $message .= "E-mail: ".$emailcall ." <br/>
  			           Текст : ".$messagecall ;
    }
    //$message .= "</p>";

		if (mail($mail,$title,$message, $title_mass) )    {	
     
      } else {exit('err');}
    
		
} else {
	exit("Вы не туда зашли");
}

?>