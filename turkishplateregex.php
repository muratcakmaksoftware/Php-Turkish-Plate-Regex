<?php

//https://www.phpliveregex.com/  //testin yapılması
//wiki baz alındı: https://en.wikipedia.org/wiki/Vehicle_registration_plates_of_Turkey
$GLOBALS['regexPlate1'] = "/\b\d{2}\W[A-Z]{1,3}\W\d{2,5}\b/"; // 99 X 99 ~ 99 XXX 99999
$GLOBALS['regexPlate2'] = "/\b\d{2}[a-zA-Z]{1,3}\d{2,5}\b/"; // 99X99 ~ 99XXX99999

/*
 \b kelime sınırlama
 \d sayı
 \W kelime olmayan karakter -_* gibi
 \[a-zA-Z] büyük küçük latin harf
 \{0,3} adet aralığı belirlenmesi
 * */
 
 /**
 * @param  string $plate
 * @return boolean
 */
function turkishPlateSearch($plate)
{
	$matches = [];
	preg_match($GLOBALS['regexPlate1'], $plate, $matches);
	return count($matches) > 0 ? true : false;
}

echo turkishPlateSearch("99 A 99"). "<br/>";
echo turkishPlateSearch("99 AAA 9999"). "<br/>";