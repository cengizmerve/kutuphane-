<?php
function redirect($url,$sure=0)
{
	echo '<META http-equiv="refresh" content="'.$sure.';URL='.$url.'">';
}

function replace_tr($text) 
{
	$text = trim($text);
	$search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ','.',',','"',"'",'é','/','+','_','*','$','€');
	$replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-','','','','','','','','','','','');
	$new_text = str_replace($search,$replace,$text);
	return strtolower($new_text);
}  
function XMLPOST($PostAddress,$xmlData) {         
		$ch = curl_init();         
		curl_setopt($ch, CURLOPT_URL,$PostAddress);           
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);         
		curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml")); 
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);         
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);         
		$result = curl_exec($ch);         
		return $result; 
	}
	function tcno_dogrula($bilgiler){

		$gonder = '<?xml version="1.0" encoding="utf-8"?>
		<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
		<soap:Body>
		<TCKimlikNoDogrula xmlns="http://tckimlik.nvi.gov.tr/WS">
		<TCKimlikNo>'.$bilgiler["tcno"].'</TCKimlikNo>
		<Ad>'.$bilgiler["isim"].'</Ad>
		<Soyad>'.$bilgiler["soyisim"].'</Soyad>
		<DogumYili>'.$bilgiler["dogumyili"].'</DogumYili>
		</TCKimlikNoDogrula>
		</soap:Body>
		</soap:Envelope>';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,            "https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt($ch, CURLOPT_POST,           true );
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POSTFIELDS,    $gonder);
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array(
		'POST /Service/KPSPublic.asmx HTTP/1.1',
		'Host: tckimlik.nvi.gov.tr',
		'Content-Type: text/xml; charset=utf-8',
		'SOAPAction: "http://tckimlik.nvi.gov.tr/WS/TCKimlikNoDogrula"',
		'Content-Length: '.strlen($gonder)
		));
		$gelen = curl_exec($ch);
		curl_close($ch);

	    return strip_tags($gelen);
	}
	
	function kucukten_buyuge($metin){
        $bul = 		array('ı','i','ğ','ü','ş','ö','ç');
        $degistir = array('I','İ','Ğ','Ü','Ş','Ö','Ç');
        $metin = str_replace($bul,$degistir,$metin);
        return $metin;
    } 
?>