<?php

//  bir öğrenci listesi göstereceğiz
//  öğrenci isimleri tıklanabilir olacak
//  ismine tıklanan öğrencinin bilgilerini bir detay sayfasında göstereceğiz

include "data.php";

?>

<table border="2" style="width: 100%;">
    <tr>
        <th>#</th>
        <th>Adı</th>
    </tr>
    <?php foreach ($students as $indis => $student) :
        if (!$student['is_active']) continue;
    ?>
        <tr>
            <td><?= $student["number"] ?></td>
            <td>
                <a href="detail.php?i=<?= $indis ?>">
                    <?= $student["name"] ?> <?= $student["surname"] ?>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<p>Sistemde kayıtlı toplam <?= count($students) ?> kullanıcı var. Aktif olmayanlar listede görüntülenmez.</p>