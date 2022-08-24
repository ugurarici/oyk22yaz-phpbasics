<?php

$havaDurumu = [
    "Ankara" => 31,
    "İstanbul" => 27,
    "İzmir" => 33,
    "Bolu" => 39,
];

?>

<h1>Baaaaazı Şehirlerdeki Hava Sıcaklıkları</h1>

<ul>

    <?php foreach ($havaDurumu as $sehir => $derece) : ?>

        <li>
            <strong> <?= $sehir ?> </strong>: <?= $derece ?>
        </li>

    <?php endforeach; ?>

</ul>