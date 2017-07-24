<?php

function readingTime($content = "", $readingSpeed = 2)
{
    $fiftySeconds = 50; //Saniye bazında en yüksek değer - Max value per second
    $oneMinute = 60; //Bir dakika 60 saniyiedir - One minute 60 seconds
    $totalSecondsInOneHour = 3600; //1 saatteki toplam saniye - Total seconds in 1 hour

    //Parametre olarak gelen içerikten html taglarını kaldırır.
    //Ardından boşlukları baz alarak, içerikte kaç kelime olduğunu hesaplar.

    //Removes html tags from content that comes as a parameter.
    //It then calculates how many words are in the content, based on gaps.
    $wordCount = round(count(explode(" ", strip_tags($content))));

    //Kelime sayısını, parametre olarak gelen hız değerine (varsayılan olarak 2) bölerek okuma hızını hesaplar.
    //Calculates the reading speed by dividing the word count by the incoming speed value (default is 2).
    $readingTime = ceil($wordCount / $readingSpeed);

    //Okuma süresi 1 dk'nın aşağısında ise çıktıyı saniye bazında verir.
    //If the reading time is below 1 min, the output is given in seconds.
    if ($readingTime < $fiftySeconds)
    {
        $second = intval($readingTime / 10);
        $second++;
        $second *= 10;
        echo "$second saniye";
        //echo "$second second";
    }

    //Okuma süresi 1 dk'nın üzerinde ise çıktıyı dakika bazında verir.
    //If the reading time is above 1 min, output is given in minutes.
    else if ($readingTime < $totalSecondsInOneHour)
    {
        $minute = ceil($readingTime / $oneMinute);
        echo "$minute dakika";
        //echo "$minute minute";
    }

    //Okuma süresi 1 saatin üzerinde ise çıktıyı saat bazında verir.
    //If the reading time is over 1 hour, the output is given in hours.
    else
    {
        $hour = floor($readingTime / $totalSecondsInOneHour);
        echo "$hour saat";
        //echo "$hour hour";
    }
}

?>
