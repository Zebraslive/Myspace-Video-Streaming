<?php
function myStream($myspacelink) {
$htmlf = file_get_contents($myspacelink);
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
?>
