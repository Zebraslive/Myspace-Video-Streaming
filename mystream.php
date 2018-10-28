<?php
function curlit($url){
       $ch = curl_init();
$timeout = 8;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //don't change!
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$htmlf = curl_exec($ch);
curl_close($ch);
return $htmlf;
}
function myStream($myspacelink) {
$htmlf = curlit($myspacelink);
$fsk = "";
$internalErrors = libxml_use_internal_errors(true);
$dom = new DOMDocument();
@$dom->loadHTML($htmlf);
foreach($dom->getElementsByTagName('script') as $k => $js) {
if ($k >= 5) {
       $fsk = $js->nodeValue;
     break;
    }
}
$parts = explode('mp4StreamUrl":"', $fsk);
$partsx = explode('","isPremium"', $parts[1]);
$myvidx = $partsx[0]; //Stream mp4 url
return $myvidx;   
}
function grabImg($url) {
$htmlf = curlit($url);
$fsk = "";
$internalErrors = libxml_use_internal_errors(true);
$dom = new DOMDocument();
@$dom->loadHTML($htmlf);
foreach($dom->getElementsByTagName('script') as $k => $js) {
if ($k >= 5) {
       $fsk = $js->nodeValue;
     break;
    }
}
$parts = explode('"Still":"', $fsk);
$partsx = explode('"},"uid":"', $parts[1]);
$posterimg = $partsx[0]; //poster img
return $posterimg;  
}
?>
