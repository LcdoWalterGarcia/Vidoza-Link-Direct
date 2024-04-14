<?php

$filelink="https://vidoza.net/ilzq2yoqpld2.html";
if (strpos($filelink,"vidoza.net") !== false || strpos($filelink,"testaway.xyz") !== false) {
  if (strpos($filelink,"https") === false) $filelink=str_replace("http","https",$filelink);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $filelink);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:22.0) Gecko/20100101 Firefox/22.0');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  $h2 = curl_exec($ch);
  curl_close($ch);
  if (preg_match('/([http|https][\.\d\w\-\.\/\\\:\?\&\#\%\_\,]*(\.mp4))/', $h2, $m)) {
    $link=$m[1];
    $link=str_replace("https","http",$link);
  } else
    $link="";
  if (preg_match('/([http|https]?[\.\d\w\-\.\/\\\:\?\&\#\%\_\,]*(\.(srt|vtt)))/', $h2, $m)) {
   $srt=$m[1];
   if (strpos($srt,"http") === false) $srt="https:".$srt;
   if (strpos($srt,"empty") !== false) $srt="";
  }
}
echo $link;
?>
