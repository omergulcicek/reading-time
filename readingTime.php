<?php
function readingTime($content = "")
{
    $wordCount = count(explode(" ", strip_tags($content)))/2;
    echo ($wordCount < 60) ? ceil($wordCount) . " saniye" : (($wordCount >= 60 && $wordCount < 3600) ? ceil($wordCount/60) . " dakika" : ceil($wordCount/3600) . " saat") . " (" . ceil($wordCount) . " kelime)";
}
?>
