<?php
//print 100;
function getMassiv(){
	global $fileMassivPath;
	if(!$arMassiv=unserialize(file_get_contents($fileMassivPath))){
		$arMassiv=array();
	}
	return $arMassiv;
}
function setMassiv($arMassiv){
	global $fileMassivPath;
  //print $fileMassivPath;
	file_put_contents($fileMassivPath, serialize($arMassiv));
}
function incCount(){
	global $minCnt, $maxCnt;
	$arMassiv=getMassiv();
	$arMassiv['COUNT'] = intval($arMassiv['COUNT']);
	$arMassiv['COUNT'] = ($arMassiv['COUNT'] >= $maxCnt)?($minCnt):($arMassiv['COUNT'] +1);
	//print $arMassiv['COUNT'];
	setMassiv( $arMassiv );
}
