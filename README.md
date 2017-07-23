<h1>Okuma Süresi (Reading Time)</h1>

Parametre olarak gelen makalenin kelime sayısını hesaplayarak, ortalama okunma süresini hesaplar.

<i>Calculates the average reading time by calculating the number of words of the article as a parameter.</i>

<h2>Kullanımı (<i>Use of</i>)</h2>

Normal bir okuma hızına göre, 2 kelimenin 1 saniyede okunacağı

<pre>
<b>readingTime("Ömer Gülçiçek");</b>  // "1 saniye" çıktısını verir.

<b>$cumle</b> = "Bu örnek bir makaledir. Veritabanından makaleleri çekerken,
          makale içeriğini bu fonksiyona parametre olarak atarsanız,
          tahmini olarak okunma süresini verecektir.
          Kelime sayısına göre tahmini okunma süresini saniye, dakika yada saat olarak geri döndürür.";
          
<b>$sentense</b> = "This is an example. When you are pulling articles from the database,
             if you pass the article content as a parameter to this function,
             it will give an estimated reading time.
             Returns the estimated reading time in seconds, minutes, or hours, based on the number of words."

<b>readingTime($cumle);</b>  // "16 saniye" çıktısını verir.
</pre>
