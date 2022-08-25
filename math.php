<?php

// +$i herhangi bir değeri matematiksel işleme hazırlar (int/float)
// -$i herhangi bir değerin tersini almamızı sağlar

// 1 + 2 iki değerin toplanmasını sağlar
// 1 - 2 iki değerin çıkarılmasını sağlar
// 1 * 2 iki değeri çarpar ve sonucunu döndürür
// 1 / 2 iki değeri böler
// 1 % 2 değeri böler ve kalanını döndürür
// 1 ** 6 1^6 işlemini yapmış olur

$x = "1aa";
$y = 2;

$x = $x + $y;
echo $x;
/*
$x += $y;

// Hem operatörü uygulamak hem de atama yapmak istiyorsak operatörün sonunda
// = kullanabiliriz.

$x++; // $x'i ilgili yerde kullan ve daha sonra 1 arttır
++$x; // $x'i bir arttır ve ilgili yerde kullan
$x--; // $x'i ilgili yerde kullan ve daha sonra 1 azalt
--$x; // $x'i bir azalt ve ilgili yerde kullan

$toplam = 1 + $x++;
// Eşleniği;
// $toplam = 1 + 1(x'in arttırılmadan önceki değeri)
// $x += 1;
*/

// 6
// 0110

// & iki değerin bitlerine VE işlemini uygular ve sonucu döndürür
// | iki değerin bitlerinde VEYA işlemini uygular ve sonucu döndürür
// >> bir değerin bitlerini belirtilen miktarda sağa kaydırır
// << bir değerin bitlerini belirtilen miktarda sola kaydırır
// ^ bir değerin bitlerine XOR işlemini uygular ve sonucu döndürür
// ~ bir değerin bitlerinde NOT işlemi uygular

$sonuc = 6 & 4;

// 6 = 0110
// 4 = 0100
//     &&&&
// 4 = 0100

echo "<hr>";

//  ÖRNEK

//  PHP'deki dahili fonksiyonları (array_sum ve count) kullanmadan
//  tamamı sayısal veriden oluşan bir dizideki elemanların ortalamasını alalım

$numbers = [1, 4, 13, 23, 26, 48];
$sum = 0;
$count = 0;
$avg = null;


foreach ($numbers as $number) {
    $sum += $number;
    $count++;
}

$avg = $sum / $count;

echo $avg;
