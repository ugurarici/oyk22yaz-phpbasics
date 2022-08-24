<?php

$students = [
    [
        "name" => "Uğur",
        "surname" => "Arıcı",
        "number" => 455,
        "course" => "PHP",
        "is_active" => true,
    ],
    [
        "name" => "Ege",
        "surname" => "Akat",
        "number" => 666,
        "course" => "Laravel",
        "is_active" => false,
    ],
    [
        "name" => "Berkan",
        "surname" => "Tan",
        "number" => 543,
        "course" => "PHP",
        "is_active" => true,
    ],
    [
        "name" => "Vahit",
        "surname" => "Tosun",
        "number" => 1065,
        "course" => "PHP",
        "is_active" => true,
    ],
];

?>

<table border="2" style="width: 100%;">
    <tr>
        <th>#</th>
        <th>Adı</th>
        <th>Soyadı</th>
        <th>Sınıfı</th>
    </tr>
    <?php foreach ($students as $student) :
        if (!$student['is_active']) continue;
    ?>
        <tr>
            <td><?= $student["number"] ?></td>
            <td><?= $student["name"] ?></td>
            <td><?= $student["surname"] ?></td>
            <td><?= $student["course"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<p>Sistemde kayıtlı toplam <?= count($students) ?> kullanıcı var. Aktif olmayanlar listede görüntülenmez.</p>