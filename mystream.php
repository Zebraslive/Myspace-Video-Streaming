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
preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $htmlf, $match);
$vlink = "";
foreach ($match[0] as $c) {
   if (strpos($c, 'videos.myspacecdn.com:443') !== false) { //if contains get_file/ in url set vlink.
      $vlink = $c;  
    }
}
return $vlink;   
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
