<?php

//  dizi halinde aldığı sayıların ortalamasını dönecek bir fonksiyon yazacağız

//  parametre olarak bir dizi alınır
//  sonuçta işlem yapabilmek adına
//  sayıların toplamı ve dizinin eleman sayısı için birer değişken atanır

//  dizideki tüm elemanlar döngüye sokulur
//  her elemanın kendi değeri yukarıda tanımlanmış toplam değişkenine eklenir
//  her eleman için eleman sayısı değişkeni 1 artırılır

//  döngüden sonra, toplam değişkeni eleman sayısı değişkenine bölünür
//  bu bölme işleminin çıktısı fonksiyondan dışarı döndürülür

function avg($array)
{
    $sum = 0;
    $count = 1;

    foreach ($array as $item) {
        $sum += $item;
        $count++;
    }

    return $sum / $count;
}

$numbers = [1, 2, 3];

echo avg($numbers);

echo "<hr>";

if (avg([1, 2, 3]) === 2) {
    echo "avg() fonksiyonu beklendiği şekilde çalışıyor";
} else {
    echo "avg() fonksiyonu beklendiği şekilde çalışmıyor. 2 sonucunu üretmesi gerekirken şunu üretti: " . avg([1, 2, 3]);
}
