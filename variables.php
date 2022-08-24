<?php

//  PHP yorumlayıcımızın yüklü ve çalışır olduğundan emin olmak, 
//  mevcut sürüm ve eklentileri kontrol edebilmek için phpinfo() fonksiyonunu çalıştırabiliriz

//  phpinfo();

//  PHP ile dinamik çıktılar üretmek için ihtiyaç duyacağımız temel şey; değişkenler oluşturmaktır
//  PHP'de değişken oluşturmak çok kolaydır
//  Bir dolar işareti ($) ardından, alfa nümerik değerler ve alt çizgi içerebilen bir isim
//  eşittir (=) ile atama ve karşısına da değişkene atayacağımız değerin yazılmasıyla
//  kolaylıkla değişken oluşturabiliriz
//  PHP yazarken her ifadenin sonuna koyduğumuz gibi bu atama ifadesi sonrasında da noktalı virgül (;) koymalıyız
//  değişken isimleri rakam içerebilse bile rakam ile başlayamaz

$name = "Uğur Arıcı";

//  Hemen her programlama dilinde olduğu gibi, PHP'de de değişkenler farklı tiplerde veri barındırabilir
//  Değişkenlere atayabileceğimiz veri tipleri; 
//      metin, tam sayı, ondalıklı sayı, boolean (true OR false), null, dizi, object, resource

//  Veri tipleri bir programın çalışma mantığı açısından çok önemlidir
//  Örneğin matematiksel işlemler için sayısal veri tiplerinin kullanımı gerekir
//  PHP, varsayılan değişkenlerin tipini kısıtlamaz, siz değişkene nasıl atama yaptıysanız, değişkenin tipi o olur

//  string (metin) tipi
//  Strin (metin) tipinde atama yapabilmek için, değişkenin içeriğini tırnak içinde yazarız
//  Tek tırnak (') ya da çift tırnak (") kullanılabilir. Önemli olan, nasıl açıldıysa öyle kapatılmasıdır

$isim = "Uğur Arıcı";
$kurs = 'PHP ile Web Programlamaya Giriş';

//  integer (tam sayı) tipi
//  atama yaparken doğrudan, tırnaksız mırnaksız, tam sayıyı yazarız

$yas = 29;
$dogumYili = 1993;

//  float (ondalıklı sayı) tipi
//  tam sayı ataması gibi, yine tırnaksız mırnaksız, ondalıklı sayıyı yazarız
//  ondalık ayracı olarak nokta (.) kullanılmak zorundadır

$kucukCocukYasi = 4.5;

//  boolean (doğruluk değeri) tipi
//  bir şeyin varlığı/yokluğu üzerine true/false ataması yapabileceğimiz veri tipidir

$yakisikliMi = true;
$dersBittiMi = false;

//  null (yokluk) tipi
//  bir değişkeni null olarak atadığımızda, henüz bir değeri bulunmadığını söylemiş oluruz
//  null tipli bir değişken ile, içeriği boş olan bir değişken birbirinden farklıdır

$allahKorkusu = null;

//  array (dizi) tipi
//  birden çok değeri bir arada tutabilen veri tipidir
//  örneğin; aynı niteliğe sahip verileri, tek bir değişken içinde tutmayı sağlar
//  bir değişkene dizi ataması yapabilmek için, array() parantez içinde her değeri
//      virgüllerle ayırarak yazabiliriz
//  bir kısayol olarak, array() yazmak yerine, boş köşeli parantezlerin [] içine de yazabiliriz

$hobileri = array("konuşmak", "yemek yemek", "gezmek", "çalışmak", "şarkı söylemek");
$fobileri = ["kuşlar", "iguana", "timsah", "yılan", "ödeme gelmemesi", "ay başı", "vergi"];

//  PHP'de bir dizi içinde birbirinden farklı tipte elemanlar tutulabilir

$karma = ["string", 11, 3.75, null, true, false, array("yavru dizinin elemanı")];


// echo "Kahramanımızın adı $isim. Kendisi $dogumYili yılında doğmuş ve $yas yaşında";
// echo 'Kahramanımızın adı ' . $isim . ' Kendisi ' . $dogumYili . ' yılında doğmuş ve ' . $yas . ' yaşında';


//  PHP'de bir dizi içinde her tipte eleman bulundurabildiğimiz için, başkaca diziler de barındırabiliriz
//  Bu yöntem, tekrar eden yapılandırılmış veri oluşturmada fazlaca işimize yarar

//  Örneğin tek boyutlu bir dizi yaratalım ve içinde bir öğrencinin bilgilerini tutalım

$ogrenci = ['ad' => 'Uğur', 'soyad' => 'Arıcı', 'no' => 455, 'sinif' => 'PHP'];

//  Yukarıdaki örnekte, uygulamamız içinde ihtiyaç duyduğumuz ogrenci verisinin tanımını yaptık
//  Ancak uygulamamız içinde birden fazla öğrenci kaydı bulunacaksa, bu standartta dizileri bir arada tutan bir dizi yaratabiliriz

$ogrenciler = [
    ['ad' => 'Uğur', 'soyad' => 'Arıcı', 'no' => 455, 'sinif' => 'PHP'],
    ['ad' => 'Eray', 'soyad' => 'Aydın', 'no' => null, 'sinif' => 'Scala'],
    ['ad' => 'Yunus Emre', 'soyad' => 'Baloğlu', 'no' => 7, 'sinif' => 'PHP'],
    ['ad' => 'Berkan', 'soyad' => 'Tanrı', 'no' => 543, 'sinif' => '1-D'],
];

//  Bu sayede belirli bir standart oturtulmuş "Öğrenci" tipinde veriden, birçok kaydı bir arada tutabiliriz


//  elimizdeki bir değişkenin tipinin ne olduğunu öğrenmek istiyorsak gettype($var) fonksiyonunu kullanabiliriz

echo gettype($ogrenciler);
echo "<hr>";
echo gettype($yas);
echo "<hr>";

//  elimizdeki bir değişkeni tipiyle beraber ekrana döküp inceleyebilmek için var_dump($var) fonksiyonunu kullanabiliriz
//  burada pre html etiketini ön tanımlı tipiyle dümdüz ekrana bas demek için yaptık
// echo "<pre>";
// var_dump($ogrenciler);
// echo "</pre>";

//  PHP'de eğer elimizdeki bir verinin tipini değiştirmek istiyorsak settype fonksiyonunu kullanabiliriz

settype($yas, 'string');

echo "<hr>";
echo gettype($yas);
echo "<hr>";
