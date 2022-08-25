<?php

//  PHP'de bazı kod bloklarını, gerektiğinde çağırıp kullanabilmek adına
//  fonksiyon olarak tanımlayabiliriz

//  fonksiyonlar, n adet parametreyi kabul edip, bunları kullanarak işlem yapan
//  ve gerekirse işlemin sonucunu bir çıktı olarak döndüren işlevlerdir

//  bir fonksiyon tanımlamak için öncelikle function anahtar kelimesini yazar
//  bir boşluk bıraktıktan sonra fonksiyonun adı yazılır
//  fonksiyonun adının yanına parametrelerin tanımlanacağı bir parantez açılıp kapatılır 
//  ardından bir süslü parantez içinde fonksiyonun yapacağı işlemler tanımlanır
//  eğer fonksiyon yaptığı işlemlerin sonucunda bir çıktı dönecekse
//  return anahtar kelimesi aracılığıyla döneceği değer belirlenir
//  bir fonksiyon çalışırken, return ifadesini görüp çıktıyı döndürdükten sonrasını işleme koymaz

function selamla()
{
    echo "Selam 🙋🏻‍♂️<hr>";
}

//  PHP'de bir fonksiyon tanımlandığında, çağırılana kadar, çalıştırılmaz

selamla();

//  tanımlanmış bir fonksiyon birden çok kez çağırılabilir

selamla();
selamla();
selamla();

//  fonksiyonların kendi işleyişleri içerisinde dilenirse echo print gibi
//  ifadelerle ekrana çıktı üretmek mümkünse de bu tercih edilmez
//  bir fonksiyon için tercih edilen davranış; dışarıya göndereceği veriyi
//  return anahtar kelimesi ile döndürmesidir
//  bu fonksiyonun döndürdüğü sonuçla ne yapılacağına fonksiyonun kullanıldığı yerde karar verilir

function adamAkilliSelamla()
{
    return "Selam 👋";
}

$selam = adamAkilliSelamla();
echo $selam . "<hr>";

echo adamAkilliSelamla() . "<hr>";

echo strlen(adamAkilliSelamla()) . "<hr>";

//  fonskiyon tanımlarken parametre verebiliriz

//  bir fonksiyonun tanımı esnasında belirtilen parametreler
//  bu parametreleri temsilen kullanılan değişkenler
//  fonksiyonun içinde hariciden yaratılıp kullanılan değişkenler
//  o fonksiyonun her bir çalıştırılmasına özel bir alanda tutulur
//  ve global scope dediğimiz, uygulamamızın kendi değişkenlerine karışmazlar

//  yani fonksiyon dışında $ad şeklinde bir değişkenimiz varsa
//  fonksiyonda parametre olarak ya da fonksiyon içinde aynı isimli $ad şeklinde
//  bir değişken tanımlasak bile, bu asla dışarıdaki $ad değişkenine etki etmez
//  fonksiyon çağırıldığında, tamamen kendine özel bir etki alanı açılır
//  o çalışmaya özel değişkenler o alanda tutularak işleme sokulur
//  global scope'a (hem okuma hem yazma) bakımından asla erişemez / karışamaz
//  fonksiyon parametre olarak ne aldıysa ona ve ancak kendi içinde üretilen değişkenlere erişebilir

//  ANCAK bunun bir istisnası bulunmaktadır
//  UYARI UYARI UYARI bu istisnayı bilin diye yazıyorum, sakın kullanmıyore
//  eğer fonksiyon içinde global anahtar kelimesinden sonra, global scope içinde
//  hangi değişkenlere erişim sağlamak istediğinizi virgüllerle ayırarak yazarsanız
//  bu değişkenleri hem okuyabilir hem de üzerine yazabilir hale gelirsiniz
//  SAKIN KULLANMAYIN
//  scope'u ayrı tutulması gereken fonksiyonlar, global scopetaki veriye erişebilir hale geldiğinde, öngörülemeyen sorunlara sebep olabilir

$ad = "Uğur";
$yas = 29;

function adiylaSeslen($ad)
{

    //  global $yas;
    $yas = 18;
    return "Selam " . $ad . " 🙌";
}

echo $ad . "<hr>";
echo $yas . "<hr>";

echo adiylaSeslen("Metehan") . "<hr>";

echo $ad . "<hr>";
echo $yas . "<hr>";

//  bir fonskiyon tanımı, fonksiyon çağırılmadığı sürece PHP yorumlayıcısı tarafından okunmaz
//  PHP yazımında bir sorun yoksa, kod yorumlayıcı tarafından hatasız görünür
//  ancak çalışma esnasında, fonksiyon çağırılıp içi çalıştırılınca
//  daha önceden karışlaşılmamış bir hataya denk gelinebilir

function tatliBirFonksiyon()
{
    return boyleBirFonksiyonYok();
}

echo "Burası çalışır, çünkü henüz fonksiyon çağırılıp hataya sebep olmadı<hr>";

//  aşağıdaki fonksiyon çağırılırsa, kendi içinde "varolmayan bir fonksiyon" çağırıldığı için fatal error verecektir
// tatliBirFonksiyon();


function a()
{
    function b()
    {
        function c()
        {
            return "aman aman nereye geldik bir anda?";
        }
    }
}

a();
b();
echo c();

//  a();

//  php içinde bir fonksiyon yalnızca 1 kere tanımlanabilir
//  varolan bir fonksiyonun adıyla tekrar tanımlamaya yaptığınızda hata verecektir