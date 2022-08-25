<?php

//  PHP'de dinamik bir çıktı üretebilmek için, özellikle HTTP talebi ile gelen
//  ve mevcut PHP yorumlayıcısının üzerinde çalıştığı sunucunun bilgilerini içeren
//  veriler bazı ön tanımlı değişkenlere atanır, ve biz uygulama geliştirirken
//  kullanımımıza sunulur

//  Örneğin; HTTP talebi içinden okunan adres ve bu adres içinde gönderilen
//  dinamik parametreler (query string) PHP'de $_GET isimli bir değişkene atanır

//  bu durumda, detay.php?sira=2 şeklinde bir ziyaret yapıldığında
//  $_GET dizisi içinde, indisi "sira" değeri ise 2 olan bir eleman bulunur

//  Arka planda bu adres verisi parçalanır, ve dizinin içine doldurulur
//  Sanki bunu biz gözle okuyup şöyle bir kod yazmışız gibi;
//  $_GET = ["sira" => "2"];


//  $GLOBALS -> global scope'ta tanımlanmış tüm değişkenlerini barındırır

$mahmut = "kankitö";
$baskaBirDegisken = "bu da var";

echo "<pre>";
var_dump($GLOBALS);
echo "</pre>";
