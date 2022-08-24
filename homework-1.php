<?php

//  örnek
//  PHP'de dahili bir fonksiyon kullanılarak diziler üstünde işlem yapabiliriz

$numbers = [9, 7, 13, 6, 5, 32, 666];

var_dump($numbers);

// https://www.php.net/sort
sort($numbers);

var_dump($numbers);

//  Bir sınav sonuç görüntüleme ekranı yapıyoruz
//  İsimleri birbirinden farklı öğrencilerin notlarını yazacağız (dizi olarak tutabilirsiniz)

//  Sınav sonuçlarını
//  1- Nota göre büyükten küçüğe
//  2- Nota göre küçükten büyüğe
//  3- İsme göre A->Z
//  4- İsme göre Z->A

//  En yüksek notu
//  En düşük notu
//  Not ortalaması
//  BONUS: standart sapma

//  HER BİR ÖĞRENCİ İÇİN NOT VERİSİ BİR KERE TANIMLANACAK
