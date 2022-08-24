<?php

//  Dinamik bir çıktı üretebilmek için PHP'de şartlı ifadeler çalıştırabiliriz

//  Kontrolü sağlamak için şartı bir if() içine alırız, şartın sağlanması durumunda
//      çalışacak kısmı, if() 'in hemen sonrasında açtığımız bir süslü parantez {} içine yazarız

if (true) {
    echo "Burada şartı direkt true verdiğimiz için bu satır çalışacaktır";
}

echo "<hr>";

//  if içine kontrol için verdiğimiz ifadenin, true ya da false çıktı üretmesi gerekir
//  bunun için bazı kontrol operatörleri kullanabiliriz

//  Örneğin iki sayının birbirinden büyük, küçük, büyük eşit, küçük eşit, eşit olma durumları kontrol edilebilir

/**
 * büyükse                          >
 * küçükse                          <
 * büyük eşitse                     >=
 * küçük eşitse                     <=
 * içeriği eşitse                   ==
 * içeriği eşit değilse             !=
 * içeriği ve tipi eşitse           ===
 * içeriği ve tipi eşit değilse     !==
 */

$yas = 18;

if ($yas > 18) {
    echo "Bu kişi çoktan reşit olmuş";
} elseif ($yas == 18) {
    echo "Bu kişi bu sene reşit olmuş";
} elseif ($yas >= 7 and $yas < 18) {
    echo "Bu kişi okul çağında";
} else {
    echo "Bu kişi henüz reşit değil";
}

//  çoklu koşulları bir arada kontrol edebilmek
//  bir if() içinde birden fazla ifadenin birlikte kontrolü mümkündür
//  bunun için her ifadenin true olmasını istiyorsak AND ya da && operatörlerini
//  herhangi birinin true olması yetiyorsa OR ya da || operatörlerini
//  biri true iken diğerinin false olması şartı varsa XOR

if (true and true) {
    // AND ile kontrol yapıldığından ikisinin de true olması gerekiyordu, ikisi de true, burası çalışır
}

if (true && false) {
    // AND ile kontrol yapıldığından ikisinin de true olması gerekiyordu, biri false, burası çalışmaz
}

if (true or false) {
    // OR ile kontrol yapıldığından herhangi birinin true olması gerekiyordu, biri true, burası çalışır
}

if (false || false) {
    // OR ile kontrol yapıldığından herhangi birinin true olması gerekiyordu, ikisi de false, burası çalışmaz
}

if (true xor false) {
    //  XOR ile kontrol yapıldığından biri true iken diğerinin false olması gerekir, burada da birisi true diğeri false, burası çalışır
}

if (true xor true) {
    //  XOR ile kontrol yapıldığından biri true iken diğerinin false olması gerekir, burada ikisi de true, burası çalışmaz
}

if (false xor false) {
    //  XOR ile kontrol yapıldığından biri true iken diğerinin false olması gerekir, burada ikisi de false, burası çalışmaz
}

echo "<hr>";
$meslek = "işportacı";

//  Bir ifadeyi bir çok değer ile karşılaştırmak istediğimizde switch kullanabiliriz. switch sonrası süslü parantez açarak case lerimizi belirtiriz. Her bir case deki ifade ile başta belirlenen ifade karşılaştırılır ve eğer doğruysa ilgili kod bloğu break görene kadar çalıştırılır. Herhangi bir case ifadesinin karşılanmaması durumunda da default içerisindeki kod bloğu çalışır.
switch ($meslek) {
    case "bilim adamı":
        // eğer mesleği bilim adamı ise burası çalışacak
        echo "Laboratuvarda deney tüpleriyle çalışıyordu.";
        break;
    case "polis":
    case "asker":
        echo "Gece mesaideyken telsizden bir anons duydu.";
    case "itfaiye":
        echo "Spor salonunda çalışıyordu.";
        break;
    default:
        echo "İşsiz birisiydi.";
        break;
}

if ($meslek == "bilim adamı") {
    // ...
} elseif ($meslek == "polis") {
    // ..
} else {
    // ..
}
