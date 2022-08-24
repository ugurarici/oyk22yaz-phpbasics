<?php

$meyveler = ["elma", "armut", "muz", "çilek"];

echo $meyveler[0];
echo $meyveler[1];
echo $meyveler[2];
echo $meyveler[3];

echo "<hr>";
for ($i = 0; $i <= 3; $i++) {
    // Burası i değişkeni 3'e eşit veya küçük olduğu sürece çalışır

    echo $meyveler[$i];
    echo "<br>";

    // Sonlandığında i'yi 1 arttır.
}
echo "<hr>";

echo "Meyveleri saymam bitti!<br>";

echo "Bir de tersine saymak istiyorum.<hr>";

// Erişmek istediğim sonuç:
// echo $meyveler[3];
// echo $meyveler[2];
// echo $meyveler[1];
// echo $meyveler[0];

for ($i = 3; $i >= 0; $i--) {
    echo $meyveler[$i];
    echo "<br>";
}

echo "<hr>";

//  foreach
//  iterable (bu senaryoda array) değerlerin içindeki her bir eleman için bir kere uygulanacak işlemleri yazabildiğimiz döngü
//  örneğin yukarıda $meyveler dizisindeki her bir elemanı ekrana basabilmek için for döngüsü içinde sırasıyla her bir indisin basılmasını sağladık
//  bunun yerine $meyveler dizisi içindeki her bir elemanı, sırayla bir referans değişkene atayarak üstünde işlem yapmamızı sağlayan çok yakışıklı bir döngü olarak foreach'i kullanacağız

$meyve = "ejder meyvesi";

echo $meyve;

echo "<hr>";

foreach ($meyveler as $meyve) {
    echo $meyve;
    echo "<br>";
}

echo "<hr>";

echo $meyve;

echo "<hr>";

//  foreach döngüsünde yalnızca dizi elemanının içeriğini değil, istersen elemanın indisini de bir değişkene atayabiliriz

$ogrenci = ["ad" => "Uğur", "soyad" => "Arıcı", "no" => 455];

foreach ($ogrenci as $key => $value) {
    echo $key . ": " . $value;
    echo "<br>";
}


//  PHP'de tek bir şarta bağlı ve şart sağlandığı sürece sürdürülecek bir döngü tanımlamak da mümkündür
//  while döngüsü tek parametre alır ve true döndüğü sürece tekrar etmeye devam eder

while (true) {
    echo "Sonsuz döngü 😱 <br>";

    if (rand(1, 6) == 4) break;
}

//  herhangi bir döngünün içinde artık döngünün tamamen durmasını, sonraki tekrarı da yapmamasını istiyorsak break komutunu kullanabiliriz.

echo "<hr>";


//  eğer bir döngünün kodunun en az 1 kere çalışmasını ve bir şart sağlandığı sürece de tekrar etmesini istiyorsak do while döngüsünü kullanabiliriz

$denemeSayisi = 0;

do {
    $zar = rand(1, 6);
    $denemeSayisi++;
} while ($zar !== 3);

echo $denemeSayisi . " kere denedikten sonra zar 3 geldi";
