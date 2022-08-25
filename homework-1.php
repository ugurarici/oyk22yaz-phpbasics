<?php

//  örnek
//  PHP'de dahili bir fonksiyon kullanılarak diziler üstünde işlem yapabiliriz

// $numbers = [9, 7, 13, 6, 5, 32, 666];

// var_dump($numbers);

// https://www.php.net/sort
// sort($numbers);

// var_dump($numbers);

//  Bir sınav sonuç görüntüleme ekranı yapıyoruz
//  İsimleri birbirinden farklı öğrencilerin notlarını yazacağız (dizi olarak tutabilirsiniz)

$grades = [
    "Ege" => 55,
    "Çisem" => 79,
    "Berkan" => 13,
    "Kadir" => 100,
    "Betül" => 74,
    "Şevval" => 81,
    "Damla" => 70,
    "Metehan" => 26,
    "Vahit" => 60,
    "Rıza" => 57,
    "Yunus Emre" => 58,
    "Oğulcan" => 30,
];
?>


<h1>Sınav Sonuçları</h1>

<?php
//  Sınav sonuçlarını
//  1- Nota göre büyükten küçüğe
arsort($grades);

?>
<h2>Nota Göre 9-1</h2>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th>Öğrenci</th>
        <th>Not</th>
    </tr>
    <?php foreach ($grades as $name => $grade) : ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $grade ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<hr>

<?php
//  2- Nota göre küçükten büyüğe

asort($grades);
?>
<h2>Nota Göre 1-9</h2>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th>Öğrenci</th>
        <th>Not</th>
    </tr>
    <?php foreach ($grades as $name => $grade) : ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $grade ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<hr>

<?php

//  3- İsme göre A->Z

ksort($grades);
?>
<h2>İsme Göre A-Z</h2>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th>Öğrenci</th>
        <th>Not</th>
    </tr>
    <?php foreach ($grades as $name => $grade) : ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $grade ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<hr>

<?php

//  4- İsme göre Z->A

krsort($grades);

?>
<h2>İsme Göre Z-A</h2>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th>Öğrenci</th>
        <th>Not</th>
    </tr>
    <?php foreach ($grades as $name => $grade) : ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $grade ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<hr>

<?php

//  En yüksek notu
//  En düşük notu
//  Not ortalaması
//  BONUS: standart sapma

if (!function_exists('stats_standard_deviation')) {
    function stats_standard_deviation($array)
    {
        $count = count($array);
        $value = 0;
        $avg = array_sum($array) / $count;
        foreach ($array as $i) {
            $value += pow(($i - $avg), 2);
        }
        return sqrt($value / $count);
    }
}

//  HER BİR ÖĞRENCİ İÇİN NOT VERİSİ BİR KERE TANIMLANACAK
?>
<h2>Baaaaazı İstatistikler</h2>
<table border="2" cellspacing="0" cellpadding="10">
    <tr>
        <th>En Yüksek Not</th>
        <td><?= max($grades) ?></td>
    </tr>
    <tr>
        <th>En Düşük Not</th>
        <td><?= min($grades) ?></td>
    </tr>
    <tr>
        <th>Not Ortalaması</th>
        <td><?= array_sum($grades) / count($grades) ?></td>
    </tr>
    <tr>
        <th>Standart Sapma</th>
        <td><?= stats_standard_deviation($grades) ?></td>
    </tr>
</table>