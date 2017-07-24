<h1>Okuma Süresi (Reading Time)</h1>

Parametre olarak gelen makalenin kelime sayısını hesaplayarak, ortalama okunma süresini hesaplar.

<i>Calculates the average reading time by calculating the number of words of the article as a parameter.</i>

<h2>Kullanımı (<i>Use of</i>)</h2>

Normal bir okuma hızına göre, 1 saniyede 2 kelime okunacağı baz alınmıştır.

<i>Based on a normal reading speed, it is assumed to read 2 words in 1 second.</i>

<pre>
<b>$cumle</b> = "Bu örnek bir makaledir. Veritabanından makaleleri çekerken,
          makale içeriğini bu fonksiyona parametre olarak atarsanız,
          tahmini olarak okunma süresini verecektir.
          Kelime sayısına göre tahmini okunma süresini saniye, dakika yada saat olarak geri döndürür.";
          
<b>$sentense</b> = "This is an example. When you are pulling articles from the database,
             if you pass the article content as a parameter to this function,
             it will give an estimated reading time.
             Returns the estimated reading time in seconds, minutes, or hours, based on the number of words."

<b>readingTime($cumle);</b>  // "20 saniye" çıktısını verir.
</pre>

Varsayılan okuma hızı saniyede 2 kelimedir. Bu hızı, <b>readingTime</b> fonksiyonunun 2. parametresinden değiştirebilirsiniz.

//The default reading speed is 2 words per second. You can change this speed from the 2nd parameter of the <b>readingTime</b> function.

<pre>
readingTime($cumle, <b>3</b>); //Saniyede 3 kelime - <i>3 words per second</i>

readingTime($cumle, <b>5</b>); //Saniyede 5 kelime - <i>5 words per second</i>
</pre>
